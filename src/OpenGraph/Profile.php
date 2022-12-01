<?php

namespace tei187\HTMLBuilder\OpenGraph;

use DateTime;
use tei187\HTMLBuilder\Head;

/**
 * OpenGraph's **og:profile** specific tags.
 */
class Profile {
    /**
     * og:profile:first_name
     *
     * @param string|null $name
     * @return string
     */
    static function FirstName(?string $name = null) : string {
        return Head::MetaProperty('og:profile:first_name', $name);
    }
    /**
     * og:profile:last_name
     *
     * @param string|null $name
     * @return string
     */
    static function LastName(?string $name = null) : string {
        return Head::MetaProperty('og:profile:last_name', $name);
    }
    /**
     * og:profile:username
     *
     * @param string|null $username
     * @return string
     */
    static function Username(?string $username = null) : string {
        return Head::MetaProperty('og:profile:username', $username);
    }
    /**
     * og:profile:gender
     *
     * @param string|null $gender By OpenGraph documentation should be enum(male,female)
     * @return string
     */
    static function Gender(?string $gender = null) : string {
        return Head::MetaProperty('og:profile:gender', $gender);
    }
}