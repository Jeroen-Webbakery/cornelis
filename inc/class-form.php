<?php

class Form
{
    protected static $values = [];

    /**
     * Error messages.
     *
     * @var array
     */
    private static $errors = [
        'fields'   => [],
        'messages' => [],
    ];

    /**
     * Update messages.
     *
     * @var array
     */
    private static $messages = [];

    /**
     * The success status.
     *
     * @var boolean
     */
    private static $is_success = false;

    /**
     * Check if the form was valid.
     *
     * @return boolean
     */
    public static function is_form_valid()
    {
        return count((array)self::get(self::$errors, 'fields', [])) ? false : true;
    }

    public static function get_field_value($name)
    {
        return isset($_POST) ? self::get($_POST, $name, self::get(self::$values, $name)) : self::get(self::$values, $name);
    }

    public static function get_field_errors($name)
    {
        $msg_errors = '';

        if (!empty($errors = self::get(self::$errors['fields'], $name))) {
            foreach ((array)$errors as $error) {
                $msg_errors .= '<div id="message" class="error inline" style="display:block;"><p>' . esc_html($error) . '</p></div>';
            }
        }

        return $msg_errors;
    }


    public static function set_values($values)
    {
        self::$values = $values;
    }

    /**
     * Validate the fields.
     *
     * @param array $fields
     * @param array $validations
     */
    public static function validate_fields($fields = [], $validations = [])
    {
        foreach ($validations as $fieldKey => $validation) {
            $field = self::get($fields, $fieldKey);

            $validationKeys = array_keys($validation);

            if (empty($field) || (!is_array($field) && empty(trim($field)))) {
                // Required
                if (in_array('required', $validationKeys, true)) {
                    self::add_error(sprintf(__('Veld is verplicht.', 'cornelis'), $fieldKey), $fieldKey);
                }
            } else {
                // Valid value
                if (in_array('in', $validationKeys, true)
                    && count($values = self::get($validation, 'in'))
                    && !in_array($field, $values, false)) {
                    self::add_error(sprintf(__('Field %s is invalid.', 'cornelis'), $fieldKey), $fieldKey);
                }

                if (in_array('not_exists_in', $validationKeys, true)
                    && count($values = self::get($validation, 'not_exists_in'))
                    && in_array($field, $values, false)) {
                    self::add_error(sprintf(__('Value of field %s already exists, and must be unique.', 'cornelis'), $fieldKey), $fieldKey);
                }

                if (in_array('string', $validationKeys, true) && !is_string($field)) {
                    self::add_error(sprintf(__('Veld moet een tekenreeks zijn.', 'cornelis'), $fieldKey), $fieldKey);
                }

                if (in_array('integer', $validationKeys, true) && !is_int($field)) {
                    self::add_error(sprintf(__('Field %s must be of type integer.', 'cornelis'), $fieldKey), $fieldKey);
                }

                if (in_array('numeric', $validationKeys, true) && !is_numeric($field)) {
                    self::add_error(sprintf(__('Field %s must be of type numeric.', 'cornelis'), $fieldKey), $fieldKey);
                }

                if (in_array('email', $validationKeys, true) && !is_email($field)) {
                    self::add_error(sprintf(__('Veld is geen geldig e-mailadres.', 'cornelis'), $fieldKey), $fieldKey);
                }

                if (in_array('array', $validationKeys, true) && !is_array($field)) {
                    self::add_error(sprintf(__('Field %s must be a array.', 'cornelis'), $fieldKey), $fieldKey);
                }

//                if (in_array('url', $validationKeys, true) && !wc_is_valid_url($field)) {
//                    self::add_error(sprintf(__('Field %s must be a valid url.', 'cornelis'), $fieldKey), $fieldKey);
//                }

                if (in_array('max', $validationKeys, true) && !empty($max = self::get($validation, 'max')) && strlen($field) > (int)$max) {
                    self::add_error(sprintf(__('Veld mag niet uit meer dan %s karakters bestaan.', 'cornelis'), $max), $fieldKey);
                }

                if (in_array('min', $validationKeys, true) && !empty($min = self::get($validation, 'min')) && strlen($field) < (int)$min) {
                    self::add_error(sprintf(__('Veld moet minimaal %s karakters zijn.', 'cornelis'), $min), $fieldKey);
                }

                if (in_array('regex', $validationKeys, true) && !empty($regex = self::get($validation, 'regex')) && @preg_match($regex, $field) === false) {
                    self::add_error(sprintf(__('Field %s format is invalid.', 'cornelis'), $fieldKey), $fieldKey);
                }
            }
        }
    }

    /**
     * Add an error.
     *
     * @param string      $text
     * @param string|null $field
     */
    public static function add_error($text, $field = null)
    {
        if (null !== $field) {
            self::$errors['fields'][$field][] = $text;
        } else {
            self::$errors['messages'][] = $text;
        }
    }

    /**
     * Add a message.
     *
     * @param string $text
     */
    public static function add_message($text)
    {
        self::$messages[] = $text;
    }

    /**
     * Check if the form was successfully progressed.
     *
     * @return boolean
     */
    public static function is_success()
    {
        return self::$is_success;
    }

    /**
     * Set the success status
     */
    public static function set_success()
    {
        self::$is_success = true;
    }

    /**
     * Output messages + errors.
     *
     * @param bool $with_field_errors
     *
     * @return string
     */
    public static function show_messages($with_field_errors = false)
    {
        if (count($errors = (array)self::get(self::$errors, 'messages', [])) || ($with_field_errors && count($errors_fields = (array)self::get(self::$errors, 'fields', [])))) {
            foreach ($errors as $error) {
                echo '<div id="message" class="error inline" style="display:block;"><p><strong>' . esc_html($error) . '</strong></p></div>';
            }

            if ($with_field_errors && isset($errors_fields) && count($errors_fields)) {
                foreach ($errors_fields as $errors) {
                    foreach ($errors as $error) {
                        echo '<div id="message" class="error inline" style="display:block;"><p><strong>' . esc_html($error) . '</strong></p></div>';
                    }
                }
            }
        } elseif (count(self::$messages)) {
            foreach (self::$messages as $message) {
                echo '<div id="message" class="updated success inline" style="display:block;"><p><strong>' . esc_html($message) . '</strong></p></div>';
            }
        }

        return '';
    }




//    public static function pre_fill($name, $default = '')
//    {
//        if (!isset($_GET[$name]) || empty($_GET[$name])) {
//            return $default;
//        }
//
//        return htmlspecialchars(sanitize_text_field($_GET[$name]));
//
//    }

    /**
     * Get an item from an array using "dot" notation.
     *
     * @param  \ArrayAccessForm|array  $array
     * @param  string  $key
     * @param  mixed   $default
     * @return mixed
     */
    public static function get($array, $key, $default = null)
    {
        if (! static::accessible($array)) {
            return value($default);
        }

        if (null === $key) {
            return $array;
        }

        if (static::exists($array, $key)) {
            return $array[$key];
        }

        foreach (explode('.', $key) as $segment) {
            if (static::accessible($array) && static::exists($array, $segment)) {
                $array = $array[$segment];
            } else {
                return value($default);
            }
        }

        return $array;
    }

    /**
     * Get a subset of the items from the given array.
     *
     * @param  array        $array
     * @param  array|string $keys
     *
     * @return array
     */
    public static function only($array, $keys)
    {
        return array_intersect_key($array, array_flip((array)$keys));
    }

    /**
     * Determine whether the given value is array accessible.
     *
     * @param  mixed  $value
     * @return bool
     */
    public static function accessible($value)
    {
        return is_array($value) || $value instanceof ArrayAccessForm;
    }

    /**
     * Determine if the given key exists in the provided array.
     *
     * @param  \ArrayAccessForm|array  $array
     * @param  string|int  $key
     * @return bool
     */
    public static function exists($array, $key)
    {
        if ($array instanceof ArrayAccessForm) {
            return $array->offsetExists($key);
        }

        return array_key_exists($key, $array);
    }

}


if (! function_exists('value')) {
    /**
     * Return the default value of the given value.
     *
     * @param  mixed  $value
     * @return mixed
     */
    function value($value)
    {
        return $value instanceof \Closure ? $value() : $value;
    }
}

/**
 * Interface to provide accessing objects as arrays.
 * @link http://php.net/manual/en/class.arrayaccess.php
 */
interface ArrayAccessForm
{

    /**
     * Whether a offset exists
     * @link  http://php.net/manual/en/arrayaccess.offsetexists.php
     *
     * @param mixed $offset <p>
     *                      An offset to check for.
     *                      </p>
     *
     * @return boolean true on success or false on failure.
     * </p>
     * <p>
     * The return value will be casted to boolean if non-boolean was returned.
     * @since 5.0.0
     */
    public function offsetExists($offset);

    /**
     * Offset to retrieve
     * @link  http://php.net/manual/en/arrayaccess.offsetget.php
     *
     * @param mixed $offset <p>
     *                      The offset to retrieve.
     *                      </p>
     *
     * @return mixed Can return all value types.
     * @since 5.0.0
     */
    public function offsetGet($offset);

    /**
     * Offset to set
     * @link  http://php.net/manual/en/arrayaccess.offsetset.php
     *
     * @param mixed $offset <p>
     *                      The offset to assign the value to.
     *                      </p>
     * @param mixed $value  <p>
     *                      The value to set.
     *                      </p>
     *
     * @return void
     * @since 5.0.0
     */
    public function offsetSet($offset, $value);

    /**
     * Offset to unset
     * @link  http://php.net/manual/en/arrayaccess.offsetunset.php
     *
     * @param mixed $offset <p>
     *                      The offset to unset.
     *                      </p>
     *
     * @return void
     * @since 5.0.0
     */
    public function offsetUnset($offset);
}
