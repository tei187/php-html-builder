<?php

namespace tei187\HTMLBuilder\Traits;

/**
 * Handles element attributes.
 */
trait HasAttributes {
    protected $attributes = [];

    /**
     * @param string $name Name has to be valid attribute name.
     * @param string $value
     * @return self
     */
    public function setAttribute(string $name, string $value) : self { 
        $this->attributes[$name] = $value;
        return $this;
    }

    /**
     * @param array $attributes Keys have to be valid attribute names.
     * @return self
     */
    public function setManyAttributes(array $attributes = []) : self {
        foreach($attributes as $name => $value) {
            $this->addAttribute($name, $value);
        }
        return $this;
    }

    /**
     * @param string $attributeName
     * @return self
     */
    public function removeAttribute(string $attributeName) : self {
        $key = array_search($attributeName, $this->attributes);
        if($key !== false) {
            unset($this->attributes[$key]);
        }
        return $this;
    }

    /**
     * Returns combined string of all attributes.
     * @param boolean $withMergedClass If true, seeks if object has 'classes' property and merges it with rest of attributes.
     * @return string
     */
    public function getAttributesStr(bool $withMergedClass = false) : string {
        $str = "";
        $attributes = $this->getAttributes($withMergedClass);
        foreach($attributes as $name => $value) {
            $str .= "{$name}='{$value}' ";
        }
        return trim($str);
    }

    /**
     * Returns combined array of all attributes.
     * @param boolean $withMergedClass If true, seeks if object has 'classes' property and merges it with rest of attributes.
     * @return array
     */
    public function getAttributes(bool $withMergedClass = false) : array {
        if($withMergedClass) {
            $keyExists = key_exists('class', $this->attributes);
            $attr = $this->attributes;
            if($keyExists && isset($this->classes)) {
                $attr['class'] = $attr['class'] . " " . implode(" ", array_unique(array_merge(explode(" ", $attr['classes']), $this->classes)));
            } elseif(!$keyExists && isset($this->classes)) {
                $attr['class'] = implode(" ", $this->classes);
            }
            return $attr;
        }
        return $this->attributes;
    }
}
