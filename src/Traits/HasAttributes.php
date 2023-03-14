<?php

namespace tei187\HTMLBuilder\Traits;

trait HasAttributes {
    protected $attributes = [];

    public function addAttribute(string $name, string $value) : self { 
        $this->attributes[$name] = $value;
        return $this;
    }

    /**
     * @param array $attributes Keys have to be valid attribute names.
     * @return self
     */
    public function addManyAttributes(array $attributes = []) : self {
        foreach($attributes as $name => $value) {
            $this->addAttribute($name, $value);
        }
        return $this;
    }

    public function removeAttribute(string $attributeName) : self {
        $key = array_search($attributeName, $this->attributes);
        if($key !== false) {
            unset($this->attributes[$key]);
        }
        return $this;
    }
}
