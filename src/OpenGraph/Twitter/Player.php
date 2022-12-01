<?php

namespace tei187\HTMLBuilder\OpenGraph\Twitter;

use DateTime;
use tei187\HTMLBuilder\Head;
use tei187\HTMLBuilder\OpenGraph\Twitter;

class Player {
    /**
     * twitter:player
     *
     * HTTPS URL to iFrame player. This must be a HTTPS URL which does not generate active mixed content warnings in a web browser. The audio or video player must not require plugins such as Adobe Flash.
     * 
     * @param string|null $player 
     * @return string
     */
    static function Player(?string $player = null) : string {
        return Head::MetaProperty('twitter:player', $player);
    }
    /**
     * twitter:player:width
     *
     * Width of iFrame specified in twitter:player in pixels.
     * 
     * @param integer|null $width 
     * @return string
     */
    static function Width(?int $width = null) : string {
        return Head::MetaProperty('twitter:player:width', $width);
    }
    /**
     * twitter:player:height
     *
     * Height of iFrame specified in twitter:player in pixels.
     * 
     * @param integer|null $height 
     * @return string
     */
    static function Height(?int $height = null) : string {
        return Head::MetaProperty('twitter:player:height', $height);
    }
    /**
     * twitter:image
     *
     * Image to be displayed in place of the player on platforms that don’t support iFrames or inline players. You should make this image the same dimensions as your player. Images with fewer than 68,600 pixels (a 262x262 square image, or a 350x196 16:9 image) will cause the player card not to render. Images must be less than 5MB in size. JPG, PNG, WEBP and GIF formats are supported. Only the first frame of an animated GIF will be used. SVG is not supported.
     * 
     * @param string|null $image
     * @return string
     */
    static function Image(?string $image = null) : string {
        return Twitter::Image($image);
    }
    /**
     * twitter:player:stream
     *
     * URL to raw video or audio stream.
     * 
     * @param string|null $stream
     * @return string
     */
    static function Stream(?string $stream = null) : string {
        return Head::MetaProperty('twitter:player:stream', $stream);
    }
}