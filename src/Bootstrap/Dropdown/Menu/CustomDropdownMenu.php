<?php

namespace tei187\HTMLBuilder\Bootstrap\Dropdown\Menu;

use tei187\HTMLBuilder\Traits\HasAttributes;
use tei187\HTMLBuilder\Traits\HasClasses;
use tei187\HTMLBuilder\HTML;

class CustomDropdownMenu {
    use HasClasses, HasAttributes;
    
    private $items = [];
    private $tag = "div";

    function __construct() {
        $this->addClass('dropdown-menu');
    }

    public function addItem(string $item) : self { $this->items[] = $item; return $this; }
    public function setTag(string $tag) : self { $this->tag[] = $tag; return $this; }
    /**
     * Sets `items` to FALSE, indicating a self-closing tag.
     *
     * @return self
     */
    public function setSelfClosing()      : self { $this->items[] = false; return $this; }

    public function render() {
        $classes = [ 'class' => implode(" ", $this->classes) ];
        $attr = array_merge($this->attributes, $classes);
        return 
            HTML::Custom(
                $this->tag, 
                $attr, 
                $this->items === false 
                    ? false 
                    : implode("", $this->items)
            );
    }
}
