<?php

namespace tei187\HTMLBuilder\OpenGraph;

use DateTime;
use tei187\HTMLBuilder\Head;

class Book {
    /**
     * `og:book:author`
     *
     * @param string|null $author
     * @return string
     */
    static function Author(?string $author = null) : string {
        return Head::MetaProperty('og:book:author', $author);
    }
    /**
     * `og:book:release_date`
     *
     * @param DateTime|null $date
     * @return string
     */
    static function ReleaseDate(?DateTime $date = null) : string {
        return Head::MetaProperty('og:book:release_date', $date);
    }
    /**
     * `og:book:isbn`
     *
     * @param string|null $isbn
     * @return string
     */
    static function ISBN(?string $isbn = null) : string {
        return Head::MetaProperty('og:book:isbn', $isbn);
    }
    /**
     * `og:book:tag`
     *
     * @param string|null $tag
     * @return string
     */
    static function Tag(?string $tag = null) : string {
        return Head::MetaProperty('og:book:tag', $tag);
    }
}