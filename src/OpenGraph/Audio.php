<?php

namespace tei187\HTMLBuilder\OpenGraph;

use tei187\HTMLBuilder\Head;

class Audio {
    static function Audio(?string $url = null) : string {
        return Head::MetaProperty('og:audio', $url);
    }
    static function Title(?string $title = null) : string {
        return Head::MetaProperty('og:audio:title', $title);
    }
    static function Artist(?string $artist = null) : string {
        return Head::MetaProperty('og:audio:artist', $artist);
    }
    static function Album(?string $title = null) : string {
        return Head::MetaProperty('og:audio:album', $title);
    }
    static function Type(?string $type = null) : string {
        return Head::MetaProperty('og:audio:type', $type);
    }
}