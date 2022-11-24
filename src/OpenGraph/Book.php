<?php

namespace tei187\HTMLBuilder\OpenGraph;

use DateTime;
use tei187\HTMLBuilder\Head;

class Book {
    static function Author(?string $author = null) {
        return Head::MetaProperty('og:book:author', $author);
    }
    static function ReleaseDate(?DateTime $date = null) {
        return Head::MetaProperty('og:book:release_date', $date);
    }
    static function ISBN(?string $isbn = null) {
        return Head::MetaProperty('og:book:isbn', $isbn);
    }
    static function Tag(?string $tag = null) {
        return Head::MetaProperty('og:book:tag', $tag);
    }
}