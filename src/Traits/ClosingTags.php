<?php

namespace tei187\HTMLBuilder\Traits;

/**
 * Trait used for HTML tags, specifying paired closing tags and self-closing tags strings rendering.
 */
trait ClosingTags {
    use ListableAttributes;
    
    /**
     * Paired closing tags template.
     *
     * @param string $tag Starting and ending DOM element tag.
     * @param string|integer|float|null $content Enwrapped content.
     * @param array|null $attributes Tag attributes.
     * @param array $limit
     * @return string
     */
    static private function _PairedTags(string $tag, $content = null, array $attributes = [], array $limit = []) : string {
        $o = "";
        foreach($attributes as $attr => $value) 
            if(!in_array($attr, $limit))
                $o .= " ".strtolower($attr)."='".htmlentities($value)."'";
        return 
            "<{$tag}" .
                self::_ListAttributes($attributes, $limit) .
            ">" . PHP_EOL . "{$content}". PHP_EOL . "</{$tag}>" . PHP_EOL;
    }
    /**
     * Self-closing tags template.
     *
     * @param string $tag
     * @param array|null $attributes
     * @param array|null $limit
     * @return string
     */
    static private function _SelfClosingTag(string $tag, ?array $attributes = [], ?array $limit = []) : string {
        return
            "<{$tag}" .
                self::_ListAttributes($attributes, $limit) .
            "/>" . PHP_EOL;
    }
}