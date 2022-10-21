<?php

namespace tei187\HTMLBuilder;

use tei187\HTMLBuilder\Traits\ClosingTags;
use tei187\HTMLBuilder\Traits\ListableAttributes;

/**
 * Basic HTML5 elements rendering.
 */
class HTML {
    use ListableAttributes,
        ClosingTags;

    /**
     * Body render.
     *
     * @param array|null $attributes
     * @param string|null $content
     * @return string
     */
    static function Body(?array $attributes = [], ?string $content = null) : string {
        return self::_PairedTags('body', $content, $attributes, []);
    }
    /**
     * Details render.
     *
     * @param mixed|null $summary
     * @param mixed|null $content
     * @param array|null $attributes
     * @return void
     */
    static function Details($summary = null, $content = null, ?array $attributes = []) {
        return 
            self::_PairedTags(
                "details", 
                self::_PairedTags("summary", $summary, [], []) . $content, 
                $attributes
            );
    }
    /**
     * Div render.
     *
     * @param array|null $attributes
     * @param string|null $content
     * @return string
     */
    static function Div(?array $attributes = [], ?string $content = null) : string {
        return self::_PairedTags('div', $content, $attributes, []);
    }
    /**
     * Heading render.
     *
     * @param integer $level
     * @param array|null $attributes
     * @param string|null $content
     * @return string
     */
    static function Heading(int $level = 1, ?array $attributes = [], ?string $content = null) : string {
        $level = 
            $level > 6
                ? 6 : $level;
        $level = 
            $level < 1
                ? 1 : $level;

        return 
            "<h" . $level
                . (!empty($attributes) && is_array($attributes) 
                    ? self::_ListAttributes($attributes, []) : "")
          . ">" . $content . "</h" . $level . ">";
    }
    /**
     * Horizontal rule render.
     *
     * @param array|null $attributes
     * @return string
     */
    static function Hr(?array $attributes = []) : string {
        return self::_SelfClosingTag('hr', $attributes, []);
    }
    /**
     * Image render.
     *
     * @param array|null $attributes
     * @param string|null $source
     * @return string
     */
    static function Image(?array $attributes = [], ?string $source) : string {
        return self::_SelfClosingTag(
            "img", 
            array_merge(
                [ 'src' => $source ], 
                $attributes
            )
        );
    }
    /**
     * Link render.
     *
     * @param string|null $href
     * @param array $attributes
     * @param string|null $content
     * @return string
     */
    static function Link(?string $href = null, array $attributes = [], ?string $content = null) : string {
        return self::_PairedTags(
            'a', 
            $content, 
            array_merge(
                ['href' => $href],
                $attributes
            ), 
            []
        );
    }
    /**
     * List HTML5 element.
     *
     * @param string|null $type Type of list: `ul` for unordered or `ol` for ordered list.
     * @param array|null $attributes
     * @param string|array|null $content Two-value array, `0` being array with attributes, `1` being content.
     * @return string
     */
    static function List(?string $type = "ul", ?array $attributes = [], $content = []) : string {
        $items = "";
        foreach($content as $item)
            if(is_string($item)) {
                $items .= $item;
            } elseif (is_array($item)) {
                $items .= self::ListItem($item[0], $item[1]);
            }
        return
            self::_PairedTags($type, $items, $attributes, []);
    }
    static function ListItem(?array $attributes = null, ?string $content = null) : string {
        return
            self::_PairedTags("li", $content, $attributes, []);
    }
    /**
     * Paragraph render.
     *
     * @param array|null $attributes
     * @param string|null $content
     * @return string
     */
    static function Paragraph(?array $attributes = [], ?string $content = null) : string {
        return self::_PairedTags('p', $content, $attributes, []);
    }
    /**
     * Span render.
     *
     * @param array|null $attributes
     * @param string|null $content
     * @return string
     */
    static function Span(?array $attributes = [], ?string $content = null) : string {
        return self::_PairedTags('span', $content, $attributes, []);
    }
    /**
     * Table render.
     *
     * @param array|null $attributes
     * @param string|null $content
     * @return string
     */
    static function Table(?array $attributes = null, ?string $content = null) : string {
        return self::_PairedTags("table", $content, $attributes, []);
    }
    /**
     * Table cell (td) render.
     *
     * @param array|null $attributes
     * @param string|null $content
     * @return string
     */
    static function TableCell(?array $attributes = null, ?string $content = null) : string {
        return self::_PairedTags("td", $content, $attributes);
    }
    /**
     * Table header cell (th) render.
     *
     * @param array|null $attributes
     * @param string|null $content
     * @return string
     */
    static function TableHeadingCell(?array $attributes = null, ?string $content = null) : string {
        return self::_PairedTags("th", $content, $attributes);
    }
    /**
     * Table row (tr) render.
     *
     * @param array|null $attributes
     * @param [type] $cells
     * @return string
     */
    static function TableRow(?array $attributes = null, $cells = null) : string {
        $cellsHtml = "";
        if(is_array($cells)) {
            foreach($cells as $cell) {
                @list($cellContent, $cellAttributes) = $cell;
                $cellsHtml .= self::TableCell($cellAttributes, $cellContent);
            }
        } elseif(is_string($cells)) {
            $cellsHtml = $cells;
        } else {
            $cellsHtml = null;
        }
        return self::_PairedTags("tr", $cellsHtml, $attributes, []);
    }

    /**
     * Custom / non-standard tag.
     *
     * @param string $tag Tag name.
     * @param array|null $attributes Attributes.
     * @param boolean|string $content If `false`, tag is treated as self-closing tag. If a `string` is passed, it's treated as paired tag.
     * @return string
     */
    static function Custom(string $tag, ?array $attributes = [], $content = false) : string {
        return 
            "<" . $tag
                . (!empty($attributes) && is_array($attributes) 
                    ? self::_ListAttributes($attributes, []) : "")
            . (is_bool($content) && !$content
                ? " />"
                : ">" . $content . "</".$tag.">");           
    }

    /* ALIASES */

    /**
     * Alias for `self::Link()`;
     *
     * @param string|null $content
     * @param string|null $href
     * @param array|null $attributes
     * @return void
     */
    static function a(?string $content = null, ?string $href = null, ?array $attributes = []) : string {
        return self::Link($content, $attributes, $href);
    }
    /**
     * Alias for `self::Heading()`.
     *
     * @param integer $level
     * @param string|null $content
     * @param array|null $attributes
     * @return string
     */
    static function h(int $level = 1, ?string $content = null, ?array $attributes = []) : string {
        return self::Heading($level, $content, $attributes);
    }
    /**
     * Alias for `self::Image()`.
     *
     * @param string|null $content
     * @param array|null $attributes
     * @return string
     */
    static function img(?string $source, ?array $attributes = []) : string {
        return self::Image($source, $attributes);
    }
    /**
     * Alias for `self::Paragraph()`.
     *
     * @param array|null $attributes
     * @param string|null $content
     * @return string
     */
    static function p(?array $attributes = [], ?string $content = null) : string {
        return self::Paragraph($attributes, $content);
    }
    /**
     * Ordered list. Alias for `self::List(\\'ol\\')`.
     *
     * @param string|null $content
     * @param array|null $attributes
     * @return string
     */
    static function ol(?string $content = null, ?array $attributes = []) : string {
        return self::List("ol", $attributes, $content);
    }
    /**
     * Unordered list. Alias for `self::List("ul")`.
     *
     * @param string|null $content
     * @param array|null $attributes
     * @return string
     */
    static function ul(?string $content = null, ?array $attributes = []) : string {
        return self::List("ul", $attributes, $content);
    }
}