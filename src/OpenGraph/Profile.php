<?php

namespace tei187\HTMLBuilder\OpenGraph;

use DateTime;
use tei187\HTMLBuilder\Head;

class Profile {
    static function FirstName(?string $name = null) : string {
        return Head::MetaProperty('og:profile:first_name', $name);
    }
    static function LastName(?string $name = null) : string {
        return Head::MetaProperty('og:profile:last_name', $name);
    }
    static function Username(?string $username = null) : string {
        return Head::MetaProperty('og:profile:username', $username);
    }
    /**
     * Undocumented function
     *
     * @param string|null $gender By OpenGraph documentation should be enum(male,female)
     * @return string
     */
    static function Gender(?string $gender = null) : string {
        return Head::MetaProperty('og:profile:gender', $gender);
    }
}