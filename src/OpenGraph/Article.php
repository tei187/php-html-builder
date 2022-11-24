<?php

namespace tei187\HTMLBuilder\OpenGraph;

use DateTime;
use tei187\HTMLBuilder\Head;

class Article {
    static function PublishedTime(?DateTime $time = null) {
        return Head::MetaProperty('og:article:published_time', $time);
    }
    static function ModifiedTime(?DateTime $time = null) {
        return Head::MetaProperty('og:article:modified_time', $time);
    }
    static function ExpirationTime(?DateTime $time = null) {
        return Head::MetaProperty('og:article:expiration_time', $time);
    }
    static function Author(?string $author = null) {
        return Head::MetaProperty('og:article:author', $author);
    }
    static function Section(?string $section = null) {
        return Head::MetaProperty('og:article:section', $section);
    }
    static function Tag(?string $tag = null) {
        return Head::MetaProperty('og:article:tag', $tag);
    }
}