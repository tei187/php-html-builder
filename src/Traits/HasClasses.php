<?php

namespace tei187\HTMLBuilder\Traits;

trait HasClasses {
    private $classes = [];
    
    /**
     * @param string|array $classes Regular array of class names or string.
     * @return self
     */
    public function setClasses($classes) : self {
        is_array($classes)
            ? $this->classes = array_merge($this->classes, $classes)
            : $this->classes = array_merge($this->classes, explode(" ", str_replace(",", " ", strval($classes))));
        
        $this->classes = array_unique($this->classes);
        return $this;
    }

    public function addClass(string $class) : self {
        $this->classes[] = $class;
        return $this;
    }

    public function removeClass(string $class) : self {
        $key = array_search($class, $this->classes);
        if($key !== false) { unset($this->classes[$key]); }
        return $this;
    }
}