<?php

namespace tei187\HTMLBuilder\Traits;

use tei187\HTMLBuilder\Traits\ListableAttributes;

/**
 * More Bootstrap-specific version of ClosingTags::_PairedTags()
 */
trait BootstrapTags {
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
}