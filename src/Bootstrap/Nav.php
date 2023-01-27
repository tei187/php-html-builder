<?php

namespace tei187\HTMLBuilder\Bootstrap;

use tei187\HTMLBuilder\Traits\BootstrapTags;
use tei187\Utilities;

/**
 * Bootstrap Navigation builders.
 *
 * Example:
 * ```php
 * use tei187\HTMLBuilder\Bootstrap;
 * use tei187\HTMLBuilder\Bootstrap\Nav;
 *
 * return
 * Nav::Nav(['class' => "bg-light"], "lg"
 *   Bootstrap::ContainerFluid([],
 *     Nav::Navbar([],
 *       Nav::Item([], Nav::Link([], "Item 1", "#", true) ) .
 *       Nav::Item([], Nav::Link([], "Item 2", "#", false) ) .
 *       Nav::ItemDropdown([],
 *         Nav::DropdownToggle([], "Toggle dropdown") .
 *         Nav::DropdownMenu([],
 *           Nav::DropdownItemLink([], "Item 2.1", "#item21") .
 *           Nav::DropdownItemCustom("span", [], "Item 2.2")
 *         )
 *       )
 *     )
 *   )
 * )
 * ```
 */
class Nav {
    use BootstrapTags;

    /**
     * NAV.navbar
     *
     * @param array $attributes
     * @param string|null $expand If null, navbar-expand won't be set. If "" (empty string) will set default, if other will use suffixed breakpoint.
     * @param string|null $content
     * @return string
     */
    public static function Nav(array $attributes = [], ?string $expand = null, ?string $content = null) : string {
        $expandCss = 
            is_null($expand)
                ? ""
                : ( strlen($expand) == 0
                    ? " navbar-expand"
                    : " navbar-expand-{$expand}"
                  );

        return self::_PairedBootstrapTags('nav', "navbar{$expandCss}", $content, $attributes, []);
    }
    public static function Toggler(array $attributes = [], ?string $dataTarget = null, ?string $content = null) : string {
        $attributes = array_merge(
            $attributes, 
            [
                'data-target' => $dataTarget, 
                'data-toggle' => 'collapse', 
                'aria-controls' => str_replace("#", "", $dataTarget),
                'aria-label' => (isset($attributes['aria-label']) ? $attributes['aria-label'] : "Toggle navigation"),
            ]
        );
        return self::_PairedBootstrapTags('button', 'navbar-toggler', $content, $attributes);
    }
    /**
     * UL.navbar-nav
     *
     * @param array|null $attributes
     * @param string|null $content
     * @return string
     */
    public static function Navbar(array $attributes = [], ?string $content = null) : string {
        return self::_PairedBootstrapTags('ul', 'navbar-nav', $content, $attributes, []);
    }
    /**
     * LI.nav-item
     *
     * @param array|null $attributes
     * @param string|null $content
     * @param boolean $dropdown Mark as dropdown container.
     * @return string
     */
    public static function Item(array $attributes = [], ?string $content = null, bool $dropdown = false) : string {
        return self::_PairedBootstrapTags(
            'li',
            'nav-item'
                . ( $dropdown ? " dropdown" : "" ),
            $content,
            $attributes,
            []
        );
    }
    /**
     * LI.nav-item.dropdown
     *
     * @param array $attributes
     * @param string|null $content
     * @return string
     */
    public static function ItemDropdown(array $attributes = [], ?string $content = null) : string {
        return self::Item($attributes, $content, true);
    }
    /**
     * A.nav-link
     *
     * @param array|null $attributes
     * @param string|null $content
     * @param string|null $href
     * @param boolean $active FALSE by default.
     * @return string
     */
    public static function Link(array $attributes = [], ?string $content = null, ?string $href = "#", bool $active = false, bool $dropdownToggle = false) : string {
        $href =
            Utilities::empty($href)
                ? "#"
                : $href;

        return self::_PairedBootstrapTags(
            'a',
            'nav-link'
                . ( $active ? " active" : "" )
                . ( $dropdownToggle ? " dropdown-toggle" : "" ),
            $content,
            array_merge($attributes, [ 'href' => $href ]),
            []
        );
    }
    /**
     * A.nav-link.dropdown-toggle[href="#"][data-bs-toggle="dropdown"]
     *
     * @param array|null $attributes
     * @param string|null $content
     * @return string
     */
    public static function DropdownToggle(array $attributes = [], ?string $content = null) : string {
        return self::Link(
            array_merge(
                $attributes,
                [ 'role' => "button",
                  'data-bs-toggle' => "dropdown" ]
            ),
            $content,
            "#",
            false,
            true
        );
    }
    /**
     * UL.dropdown-menu
     *
     * @param array $attributes
     * @param array|string|null $content String or array with items from method ::NavbarDropdownItemLink or ::NavbarDropdownItemCustom.
     * @return string
     */
    public static function DropdownMenu(array $attributes = [], $content = null) : string {
        $content =
            is_array($content)
                ? implode("", $content)
                : $content;

        return self::_PairedBootstrapTags('ul', 'dropdown-menu', $content, $attributes, []);
    }
    /**
     * LI > A.dropdown-item
     *
     * @param array $attributes
     * @param string|null $content
     * @param string $href
     * @return string
     */
    public static function DropdownItemLink(array $attributes = [], ?string $content = null, ?string $href = "#") : string {
        $href =
            Utilities::empty($href)
                ? "#"
                : $href;

        return "<li>".self::_PairedBootstrapTags('a', 'dropdown-item', $content, array_merge($attributes, [ 'href' => $href ]), [])."</li>";
    }
    /**
     * LI > {$tag}.dropdown-item
     *
     * @param string $tag
     * @param array $attributes
     * @param string|null $content
     * @return string
     */
    public static function DropdownItemCustom(string $tag, array $attributes = [], ?string $content = null) : string {
        return "<li>".self::_PairedBootstrapTags($tag, "dropdown-item", $content, $attributes, [])."</li>";
    }
}
