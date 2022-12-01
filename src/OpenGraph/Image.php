<?php

namespace tei187\HTMLBuilder\OpenGraph;

use tei187\HTMLBuilder\Head;

/**
 * OpenGraph's **og:image** specific tags.
 */
class Image {
    /**
     * og:image
     * 
     * An image URL which should represent your object within the graph.
     *
     * @param string|null $url
     * @return string
     */
    static function Image(?string $url = null) : string {
        return Head::MetaProperty('og:image', $url);
    }
    /**
     * og:image:secure_url
     * 
     * A secure image URL which should represent your object within the graph.
     *
     * @param string|null $url
     * @return string
     */
    static function SecureUrl(?string $url = null) : string {
        return Head::MetaProperty('og:image:secure_url', $url);
    }
    /**
     * 'og:image:type
     * 
     * The MIME type of an image.
     *
     * @param string|null $type https://mimetype.io/all-types/#image
     * @return string
     */
    static function Type(?string $type = null) : string {
        return Head::MetaProperty('og:image:type', $type);
    }
    /**
     * og:image:height
     * 
     * The height of an image.
     *
     * @param integer|null $height
     * @return string
     */
    static function Height(?int $height = null) : string {
        return Head::MetaProperty('og:image:height', $height);
    }
    /**
     * og:image:width
     * 
     * The width of an image.
     *
     * @param integer|null $width
     * @return string
     */
    static function Width(?int $width = null) : string {
        return Head::MetaProperty('og:image:width', $width);
    }
    /**
     * og:image:alt
     *
     * @param string|null $content
     * @return string
     */
    static function Alt(?string $content = null) : string {
        return Head::MetaProperty('og:image:alt', $content);
    }
}