<?php

namespace tei187\HTMLBuilder\OpenGraph;

use DateTime;
use tei187\HTMLBuilder\Head;

class Article {
    /**
     * `og:article:published_time`
     *
     * @param DateTime|null $time
     * @return string
     */
    static function PublishedTime(?DateTime $time = null) : string {
        return Head::MetaProperty('og:article:published_time', $time);
    }
    /**
     * `og:article:modified_time`
     *
     * @param DateTime|null $time
     * @return string
     */
    static function ModifiedTime(?DateTime $time = null) : string {
        return Head::MetaProperty('og:article:modified_time', $time);
    }
    /**
     * `og:article:expiration_time`
     *
     * @param DateTime|null $time
     * @return string
     */
    static function ExpirationTime(?DateTime $time = null) : string {
        return Head::MetaProperty('og:article:expiration_time', $time);
    }
    /**
     * `og:article:author`
     *
     * @param string|null $author
     * @return string
     */
    static function Author(?string $author = null) : string {
        return Head::MetaProperty('og:article:author', $author);
    }
    /**
     * `og:article:section`
     *
     * @param string|null $section
     * @return string
     */
    static function Section(?string $section = null) : string {
        return Head::MetaProperty('og:article:section', $section);
    }
    /**
     * `og:article:tag`
     *
     * @param string|null $tag
     * @return string
     */
    static function Tag(?string $tag = null) : string {
        return Head::MetaProperty('og:article:tag', $tag);
    }
}