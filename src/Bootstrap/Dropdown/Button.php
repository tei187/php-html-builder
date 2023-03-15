<?php

namespace tei187\HTMLBuilder\Bootstrap\Dropdown;

use tei187\HTMLBuilder\Bootstrap;
use tei187\HTMLBuilder\Traits\HasAttributes;
use tei187\HTMLBuilder\Traits\HasClasses;

class Button {
    use HasClasses, HasAttributes;

    private $size = null;
    private $content = "";
    private $autoClose = "true";
    private $dropdownToggle = false;

    function __construct() {
        $this->setAttribute('type', 'button');
        $this->setAttribute('data-bs-toggle', 'dropdown');
    }

    // button size
    public function setSmallSize() : self { $this->size = 'btn-sm'; return $this; }
    public function setLargeSize() : self { $this->size = 'btn-lg'; return $this; }
    public function resetSize() : self    { $this->size = null;     return $this; }

    // button content
    public function setContent($content) : self { $this->content = $content; return $this; }

    // button auto-close set
    public function setAutoCloseDefault() : self { $this->autoClose = "true"; return $this; }
    public function setAutoCloseInside() : self  { $this->autoClose = "inside"; return $this; }
    public function setAutoCloseOutside() : self { $this->autoClose = "outside"; return $this; }
    public function setAutoCloseManual() : self  { $this->autoClose = "false"; return $this; }
    
    // button dropdown toggle icon
    public function setDropdownToggle(bool $bool = true) : self { 
        $this->dropdownToggle = $bool;
        $this->dropdownToggle
            ? $this->addClass('dropdown-toggle')
            : $this->removeClass('dropdown-toggle');

        return $this; 
    }

    public function render() : string {
        $this->setAttribute('data-bs-auto-close', $this->autoClose);
        $classes = [ 'class' => implode(" ", $this->classes) ];

        switch($this->size) {
            case 'btn-sm':
                if(!strpos($classes['class'], 'btn-sm')) {
                    $classes['class'] = $classes['class'] . " btn-sm";
                }
                break;
            case 'btn-lg':
                if(!strpos($classes['class'], 'btn-lg')) {
                    $classes['class'] = $classes['class'] . " btn-lg";
                }
                break;
        }
        $attr = array_merge($this->attributes, $classes);

        return
            Bootstrap::Button($attr, $this->content);
    }
}
