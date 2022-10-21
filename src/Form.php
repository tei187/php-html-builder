<?php

namespace tei187\HTMLBuilder;

use tei187\HTMLBuilder\Traits\ClosingTags;
use tei187\HTMLBuilder\Traits\ListableAttributes;
use tei187\Utilities;

/**
 * Form-specific basic HTML elements.
 */
class Form {
    use ListableAttributes, 
        ClosingTags;

    /**
     * @var string[][] Array holding switches, to resolve whether something should be a button or input element.
     */
    static $table = [
        'input'  => [ "text", "password", "submit", "reset", "radio", "checkbox", "button", "file", "image", "color", "date", "datetime-local", "email", "month", "number", "url", "week", "search", "tel", "hidden" ],
        'button' => [ "button", "submit", "reset" ],
    ];

    /**
     * Button HTML5 element.
     *
     * @param string $type Type attribute.
     * @param string|null $id Id attribute.
     * @param string|null $name Name attribute.
     * @param int|float|string|null $content Content.
     * @param array|null $attributes Other attributes.
     * @return string
     */
    static function Button(string $type = 'button', ?string $id = null, ?string $name = null, ?string $content = null, ?array $attributes = []) : string {
        return 
            "<button" 
                . (in_array($type, self::$table['button']) 
                    ? " type='{$type}'" : "")
                . (!empty($id) 
                    ? " id='{$id}'" : "")
                . (!empty($name) 
                    ? " name='{$name}'" : "")
                . (!empty($attributes) && is_array($attributes) 
                    ? self::_ListAttributes($attributes, [ 'type', 'id', 'name' ]) : "")
          . ">".$content."</button>";
    }
    /**
     * Form HTML5 element.
     *
     * @param string|null $method Method attribute.
     * @param string|null $action Action attribute.
     * @param int|float|string|null $content Content.
     * @param array|null $attributes Other attributes.
     * @return string
     */
    static function Form(?string $method = 'POST', ?string $action = null, ?string $content = null, ?array $attributes = []) : string {
        return
            "<form"
                . (in_array(strtoupper(trim($method)), [ 'POST', 'GET' ]) 
                    ? " method='".strtoupper(trim($method))."'"
                    : " method='POST'")
                . (!empty($action)
                    ? " action='{$action}'" : null)
                . (!empty($attributes) && is_array($attributes) 
                    ? self::_ListAttributes($attributes, [ 'method', 'action' ]) : "")
          . ">" . $content . "</form>";
    }    
    /**
     * Input HTML5 element.
     *
     * @param string $type Type attribute.
     * @param string|null $id Id attribute.
     * @param string|null $name Name attribute.
     * @param array|null $attributes Other attributes.
     * @param int|float|string|null $value Value attribute.
     * @return string
     */
    static function Input(string $type = 'text', ?string $id = null, ?string $name = null, ?array $attributes = [], $value = null) : string {
        return 
            "<input" 
                . (in_array($type, self::$table['input']) 
                    ? " type='{$type}'" : "")
                . (!empty($id) 
                    ? " id='{$id}'" : "")
                . (!empty($name) 
                    ? " name='{$name}'" : "")
                . (!Utilities::empty($value)
                    ? " value='{$value}'" : "")
                . (!empty($attributes) && is_array($attributes) 
                    ? self::_ListAttributes($attributes, [ 'type', 'id', 'name', 'value' ]) : "")
          . " />";
    }
    /**
     * Label HTML5 element.
     *
     * @param int|float|string|null $content Content.
     * @param string|null $for For attribute.
     * @param array|null $attributes Other attributes.
     * @return string
     */
    static function Label(?string $content = null, ?string $for = null, ?array $attributes = []) : string {
        return 
            "<label"
                . (!empty($for) 
                    ? " for='{$for}'" : "")
                . (!empty($attributes) && is_array($attributes) 
                    ? self::_ListAttributes($attributes, [ 'for' ]) : "")
          . ">" . $content . "</label>";
    }
    /**
     * Option HTML5 element.
     *
     * @param mixed|null $key Option value attribute.
     * @param mixed|null $label Option content.
     * @param boolean|null $selected Selected control flag.
     * @return string
     */
    static function Option($key = null, $label = null, ?bool $selected = false) : string {
        return 
            $label == "%%hr%%"
                ? (
                    "<option disabled style='text-align:left;color:#ddd;padding:0'>&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;</option>"
                  )
                : (
                    "<option value='{$key}'" .
                    (
                        !empty($selected)
                            ? " selected"
                            : null
                    )
                    . ">{$label}</option>"
                  );
    }
    /**
     * Option group HTML5 element.
     *
     * @param string|null $label Name of option group.
     * @param string|array|null $options Array of option or HTML5 string.
     * @param mixed|null $selected Selected id/key.
     * @return string
     */
    static function OptGroup(?string $label = null, $options = null, $selected = null) : string {
        if(is_array($options)) {
            $optionsArr = [];
            foreach($options as $key => $label) {
                $optionsArr[] = 
                    Form::Option(
                        $key, 
                        $label, 
                        ($key == $selected ? true : false
                    )
                );
            }
            $optionsArr = array_filter($optionsArr);
            $optionsArr = implode(PHP_EOL, $optionsArr);
        } elseif (is_string($options)) {
            $optionsArr = $options;
        }

        return "<optgroup label='{$label}'>".$optionsArr."</optgroup>";
    }
    /**
     * Textarea HTML5 element.
     *
     * @param string|null $id Id attribute.
     * @param string|null $name Name attribute.
     * @param array|null $attributes Other attributes.
     * @param int|float|string|null $content Content.
     * @return string
     */
    static function Textarea(?string $id = null, ?string $name = null, ?array $attributes = [], $content = null) : string {
        return 
            "<textarea" 
                . (!empty($id) 
                    ? " id='{$id}'" : "")
                . (!empty($name) 
                    ? " name='{$name}'" : "")
                . (!empty($attributes) && is_array($attributes) 
                    ? self::_ListAttributes($attributes, [ 'type', 'id', 'name', 'value' ]) : "")
          . " />" . (!empty($content) ? $content : "") . "</textarea>";
    }
}