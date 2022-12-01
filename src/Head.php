<?php

namespace tei187\HTMLBuilder;

use tei187\HTMLBuilder\Traits\ClosingTags;
use tei187\HTMLBuilder\Traits\ListableAttributes;
use tei187\HTMLBuilder\Constants\Charset;
use tei187\Utilities;

/**
 * Generates HEAD element specific markup.
 */
class Head {
    use ListableAttributes,
        ClosingTags;
    
    /**
     * Returns HEAD's BASE element.
     *
     * @param string|null $href
     * @param string|null $target
     * @return string
     */
    static function Base(?string $href = null, ?string $target = null) : string {
        return
            Utilities::empty([$href, $target], true)
                ? ""
                : self::_SelfClosingTag('base', Utilities::array_filter_recursive(['href' => $href, 'target' => 'target']));
    }
    /**
     * Outputs HEAD's META element with `charset`.
     *
     * @param string|null $content
     * @return string
     */
    static function Charset(?string $content = Charset::UTF8) : string {
        //return self::Meta([], "charset", $content);
        return 
            self::Meta(
                null,
                null,
                [
                    'charset' => 
                        ( Utilities::empty($content, true) 
                            ? Charset::UTF8
                            : $content )
                ]
            );
    }
    /**
     * Outputs HEAD element.
     *
     * @param string|null $content
     * @return string
     */
    static function Head(?string $content = null) : string {
        return self::_PairedTags("head", $content);
    }
    /**
     * Outputs HEAD's LINK element with `rel='icon'`.
     *
     * @param string|null $href
     * @param array|null $attributes
     * @return string
     */
    static function Icon(?string $href = null, ?array $attributes = []) : string {
        return 
            self::Link(
                array_merge(
                    [
                        'rel' => 'icon', 
                        'href' => $href
                    ], 
                    $attributes
                )
            );
    }
    /**
     * Outputs HEAD's LINK element.
     *
     * @param array|null $attributes
     * @return string
     */
    static function Link(?array $attributes = []) : string {
        return 
            (Utilities::empty($attributes, true))
                ? ""
                : self::_SelfClosingTag('link', $attributes);
    }
    /**
     * Outputs HEAD's META element.
     *
     * @param string|null $name
     * @param string|null $content
     * @param array|null $attributes
     * @return string
     */
    static function Meta(?string $name = null, ?string $content = null, ?array $attributes = []) : string {
        return 
            self::_SelfClosingTag(
                'meta', 
                array_merge(
                    Utilities::array_filter_recursive(
                        [
                            'name' => $name, 
                            'content' => $content
                        ]
                    ), 
                    $attributes
                )
            );
    }
    static function MetaProperty(?string $property = null, ?string $content = null) : string {
        return self::_SelfClosingTag('meta', ['property' => $property, 'content' => $content]);
    }
    /**
     * Outputs HEAD's LINK element with `rel='stylesheet'`.
     *
     * @param string|null $href
     * @param string|null $media
     * @param array|null $attributes
     * @return string
     */
    static function StyleSheet(?string $href = null, ?string $media = null, ?array $attributes = []) : string {
        return 
            self::Link(
                array_merge(
                    Utilities::array_filter_recursive(
                        [
                            'rel' => 'stylesheet', 
                            'media' => $media, 
                            'href' => $href
                        ]
                    ), 
                    $attributes
                )
            );
    }
    /**
     * Outputs HEAD's STYLE element.
     *
     * @param string|null $content
     * @param string|null $media
     * @param array|null $attributes
     * @return string
     */
    static function StyleString(?string $content = null, ?string $media = null, ?array $attributes = []) : string {
        return 
            self::_PairedTags(
                'style', 
                $content, 
                array_merge(
                    Utilities::array_filter_recursive([ 'media' => $media ]),
                    $attributes
                )
            );
    }
    /**
     * Outputs HEAD's TITLE element.
     *
     * @param string|null $title
     * @param array|null $attributes
     * @return string
     */
    static function Title(?string $title = null, ?array $attributes = []) : string {
        return self::_PairedTags('title', $title, $attributes);
    }
    /**
     * Outputs HEAD's META element, with `name='viewport'` attribute and `content`.
     * @param string|null $content
     * @return string
     */
    static function Viewport(?string $content = "width=device-width, initial-scale=1") : string {
        return self::Meta("viewport", $content, []);
    }
}