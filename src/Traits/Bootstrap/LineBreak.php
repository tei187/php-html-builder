<?php

namespace tei187\HTMLBuilder\Traits\Bootstrap;

use tei187\HTMLBuilder\HTML;

/**
 * Adds w-100 break for specific classes.
 */
trait LineBreak {
    public static function Break() {
        return HTML::Div(['class' => "w-100"]);
    }
}
