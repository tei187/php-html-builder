<?php

namespace tei187\HTMLBuilder\OpenGraph;

use tei187\HTMLBuilder\Head;

/**
 * OpenGraph's **og:audio** specific tags.
 */
class Audio {
    /**
     * og:audio
     *
     * A relevant audio URL for your object.
     *
     * @param string|null $url
     * @return string
     */
    public static function Audio(?string $url = null) : string {
        return Head::MetaProperty('og:audio', $url);
    }
    /**
     * og:audio:title
     *
     * @param string|null $title
     * @return string
     */
    public static function Title(?string $title = null) : string {
        return Head::MetaProperty('og:audio:title', $title);
    }
    /**
     * og:audio:artist
     *
     * @param string|null $artist
     * @return string
     */
    public static function Artist(?string $artist = null) : string {
        return Head::MetaProperty('og:audio:artist', $artist);
    }
    /**
     * og:audio:album
     *
     * @param string|null $title
     * @return string
     */
    public static function Album(?string $title = null) : string {
        return Head::MetaProperty('og:audio:album', $title);
    }
    /**
     * og:audio:type
     *
     * @param string|null $type https://mimetype.io/all-types/#audio
     * @return string
     */
    public static function Type(?string $type = null) : string {
        return Head::MetaProperty('og:audio:type', $type);
    }
}
