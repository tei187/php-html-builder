<?php

namespace tei187\HTMLBuilder\OpenGraph;

use DateTime;
use tei187\HTMLBuilder\Head;

class Video {
    static function Video(?string $url = null) : string {
        return Head::MetaProperty('og:video', $url);
    }
    static function SecureUrl(?string $url = null) : string {
        return Head::MetaProperty('og:video:secure_url', $url);
    }
    static function Height(?int $height = 1) : string {
        return Head::MetaProperty('og:video:height', $height);
    }
    static function Width(?int $width = 1) : string {
        return Head::MetaProperty('og:video:width', $width);
    }
    static function Type(?string $type = null) : string {
        return Head::MetaProperty('og:video:type', $type);    
    }
    static function Duration(?int $duration = 1) : string {
        if($duration == null || $duration < 1) $duration = 1;
        return Head::MetaProperty('og:video:duration', $duration);
    }

    static function Actor(?string $actor = null) : string {
        return Head::MetaProperty('og:video:actor', $actor);
    }
    static function ActorRole(?string $role = null) : string {
        return Head::MetaProperty('og:video:actor:role', $role);
    }
    static function Director(?string $director = null) : string {
        return Head::MetaProperty('og:video:director', $director);
    }
    static function Writer(?string $writer = null) : string {
        return Head::MetaProperty('og:video:writer', $writer);
    }
    static function ReleaseDate(?DateTime $date = null) : string {
        return Head::MetaProperty('og:video:release_date', $date);
    }
    static function Tag(?string $tag = null) : string {
        return Head::MetaProperty('og:video:tag', $tag);
    }
    static function Series(?string $title = null) : string {
        return Head::MetaProperty('og:video:series', $title);
    }
}