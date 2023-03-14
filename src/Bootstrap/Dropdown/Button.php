<?php

namespace tei187\HTMLBuilder\Bootstrap\Dropdown;

use tei187\HTMLBuilder\Bootstrap;
use tei187\HTMLBuilder\HTML;
use tei187\HTMLBuilder\Traits\HasAttributes;
use tei187\HTMLBuilder\Traits\HasClasses;

class Button {
    use HasClasses, HasAttributes;

    private $size = null;
    private $content = "";

    function __construct() {
        $this->addAttribute('type', 'button');
        $this->addAttribute('data-bs-toggle', 'dropdown');
    }

    public function setSmallSize() : self { $this->size = 'btn-sm'; return $this; }
    public function setLargeSize() : self { $this->size = 'btn-lg'; return $this; }
    public function resetSize() : self    { $this->size = null;     return $this; }

    public function setContent($content) : self { $this->content = $content; return $this; }

    public function render() {
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
