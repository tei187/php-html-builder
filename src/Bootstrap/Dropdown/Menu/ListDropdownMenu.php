<?php

namespace tei187\HTMLBuilder\Bootstrap\Dropdown\Menu;

use tei187\HTMLBuilder\Traits\HasAttributes;
use tei187\HTMLBuilder\Traits\HasClasses;
use tei187\HTMLBuilder\HTML;

class ListDropdownMenu {
    use HasClasses, HasAttributes;

    private $items = [];
    private $type = 'ul';

    function __construct() {
        $this->addClass('dropdown-menu');
    }

    public function setUnordered() : self           { $this->type = 'ul'; return $this; }
    public function setOrdered() : self             { $this->type = 'ol'; return $this; }
    public function addItemStr(string $item) : self { $this->items[] = $item; return $this; }
    public function addItemArr(array $item) : self  { $this->items[] = [$item[0], $item[1]]; return $this; }

    public function render() {
        $classes = [ 'class' => implode(" ", $this->classes) ];
        $attr = array_merge($this->attributes, $classes);
        foreach($this->items as $itemKey => $itemVal) {
            if(is_string($itemVal) && !HTML::_checkStringForTag('li', $itemVal)) {
                $this->items[$itemKey] = HTML::ListItem([], $itemVal);
            }
        }
        return HTML::List($this->type, $attr, $this->items);
    }
}
