<?php

namespace tei187\HTMLBuilder\OpenGraph;

use DateTime;
use tei187\HTMLBuilder\Head;

/**
 * OpenGraph's **og:video** specific tags.
 */
class Video {
    /**
     * og:video
     * 
     * A relevant video URL for your object.
     *
     * @param string|null $url
     * @return string
     */
    static function Video(?string $url = null) : string {
        return Head::MetaProperty('og:video', $url);
    }
    /**
     * og:video:secure_url
     * 
     * A relevant, secure video URL for your object.
     *
     * @param string|null $url
     * @return string
     */
    static function SecureUrl(?string $url = null) : string {
        return Head::MetaProperty('og:video:secure_url', $url);
    }
    /**
     * og:video:height`
     * 
     * The height of a video.
     *
     * @param integer|null $height
     * @return string
     */
    static function Height(?int $height = 1) : string {
        return Head::MetaProperty('og:video:height', $height);
    }
    /**
     * og:video:width
     * 
     * The width of a video.
     *
     * @param integer|null $width
     * @return string
     */
    static function Width(?int $width = 1) : string {
        return Head::MetaProperty('og:video:width', $width);
    }
    /**
     * og:video:type
     * 
     * The MIME type of a video.
     *
     * @param string|null $type https://mimetype.io/all-types/#video
     * @return string
     */
    static function Type(?string $type = null) : string {
        return Head::MetaProperty('og:video:type', $type);    
    }
    /**
     * og:video:duration
     *
     * @param integer|null $duration
     * @return string
     */
    static function Duration(?int $duration = 1) : string {
        if($duration == null || $duration < 1) $duration = 1;
        return Head::MetaProperty('og:video:duration', $duration);
    }

    /**
     * og:video:actor
     *
     * @param string|null $actor
     * @return string
     */
    static function Actor(?string $actor = null) : string {
        return Head::MetaProperty('og:video:actor', $actor);
    }
    /**
     * og:video:actor:role
     *
     * @param string|null $role
     * @return string
     */
    static function ActorRole(?string $role = null) : string {
        return Head::MetaProperty('og:video:actor:role', $role);
    }
    /**
     * og:video:director
     *
     * @param string|null $director
     * @return string
     */
    static function Director(?string $director = null) : string {
        return Head::MetaProperty('og:video:director', $director);
    }
    /**
     * og:video:writer
     *
     * @param string|null $writer
     * @return string
     */
    static function Writer(?string $writer = null) : string {
        return Head::MetaProperty('og:video:writer', $writer);
    }
    /**
     * og:video:release_date
     *
     * @param DateTime|null $date
     * @return string
     */
    static function ReleaseDate(?DateTime $date = null) : string {
        return Head::MetaProperty('og:video:release_date', $date);
    }
    /**
     * og:video:tag
     *
     * @param string|null $tag
     * @return string
     */
    static function Tag(?string $tag = null) : string {
        return Head::MetaProperty('og:video:tag', $tag);
    }
    /**
     * og:video:series
     *
     * @param string|null $title
     * @return string
     */
    static function Series(?string $title = null) : string {
        return Head::MetaProperty('og:video:series', $title);
    }
}