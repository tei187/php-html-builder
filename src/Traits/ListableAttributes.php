<?php

namespace tei187\HTMLBuilder\Traits;

use tei187\Utilities;

/**
 * Tag attribute sorter and checker.
 */
trait ListableAttributes {
    /**
     * Attributes list template.
     *
     * @param array $attributes Attributes list to generate. Key is the attribute name, value is attribute value.
     * @param array $limit Limits tags from reappearing if they are already included in tag constructor
     * (if specified constructor function already has 'class' attribute or 'class' attribute was used before
     * list generation, it should be included in 'limit').
     * @return string
     */
    private static function _ListAttributes(array $attributes, array $limit = []) : ?string {
        if(empty($attributes))
            return "";

        $o = null;
        foreach($attributes as $attr => $value) {
            if(!in_array($attr, $limit)) {
                Utilities::Empty($value)
                    ? $o .= " ".strtolower($attr)."='".htmlentities($value)."'"
                    : $o .= " ".strtolower($attr);
            }
        }
        return $o;
    }
    private static function _RetypeAttributes($attributes) : array {
        return
            is_array($attributes)
                ? $attributes
                : [];
    }
}
