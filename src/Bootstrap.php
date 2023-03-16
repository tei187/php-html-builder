<?php

namespace tei187\HTMLBuilder;

use tei187\HTMLBuilder\Traits\ListableAttributes;
use tei187\HTMLBuilder\Traits\Bootstrap\BootstrapTags;
use tei187\HTMLBuilder\HTML as Elements;
use tei187\HTMLBuilder\Bootstrap\Nav;

/**
 * Generates HTML for Bootstrap-specific elements.
 */
class Bootstrap {
    use ListableAttributes,
        BootstrapTags;
        
    /* basic */

    /**
     * Button render.
     *
     * @param array|null $attributes
     * @param string|null $content
     * @return string
     */
    public static function Button(array $attributes, ?string $content = null) : string {
        return self::_PairedBootstrapTags('button', 'btn', $content, $attributes);
    }
    /**
     * Button-style link render.
     *
     * @param array|null $attributes
     * @param string|null $content
     * @return string
     */
    public static function ButtonLink(array $attributes, ?string $content = null) : string {
        return self::_PairedBootstrapTags('a', 'btn', $content, $attributes);
    }
    /**
     * Column-class render.
     *
     * @param array $attributes
     * @param string|null $content
     * @return string
     */
    public static function Col(array $attributes = [], ?string $content = null) : string {
        return self::_PairedBootstrapTags('div', 'col', $content, $attributes, []);
    }
    /**
     * Container-class render.
     *
     * @param array $attributes If has ['class' => "container-fluid"] will switch to fluid container.
     * @param string|null $content
     * @return string
     */
    public static function Container(array $attributes = [], ?string $content = null) : string {
        return
            ( isset($attributes['class']) && strpos($attributes['class'], "container-fluid") !== false )
                ? self::_PairedBootstrapTags('div', "container-fluid", $content, $attributes, [])
                : self::_PairedBootstrapTags('div', "container", $content, $attributes, []);
    }
    /**
     * Container-fluid-class render.
     *
     * @param array $attributes
     * @param string|null $content
     * @return string
     */
    public static function ContainerFluid(array $attributes = [], ?string $content = null) : string {
        return self::_PairedBootstrapTags('div', 'container-fluid', $content, $attributes, []);
    }
    /**
     * Icon render (Fontawesome).
     *
     * @param string|null $name
     * @param array|null $attributes
     * @return string
     * 
     * @link https://fontawesome.com/v4/icons/ FontAwesome icons reference.
     */
    public static function Icon(?string $name, array $attributes = []) : string {
        if(key_exists('class', $attributes)) {
            $attributes['class'] .= " " . $name;
        } else {
            $attributes['class'] = $name;
        }

        return self::_PairedBootstrapTags('i', 'fa', null, $attributes, []);
    }

    /**
     * Row-class render.
     *
     * @param array $attributes
     * @param string|null $content
     * @param boolean $gutters
     * @return string
     */
    public static function Row(array $attributes = [], ?string $content = null, bool $gutters = true) : string {
        !$gutters
            ? (key_exists('class', $attributes)
                ? $attributes['class'] .= ' no-gutters'
                : $attributes['class'] = 'no-gutters'
              )
            : null;

        return self::_PairedBootstrapTags('div', 'row', $content, $attributes, []);
    }
    /**
     * Table-class render.
     *
     * @param array $attributes
     * @param string|null $content
     * @return string
     */
    public static function Table(array $attributes = [], ?string $content = null) : string {
        key_exists('class', $attributes)
            ? (
                strpos($attributes['class'], 'table') === false
                    ? $attributes['class'] = "table " . $attributes['class']
                    : null
              )
            : null;
        return Elements::Table($attributes, $content);
    }

    /* navigation */

    /**
     * Nav-class render.
     *
     * Alias of \tei187\HTMLBuilder\Bootstrap\Nav::Nav.
     *
     * @param array $attributes
     * @param string|null $content
     * @return string
     */
    public static function Nav(array $attributes = [], ?string $content = null) : string {
        return Nav::Nav($attributes, $content);
    }
    /**
     * UL.navbar-nav render.
     *
     * Alias of \tei187\HTMLBuilder\Bootstrap\Nav::Navbar.
     *
     * @param array|null $attributes
     * @param string|null $content
     * @return string
     */
    public static function NavbarNav(array $attributes = [], ?string $content = null) : string {
        return Nav::Navbar($attributes, $content);
    }
    /**
     * LI.nav-item render.
     *
     * Alias of \tei187\HTMLBuilder\Bootstrap\Nav::Item.
     *
     * @param array|null $attributes
     * @param string|null $content
     * @param boolean $dropdown Mark as dropdown container.
     * @return string
     */
    public static function NavItem(array $attributes = [], ?string $content = null, bool $dropdown = false) : string {
        return Nav::Item($attributes, $content, $dropdown);
    }
    /**
     * A.nav-link render.
     *
     * Alias of \tei187\HTMLBuilder\Bootstrap\Nav::Link.
     *
     * @param array|null $attributes
     * @param string|null $content
     * @param string|null $href
     * @param boolean $active FALSE by default.
     * @return string
     */
    public static function NavbarLink(array $attributes = [], ?string $content = null, ?string $href = "#", bool $active = false, bool $dropdownToggle = false) : string {
        return Nav::Link($attributes, $content, $href, $active, $dropdownToggle);
    }
    /**
     * A.nav-link.dropdown-toggle[href="#"][data-bs-toggle="dropdown"] render.
     *
     * Alias of \tei187\HTMLBuilder\Bootstrap\Nav::DropdownToggle.
     *
     * @param array|null $attributes
     * @param string|null $content
     * @return string
     */
    public static function NavbarDropdownToggle(array $attributes = [], ?string $content = null) : string {
        return Nav::DropdownToggle($attributes, $content);
    }
    /**
     * UL.dropdown-menu
     *
     * Alias of \tei187\HTMLBuilder\Bootstrap\Nav::DropdownMenu.
     *
     * @param array $attributes
     * @param array|string|null $content String or array with items from method
     * ::NavbarDropdownItemLink or ::NavbarDropdownItemCustom.
     * @return string
     */
    public static function NavbarDropdownMenu(array $attributes = [], $content = null) : string {
        return Nav::DropdownMenu($attributes, $content);
    }
    /**
     * LI > A.dropdown-item
     *
     * Alias of \tei187\HTMLBuilder\Bootstrap\Nav::DropdownItem.
     *
     * @param array $attributes
     * @param string|null $content
     * @param string $href
     * @return string
     */
    public static function NavbarDropdownItemLink(array $attributes = [], ?string $content = null, ?string $href = "#") : string {
        return Nav::DropdownItemLink($attributes, $content, $href);
    }
    /**
     * LI > {$tag}.dropdown-item
     *
     * Alias of \tei187\HTMLBuilder\Bootstrap\Nav::DropdownItemCustom.
     *
     * @param string $tag
     * @param array $attributes
     * @param string|null $content
     * @return string
     */
    public static function NavbarDropdownItemCustom(string $tag, array $attributes = [], ?string $content = null) : string {
        return Nav::DropdownItemCustom($tag, $attributes, $content);
    }

    /* input group */

    /**
     * Input group render.
     *
     * @param array|null $attributes
     * @param string|null $prepend Prepend element.
     * @param array[]|string|null $value Content.
     * @param string|null $append Append element.
     * @return string
     */
    public static function InputGroup( array $attributes = [], ?string $prepend = null, $value = [ ['id' => null, 'name' => null, 'value' => null, 'type' => 'text', 'placeholder' => null] ], ?string $append = null ) : string {
        $prependStr =
            !empty($prepend) && strlen(trim($prepend)) > 0
                ? self::_InputGroupPrepend( [], self::_PairedBootstrapTags('div', 'input-group-text', $prepend) )
                : "";
        $appendStr =
            !empty($prepend) && strlen(trim($append)) > 0
                ? self::_InputGroupAppend( [], self::_PairedBootstrapTags('div', 'input-group-text', $append) )
                : "";

        return
            self::_PairedBootstrapTags( 'div', 'input-group', $prependStr . self::_InputGroupResolveCenter($value) . $appendStr, $attributes, [] );
    }
    /**
     * File input group render.
     *
     * @param array $attributes
     * @param string|null $prepend
     * @param array $value
     * @param string|null $append
     * @return void
     */
    public static function InputGroupFile( array $attributes = [], ?string $prepend = null, $value = ['id' => null, 'name' => null, 'value' => null, 'placeholder' => null], ?string $append = null ) {
        $prependStr =
            !empty($prepend) && strlen(trim($prepend)) > 0
                ? self::_InputGroupPrepend( [], self::_PairedBootstrapTags('div', 'input-group-text', $prepend) )
                : "";
        $appendStr =
            !empty($prepend) && strlen(trim($append)) > 0
                ? self::_InputGroupAppend( [], self::_PairedBootstrapTags('div', 'input-group-text', $append) )
                : "";

        unset($value['type']);

        $input = Elements::Div(['class' => 'custom-file'],
            Form::Input('file', $value['id'] ?? null, $value['name'] ?? null, array_merge($attributes, ['class'=>"custom-file-input"])) .
            Form::Label("...", $value['id'] ?? null, ['class' => 'custom-file-label'])
        );

        return self::_PairedBootstrapTags( 'div', 'input-group', $prependStr . $input . $appendStr, $attributes, [] );
    }
    /**
     * Input group select render.
     *
     * @param array $attributes
     * @param string|null $prepend
     * @param array|null $value
     * @param string|null $append
     * @return string
     */
    public static function InputGroupSelect(
        array $attributes = [],
        ?string $prepend = null,
        ?array $value = [
            'id' => null,
            'name' => null,
            'options' => [],
            'selected' => null,
        ],
        ?string $append = null
    ) : string {
        return
            self::_PairedBootstrapTags('div', 'input-group',
                (
                    !empty($prepend)
                        ? self::_InputGroupPrepend([], "<div class='input-group-text'>{$prepend}</div>")
                        : null
                ) .
                self::_InputGroupSelectItem(
                    [
                        'id' => $value['id'],
                        'name' => $value['name'],
                    ],
                    $value['options'],
                    $value['selected']
                ) .
                (
                    !empty($append)
                        ? self::_InputGroupAppend([], "<div class='input-group-text'>{$append}</div>")
                        : null
                ),
                $attributes) . PHP_EOL;
    }
    /**
     * File input group render with button.
     *
     * @param array $attributes
     * @param string|null $prepend
     * @param array $value
     * @param string|null $append
     * @return string
     */
    public static function InputGroupWithBtn(array $attributes = [], ?string $prepend = null, $value = [ ['id' => null, 'name' => null, 'value' => null, 'type' => 'text', 'placeholder' => null] ], ?string $append = null ) : string {
        
        $prependStr =
            !empty($prepend) && strlen(trim($prepend)) > 0
                ? self::_InputGroupPrepend( [], self::_PairedBootstrapTags('div', 'input-group-text', $prepend) )
                : "";
        $appendStr =
            !empty($prepend) && strlen(trim($append)) > 0
                ? self::_InputGroupAppendBtn( [], $append )
                : "";

        return
            self::_PairedBootstrapTags( 'div', 'input-group',
                $prependStr .
                self::_InputGroupResolveCenter($value) .
                $appendStr, $attributes, []
        );
    }
    /**
     * @param array $attributes
     * @param string|null $content
     * @return string
     */
    public static function _InputGroupAppend(array $attributes = [], ?string $content = null) : string {
        return self::_pairedBootstrapTags('div', 'input-group-append', $content, $attributes);
    }
    /**
     * @param array $attributes
     * @param string|null $content
     * @return string
     */
    public static function _InputGroupAppendBtn(array $attributes = [], ?string $content = null) : string {
        $contentParsed =
            !strpos($content, 'input-group-text') && strpos($content, 'class')
                ? str_replace('btn', 'btn input-group-text', $content)
                : str_replace('<button', '<button class="btn input-group-text"', $content);
        return self::_pairedBootstrapTags('div', 'input-group-append', $contentParsed, $attributes);
    }
    /**
     * Input group input render.
     *
     * @param array $attributes
     * @param string|null $value
     * @param string|null $type
     * @return string
     */
    public static function _InputGroupInput(array $attributes = [], ?string $value = null, ?string $type = 'text') : string {
        return
            "<input type='{$type}' class='form-control"
                . (isset($attributes['class'])
                    ? " " . $attributes['class'] . "'"
                    : "'")
                . self::_ListAttributes($attributes, [ 'class', 'value', 'type' ])
                . " value='{$value}' />" . PHP_EOL;
    }
    /**
     * Input group prepend render.
     *
     * @param array $attributes
     * @param string|null $content
     * @return string
     */
    public static function _InputGroupPrepend(array $attributes = [], ?string $content = null) : string {
        return self::_pairedBootstrapTags('div', 'input-group-prepend', $content, $attributes);
    }
    /**
     * Some kind of resolver, really...
     *
     * @param string|array $values HTML string or array with items having keys 'value' and 'type'.
     * @return string
     */
    public static function _InputGroupResolveCenter($values) : string {
        if(is_string($values)) {
            return $values;
        } elseif (is_array($values) && !empty($values)) {
            $joined = "";
            foreach($values as $item) {
                $value = $item['value'] ?? null;
                $type = $item['type'] ?? 'text';
                unset($item['value'], $item['type']);
                $joined .= self::_InputGroupInput($item, $value, $type);
            }
            return $joined;
        }
        return "";
    }
    /**
     * Select input item render.
     *
     * @param array $attributes
     * @param array|string|null $optionsArr
     * @param string|int|null $selected
     * @return string
     */
    public static function _InputGroupSelectItem(array $attributes = [], $options = null, $selected = null) : string {
        $optionsArr = [];
        if(is_array($options)) {
            foreach($options as $value => $item) {
                if(is_array($item)) {
                    $optionsArr[] = Form::OptGroup($item['_label'], $item['options'], $selected);
                } else {
                    $optionsArr[] = Form::Option($value, $item, $selected === $value ? true : false);
                }
            }
            $optionsArr = array_filter($optionsArr);
            $optionsArr = implode(PHP_EOL, $optionsArr);
        } elseif (is_string($options)) {
            $optionsArr = $options;
        }

        return
            "<select class='form-control custom-select" .
            (isset($attributes['class'])
                ? " " . $attributes['class']
                : "'") .
            self::_ListAttributes($attributes, [ 'class' ]) . ">" . PHP_EOL .
            $optionsArr .
            "</select>" . PHP_EOL;
    }

    /* modal */

    /**
     * Modal render.
     *
     * @param array|null $attributes
     * @param string|null $id
     * @param string|null $title
     * @param string|null $content
     * @param string|null $footerContent
     * @return string
     */
    public static function Modal(array $attributes = [], ?string $id = null, ?string $title = null, ?string $content = null, ?string $footerContent = null) : string {
        $defaultAttributes = [
            'class' => 'modal fade',
            'id' => is_null($id) ? 'myModal' : $id,
            'data-backdrop' => 'true',
            'data-keyboard' => 'true'
        ];

        if(is_array($attributes) ) {
            key_exists('class', $attributes)
                ? $attributes['class'] = $defaultAttributes['class'] . $attributes['class']
                : $attributes['class'] = $defaultAttributes['class'];
            $attributes = array_merge($defaultAttributes, $attributes);
        } else {
            $attributes = $defaultAttributes;
        }
        unset($defaultAttributes);

        return
            Elements::Div($attributes,
                Elements::Div(['class' => 'modal-dialog modal-dialog-centered'],
                    Elements::Div(['class' => 'modal-content'],
                        Elements::Div(['class' => 'modal-header'],
                            ( !empty($title)
                                ? Elements::Heading(4, ['class' => 'modal-title'], $title) .
                                  Elements::Custom("button", ['type' => 'button', 'class' => 'close', 'data-dismiss' => 'modal'], '&times;')
                                : "" )
                        ) .
                        Elements::Div(['class' => 'modal-body'], $content) .
                        (empty($footerContent) ? null : Elements::Div(['class' => 'modal-footer'], $footerContent))
                    )
                )
            );
    }
    /**
     * Button render, toggling a modal.
     *
     * @param array|null $attributes
     * @param string|null $content
     * @param string $target
     * @return string
     */
    public static function ButtonModalToggle(array $attributes, ?string $content = null, string $target) : string {
        $defaultAttributes = [
            'data-toggle' => 'modal',
            'data-target' => "#".$target
        ];
        
        $attributes =
            is_array($attributes)
                ? array_merge($attributes, $defaultAttributes)
                : $defaultAttributes;

        return self::_PairedBootstrapTags('button', 'btn', $content, $attributes);
    }
}
