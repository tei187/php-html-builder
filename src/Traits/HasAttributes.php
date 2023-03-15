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
}
