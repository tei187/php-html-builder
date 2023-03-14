<?php

namespace tei187\HTMLBuilder\Bootstrap\Dropdown;

use tei187\HTMLBuilder\HTML;
use tei187\HTMLBuilder\Bootstrap\Dropdown\Button;
use tei187\HTMLBuilder\Bootstrap\Dropdown\Menu\ListDropdownMenu;
use tei187\HTMLBuilder\Bootstrap\Dropdown\Menu\CustomDropdownMenu;

class Dropdown {
    /**
     * Undocumented function
     *
     * @param array $attributes
     * @param Button $button
     * @param ListDropdownMenu|CustomDropdownMenu $menu
     * @return string
     */
    public static function Dropdown(array $attributes = [], Button $button, $menu) : string {
        if(isset($attributes['class'])) {
            preg_match('/(?:\s+|^)dropdown(?:\s+|$)/', $attributes['class']) === 0
                ? $attributes['class'] = "dropdown " . $attributes['class']
                : null;
        } else {
            $attributes['class'] = 'dropdown';
        }
        
        return
            HTML::Div($attributes,
                $button->render() . $menu->render()
        );
    }


}
