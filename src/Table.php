<?php

namespace tei187\HTMLBuilder;

use tei187\HTMLBuilder\Traits\ClosingTags;

/**
 * Generates TABLE element specific markup.
 */
class Table {
    use ClosingTags;

    /**
     * Table render.
     *
     * @param array|null $attributes
     * @param string|null $content
     * @return string
     */
    public static function Table(?array $attributes = null, ?string $content = null) : string {
        return self::_PairedTags("table", $content, $attributes, []);
    }

    /**
     * Table cell (td) render.
     *
     * @param array|null $attributes
     * @param string|null $content
     * @return string
     */
    public static function Cell(?array $attributes = null, ?string $content = null) : string {
        return self::_PairedTags("td", $content, $attributes);
    }

    /**
     * Table row (tr) render.
     *
     * @param array|null $attributes
     * @param array|string|null $cells
     * @return string
     */
    public static function Row(?array $attributes = null, $cells = null) : string {
        $cellsHtml = "";
        if(is_array($cells)) {
            foreach($cells as $cell) {
                @list($cellContent, $cellAttributes) = $cell;
                $cellsHtml .= self::Cell($cellAttributes, $cellContent);
            }
        } elseif(is_string($cells)) {
            $cellsHtml = $cells;
        } else {
            $cellsHtml = null;
        }
        return self::_PairedTags("tr", $cellsHtml, $attributes, []);
    }

    /**
     * Table header cell (th) render.
     *
     * @param array|null $attributes
     * @param string|null $content
     * @return string
     */
    public static function HeadingCell(?array $attributes = null, ?string $content = null) : string {
        return self::_PairedTags("th", $content, $attributes);
    }

    /**
     * Table header (thead) render.
     *
     * @param array|null $attributes
     * @param string|null $content
     * @return string
     */
    public static function Header(?array $attributes = null, ?string $content = null) : string {
        return self::_PairedTags("thead", $content, $attributes);
    }

    /**
     * Table body (tbody) render.
     *
     * @param array|null $attributes
     * @param string|null $content
     * @return string
     */
    public static function Body(?array $attributes = null, ?string $content = null) : string {
        return self::_PairedTags("tbody", $content, $attributes);
    }

    /**
     * Table footer (tfoot) render.
     *
     * @param array|null $attributes
     * @param string|null $content
     * @return string
     */
    public static function Footer(?array $attributes = null, ?string $content = null) : string {
        return self::_PairedTags("tfoot", $content, $attributes);
    }

    /**
     * Table column group (colgroup) render.
     *
     * @param array|null $attributes
     * @param string|null $content
     * @return string
     */
    public static function ColGroup(?array $attributes = null, ?string $content = null) : string {
        return self::_PairedTags("colgroup", $content, $attributes);
    }

    /**
     * Table column group member/item (col) render.
     *
     * @param array|null $attributes
     * @param string|null $content
     * @return string
     */
    public static function Col(?array $attributes = null, ?string $content = null) : string {
        return self::_SelfClosingTag("col", $content, $attributes);
    }

    /**
     * Table caption (caption) render.
     *
     * @param array|null $attributes
     * @param string|null $content
     * @param string|null $side Which side should it render at (typically 'top' or 'bottom').
     * @return string
     */
    public static function Caption(?array $attributes = null, ?string $content = null, ?string $side = null) : string {
        $attributes['side'] = $side;
        return self::_PairedTags("caption", $content, $attributes);
    }
}
