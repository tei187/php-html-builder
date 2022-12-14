<?php

namespace tei187\HTMLBuilder\OpenGraph;

use tei187\HTMLBuilder\Head;

/**
 * OpenGraph's **twitter** specific tags. Expanded by separate
 * \tei187\HTMLBuilder\OpenGraph\Twitter\App and \tei187\HTMLBuilder\OpenGraph\Twitter\Player.
 *
 * @see \tei187\HTMLBuilder\OpenGraph\Twitter\App \tei187\HTMLBuilder\OpenGraph\Twitter\App
 * @see \tei187\HTMLBuilder\OpenGraph\Twitter\Player \tei187\HTMLBuilder\OpenGraph\Twitter\Player
 */
class Twitter {
    /**
     * twitter:card
     *
     * @param string|null $type summary | summary_large_image | app | player
     * @return string
     */
    public static function Card(?string $type = null) : string {
        return Head::MetaProperty('twitter:card', $type);
    }
    /**
     * twitter:site
     *
     * The Twitter @username the card should be attributed to.
     *
     * @param string|null $name
     * @return string
     */
    public static function Site(?string $name = null) : string {
        return Head::MetaProperty('twitter:site', $name);
    }

    /**
     * twitter:site:id
     *
     * Same as twitter:site, but the user’s Twitter ID. Either
     * twitter:site or twitter:site:id is required (summary, summary_large_image, player).
     *
     * @param string|null $name
     * @return string
     */
    public static function SiteId(?string $id = null) : string {
        return Head::MetaProperty('twitter:site:id', $id);
    }
    /**
     * twitter:creator
     *
     * @username of content creator.
     *
     * @param string|null $name
     * @return string
     */
    public static function Creator(?string $name = null) : string {
        return Head::MetaProperty('twitter:creator', $name);
    }
    /**
     * twitter:creator:id
     *
     * Twitter user ID of content creator
     *
     * @param string|null $id
     * @return string
     */
    public static function CreatorId(?string $id = null) : string {
        return Head::MetaProperty('twitter:creator:id', $id);
    }
    /**
     * twitter:title
     *
     * A concise title for the related content.
     * Platform specific behaviors:
     * * iOS, Android: Truncated to two lines in timeline and expanded Tweet
     * * Web: Truncated to one line in timeline and expanded Tweet
     *
     * (max 70 characters)
     *
     * @param string|null $title
     * @return string
     */
    public static function Title(?string $title = null) : string {
        return Head::MetaProperty('twitter:title', $title);
    }
    /**
     * twitter:description
     *
     * A description that concisely summarizes the content as appropriate for
     * presentation within a Tweet. You should not re-use the title as the
     * description or use this field to describe the general services provided
     * by the website. Platform specific behaviors:
     * * iOS, Android: Not displayed
     * * Web: Truncated to three lines in timeline and expanded Tweet
     *
     * (maximum 200 characters)
     *
     * @param string|null $desc
     * @return string
     */
    public static function Description(?string $desc = null) : string {
        return Head::MetaProperty('twitter:description', $desc);
    }
    public static function Url(?string $url = null) : string {
        return Head::MetaProperty('twitter:url', $url);
    }
    /**
     * twitter:image
     *
     * Image to be displayed in place of the player on platforms that don’t
     * support iFrames or inline players. You should make this image the same
     * dimensions as your player. Images with fewer than 68,600 pixels (a 262x262
     * square image, or a 350x196 16:9 image) will cause the player card not to
     * render. Images must be less than 5MB in size. JPG, PNG, WEBP and GIF formats
     * are supported. Only the first frame of an animated GIF will be used.
     * SVG is not supported.
     *
     * @param string|null $url
     * @return string
     */
    public static function Image(?string $url = null) : string {
        return Head::MetaProperty('twitter:image', $url);
    }
    /**
     * twitter:image:alt
     *
     * A text description of the image conveying the essential nature of
     * an image to users who are visually impaired. Maximum 420 characters.
     *
     * @param string|null $text
     * @return string
     */
    public static function ImageAlt(?string $text = null) : string {
        return Head::MetaProperty('twitter:image:alt', $text);
    }
}
