<?php

namespace tei187\HTMLBuilder;

use tei187\HTMLBuilder\Traits\ListableAttributes;
use tei187\HTMLBuilder\HTML as Elements;

/**
 * Generates HTML for Bootstrap-specific elements.
 */
class Bootstrap {
    use ListableAttributes;

    /**
     * Default paired tags for Bootstrap.
     * 
     * @param string $tag Opening tag.
     * @param string $defaultClass Bootstrap-relevant class.
     * @param string|null $content Between tags.
     * @param array|null $attributes Self-explanatory.
     * @param array|null $limit ?
     * @return string
     */
    static function _PairedBootstrapTags(string $tag, string $defaultClass, ?string $content = null, array $attributes = [], array $limit = []) : string {
        return
            "<{$tag} class='{$defaultClass}"
                . (isset($attributes['class'])
                    ? " " . $attributes['class'] . "'" 
                    : "'")
                . self::_ListAttributes($attributes, array_merge($limit, [ 'class' ]))
                . ">".$content."</{$tag}>" . PHP_EOL;
    }

    
    /* basic */

    /**
     * Button render.
     *
     * @param array|null $attributes
     * @param string|null $content
     * @return string
     */
    static function Button(?array $attributes, ?string $content = null) : string {
        return self::_PairedBootstrapTags('button', 'btn', $content, $attributes);
    }
    /**
     * Button-style link render.
     *
     * @param array|null $attributes
     * @param string|null $content
     * @return string
     */
    static function ButtonLink(?array $attributes, ?string $content = null) : string {
        return self::_PairedBootstrapTags('a', 'btn', $content, $attributes);
    }
    /**
     * Column-class render.
     *
     * @param array $attributes
     * @param string|null $content
     * @return string
     */
    static function Col(array $attributes = [], ?string $content = null) : string {
        return self::_PairedBootstrapTags('div', 'col', $content, $attributes, []);
    }  
    /**
     * Container-class render.
     *
     * @param array $attributes If has ['class' => "container-fluid"] will switch to fluid container.
     * @param string|null $content
     * @return string
     */
    static function Container(array $attributes = [], ?string $content = null) : string {
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
    static function ContainerFluid(array $attributes = [], ?string $content = null) : string {
        return self::_PairedBootstrapTags('div', 'container-fluid', $content, $attributes, []);
    }
    /**
     * Icon render (Fontawesome).
     *
     * @param string|null $name
     * @param array|null $attributes
     * @return string
     */
    static function Icon(?string $name, ?array $attributes = []) : string {
        if(key_exists('class', $attributes)) {
            $attributes['class'] .= " " . $name;
        } else {
            $attributes['class'] = $name;
        }

        return self::_PairedBootstrapTags('i', 'fa', null, $attributes, []);
    }    
    /**
     * Nav-class render.
     *
     * @param array $attributes
     * @param string|null $content
     * @return string
     */
    static function Nav(array $attributes = [], ?string $content = null) : string {
        return self::_PairedBootstrapTags('nav', 'navbar bg-dark justify-content-between', $content, $attributes, []);
    }    
    /**
     * Row-class render.
     *
     * @param array $attributes
     * @param string|null $content
     * @return string
     */
    static function Row(array $attributes = [], ?string $content = null) : string {
        return self::_PairedBootstrapTags('div', 'row', $content, $attributes, []);
    }
    /**
     * Table-class render.
     *
     * @param array $attributes
     * @param string|null $content
     * @return string
     */
    static function Table(array $attributes = [], ?string $content = null) : string {
        key_exists('class', $attributes)
            ? ( 
                strpos($attributes['class'], 'table') === false
                    ? $attributes['class'] = "table " . $attributes['class']
                    : null 
              )
            : null;
        return Elements::Table($attributes, $content);
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
    static function InputGroup( array $attributes = [], ?string $prepend = null, $value = [ ['id' => null, 'name' => null, 'value' => null, 'type' => 'text', 'placeholder' => null] ], ?string $append = null ) : string {
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
    static function InputGroupFile( array $attributes = [], ?string $prepend = null, $value = ['id' => null, 'name' => null, 'value' => null, 'placeholder' => null], ?string $append = null ) {
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
    static function InputGroupSelect(
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
    static function InputGroupWithBtn( array $attributes = [], ?string $prepend = null, $value = [ ['id' => null, 'name' => null, 'value' => null, 'type' => 'text', 'placeholder' => null] ], ?string $append = null ) : string {
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
    static function _InputGroupAppend(array $attributes = [], ?string $content = null) : string {
        return self::_pairedBootstrapTags('div', 'input-group-append', $content, $attributes);
    }
    /**
     * @param array $attributes
     * @param string|null $content
     * @return string
     */
    static function _InputGroupAppendBtn(array $attributes = [], ?string $content = null) : string {
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
    static function _InputGroupInput(array $attributes = [], ?string $value = null, ?string $type = 'text') : string {
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
    static function _InputGroupPrepend(array $attributes = [], ?string $content = null) : string {
        return self::_pairedBootstrapTags('div', 'input-group-prepend', $content, $attributes);
    }
    /**
     * Some kind of resolver, really...
     *
     * @param string|array $values HTML string or array with items having keys 'value' and 'type'.
     * @return string
     */
    static function _InputGroupResolveCenter($values) : string {
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
    static function _InputGroupSelectItem(array $attributes = [], $options = null, $selected = null) : string {
        $optionsArr = [];
        if(is_array($options)) {
            foreach($options as $value => $item) {
                if(is_array($item)) {
                    $optionsArr[] = Form::OptGroup($item['_label'], $item['options'], $selected);
                } else {
                    $optionsArr[] = Form::Option($value, $item, $selected == $value ? true : false);
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
    static function Modal(?array $attributes = [], ?string $id = null, ?string $title = null, ?string $content = null, ?string $footerContent = null) : string {
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
    static function ButtonModalToggle(?array $attributes, ?string $content = null, string $target) : string {
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