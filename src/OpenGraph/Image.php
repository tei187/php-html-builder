<?php

namespace tei187\HTMLBuilder\OpenGraph;

use tei187\HTMLBuilder\Head;

class Image {
    static function Image(?string $url = null) : string {
        return Head::MetaProperty('og:image', $url);
    }
    static function SecureUrl(?string $url = null) : string {
        return Head::MetaProperty('og:image:secure_url', $url);
    }
    static function Type(?string $type = null) : string {
        return Head::MetaProperty('og:image:type', $type);
    }
    static function Height(?int $height = null) : string {
        return Head::MetaProperty('og:image:height', $height);
    }
    static function Width(?int $width = null) : string {
        return Head::MetaProperty('og:image:width', $width);
    }
    static function Alt(?string $content = null) : string {
        return Head::MetaProperty('og:image:alt', $content);
    }
}