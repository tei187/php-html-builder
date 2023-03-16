<?php

namespace tei187\HTMLBuilder\Bootstrap;

use tei187\HTMLBuilder\Traits\Bootstrap\LineBreak;
use tei187\HTMLBuilder\HTML;
use tei187\HTMLBuilder\Traits\Bootstrap\BreakpointForming;
use tei187\HTMLBuilder\Traits\HasAttributes;
use tei187\HTMLBuilder\Traits\HasClasses;
use tei187\Utilities;

/**
 * Class with object and static methods, revolving around Column element.
 * 
 * Example:
 * ```php
 * $col = new Col;
 * echo 
 * $col->setBreakpoints(null, 'auto', 6, 4, 3)
 *     ->setOrder(null, 2, null, null, 1)
 *     ->getClassStr();
 * // col col-sm-auto col-md-6 col-lg-4 col-xl-3 order-sm-2 order-xl-1
 * ```
 */
class Col {
    use LineBreak,
        HasClasses,
        HasAttributes,
        BreakpointForming;

    private $xs = null;
    private $sm = null;
    private $md = null;
    private $lg = null;
    private $xl = null;
    private $order_xs = null;
    private $order_sm = null;
    private $order_md = null;
    private $order_lg = null;
    private $order_xl = null;
    private $offset_xs = null;
    private $offset_sm = null;
    private $offset_md = null;
    private $offset_lg = null;
    private $offset_xl = null;

    private $content = "";

    public function __construct() {
        $this->addClass('col');
    }

    /**
     * @param string|null $content
     * @return self
     */
    public function setContent(?string $content) : self {
        if(is_null($content)) {
            $this->content = "";
        } else {
            $this->content = $content;
        }
        return $this;
    }

    /**
     * Returns arrays containing data about selected breakpoint-based settings: column size, column offset, order.
     * @return array
     */
    private function getBreakpointsArrayCombined() : array {
        return [
            'breakpoints' => [
                'xs' => $this->xs,
                'sm' => $this->sm,
                'md' => $this->md,
                'lg' => $this->lg,
                'xl' => $this->xl,
            ],
            'order' => [
                'xs' => $this->order_xs,
                'sm' => $this->order_sm,
                'md' => $this->order_md,
                'lg' => $this->order_lg,
                'xl' => $this->order_xl,
            ],
            'offset' => [
                'xs' => $this->offset_xs,
                'sm' => $this->offset_sm,
                'md' => $this->offset_md,
                'lg' => $this->offset_lg,
                'xl' => $this->offset_xl,
            ]
        ];
    }

    /**
     * Returns array of formatted breakpoint-based settings (array of class names).
     *
     * @param boolean $mergeWithClass If true, seeks if object has 'classes' property and merges breakpoint-based settings with already assigned additional classes.
     * @return array
     */
    public function getBreakpointsClassArr(bool $mergeWithClass = false) : array {
        $data = $this->getBreakpointsArrayCombined();
        $classes = [];
        foreach($data as $index => $values) {
            if(!empty($values)) {
                switch($index) {
                    case 'breakpoints': $prefix = "col"; break;
                    case 'order':       $prefix = "order"; break;
                    case 'offset':      $prefix = "offset"; break;
                }

                foreach($values as $k => $v) {
                    $str = self::FormBreakpoint($prefix, $k, $v);
                    !is_null($str) 
                        ? $classes[] = $str
                        : null;
                }
            }
        }

        return
            $mergeWithClass
                ? array_unique( array_filter( array_merge($this->classes, $classes)))
                : $classes;
    }

    /**
     * Returns formatted 'class' attribute for column's width breakpoints and order.
     *
     * @return string
     */
    public function getClassStr() : string {
        $data = $this->getBreakpointsArrayCombined();
        $unified = [];

        foreach($data as $index => $values) {
            if(!empty($values)) {
                switch($index) {
                    case 'breakpoints': $prefix = "col"; break;
                    case 'order':       $prefix = "order"; break;
                    case 'offset':      $prefix = "offset"; break;
                }

                foreach($values as $k => $v) {
                    $str = self::FormBreakpoint($prefix, $k, $v);
                    $unified[] = !is_null($str) ? $str : null;
                }
            }
        }

        return implode(" ", array_unique( array_filter( array_merge($this->classes, $unified))));
    }

    /* WIDTH BREAKPOINTS */

        /**
         * Sets column width breakpoints.
         *
         * @param string|integer|null $xs Extra-small breakpoint. Integer 1-12, string 'auto' or NULL (nullifies all breakpoints).
         * @param string|integer|null $sm Small breakpoint. Integer 1-12, string 'auto' or NULL (nullifies all breakpoints).
         * @param string|integer|null $md Medium breakpoint. Integer 1-12, string 'auto' or NULL (nullifies all breakpoints).
         * @param string|integer|null $lg Large breakpoint. Integer 1-12, string 'auto' or NULL (nullifies all breakpoints).
         * @param string|integer|null $xl Extra-large breakpoint. Integer 1-12, string 'auto' or NULL (nullifies all breakpoints).
         * @return self
         * 
         */
        public function setBreakpoints($xs = null, $sm = null, $md = null, $lg = null, $xl = null) : self {
            list(
                $this->xs,
                $this->sm,
                $this->md,
                $this->lg,
                $this->xl
            ) = [ 
                $xs,
                $sm,
                $md,
                $lg,
                $xl
            ];
            return $this;
        }
        /**
         * Sets column width breakpoints by array.
         * 
         * @param array|null $breakpoints Array with keys `xs`, `sm`, `md`, `lg`, `xl` (or keys 0-4) or NULL (nullifies all breakpoints).
         * @return self
         */
        public function SetBreakpointsByArray(?array $breakpoints = []) : self {
            $a = [ 'xs' => null, 'sm' => null, 'md' => null, 'lg' => null, 'xl' => null ];

            if(is_array($breakpoints)) {
                $a['xs'] = key_exists('xs', $breakpoints)
                    ? $breakpoints['xs']
                    : ( key_exists(0, $breakpoints) ? $breakpoints[0] : null );
                $a['sm'] = key_exists('sm', $breakpoints)
                    ? $breakpoints['sm']
                    : ( key_exists(1, $breakpoints) ? $breakpoints[1] : null );
                $a['md'] = key_exists('md', $breakpoints)
                    ? $breakpoints['md']
                    : ( key_exists(2, $breakpoints) ? $breakpoints[2] : null );
                $a['lg'] = key_exists('lg', $breakpoints)
                    ? $breakpoints['lg']
                    : ( key_exists(3, $breakpoints) ? $breakpoints[3] : null );
                $a['xl'] = key_exists('xl', $breakpoints)
                    ? $breakpoints['xl']
                    : ( key_exists(4, $breakpoints) ? $breakpoints[4] : null );
            }
            
            return $this->setBreakpoints($a['xs'], $a['sm'], $a['md'], $a['lg'], $a['xl']);
        }
        /**
         * Returns array with column's set width breakpoints.
         *
         * @return array
         */
        public function getBreakpoints() : array {
            return 
                [
                    'xs' => $this->xs,
                    'sm' => $this->sm,
                    'md' => $this->md,
                    'lg' => $this->lg,
                    'xl' => $this->xl,
                ];
        }

    /* ORDER BREAKPOINTS */    

        /**
         * Sets column order breakpoints.
         *
         * @param integer|null $xs
         * @param integer|null $sm
         * @param integer|null $md
         * @param integer|null $lg
         * @param integer|null $xl
         * @return self
         */
        public function setOrder(?int $xs = null, ?int $sm = null, ?int $md = null, ?int $lg = null, ?int $xl = null) : self {
            list(
                $this->order_xs,
                $this->order_sm,
                $this->order_md,
                $this->order_lg,
                $this->order_xl
            ) = 
            [
                $xs,
                $sm,
                $md,
                $lg,
                $xl
            ];
            return $this;
        }
        /**
         * Sets column order breakpoints by array.
         *
         * @param array|null $order Array with keys `xs`, `sm`, `md`, `lg`, `xl` (or keys 0-4) or NULL (nullifies all breakpoints).
         * @return self
         */
        public function setOrderByArray(?array $order = []) : self {
            $a = [ 'xs' => null, 'sm' => null, 'md' => null, 'lg' => null, 'xl' => null ];

            if(is_array($order)) {
                $a['xs'] = key_exists('xs', $order)
                    ? $order['xs']
                    : ( key_exists(0, $order) ? $order[0] : null );
                $a['sm'] = key_exists('sm', $order)
                    ? $order['sm']
                    : ( key_exists(1, $order) ? $order[1] : null );
                $a['md'] = key_exists('md', $order)
                    ? $order['md']
                    : ( key_exists(2, $order) ? $order[2] : null );
                $a['lg'] = key_exists('lg', $order)
                    ? $order['lg']
                    : ( key_exists(3, $order) ? $order[3] : null );
                $a['xl'] = key_exists('xl', $order)
                    ? $order['xl']
                    : ( key_exists(4, $order) ? $order[4] : null );
            }

            return $this->setOrder($a['xs'], $a['sm'], $a['md'], $a['lg'], $a['xl']);
        }
        /**
         * Returns array with column's set order breakpoints.
         *
         * @return array
         */
        public function getOrder() : array {
            return 
                [
                    'xs' => $this->order_xs,
                    'sm' => $this->order_sm,
                    'md' => $this->order_md,
                    'lg' => $this->order_lg,
                    'xl' => $this->order_xl,
                ];
        }

    /* OFFSET BREAKPOINTS */
    
        /**
         * Sets column offset breakpoints.
         *
         * @param integer|null $xs
         * @param integer|null $sm
         * @param integer|null $md
         * @param integer|null $lg
         * @param integer|null $xl
         * @return self
         */
        public function setOffset(?int $xs = null, ?int $sm = null, ?int $md = null, ?int $lg = null, ?int $xl = null) : self {
            list(
                $this->offset_xs,
                $this->offset_sm,
                $this->offset_md,
                $this->offset_lg,
                $this->offset_xl
            ) = 
            [
                $xs,
                $sm,
                $md,
                $lg,
                $xl
            ];
            return $this;
        }
        /**
         * Sets column offset breakpoints by array.
         *
         * @param array|null $offset Array with keys `xs`, `sm`, `md`, `lg`, `xl` (or keys 0-4) or NULL (nullifies all breakpoints).
         * @return self
         */
        public function setOffsetByArray(?array $offset = []) : self {
            $a = [ 'xs' => null, 'sm' => null, 'md' => null, 'lg' => null, 'xl' => null ];

            if(is_array($offset)) {
                $a['xs'] = key_exists('xs', $offset)
                    ? $offset['xs']
                    : ( key_exists(0, $offset) ? $offset[0] : null );
                $a['sm'] = key_exists('sm', $offset)
                    ? $offset['sm']
                    : ( key_exists(1, $offset) ? $offset[1] : null );
                $a['md'] = key_exists('md', $offset)
                    ? $offset['md']
                    : ( key_exists(2, $offset) ? $offset[2] : null );
                $a['lg'] = key_exists('lg', $offset)
                    ? $offset['lg']
                    : ( key_exists(3, $offset) ? $offset[3] : null );
                $a['xl'] = key_exists('xl', $offset)
                    ? $offset['xl']
                    : ( key_exists(4, $offset) ? $offset[4] : null );
            }

            return $this->setOrder($a['xs'], $a['sm'], $a['md'], $a['lg'], $a['xl']);
        }
        /**
         * Returns array with column's set offset breakpoints.
         *
         * @return array
         */
        public function getOffset() : array {
            return 
                [
                    'xs' => $this->offset_xs,
                    'sm' => $this->offset_sm,
                    'md' => $this->offset_md,
                    'lg' => $this->offset_lg,
                    'xl' => $this->offset_xl,
                ];
        }

    /* RENDER */
    
        /**
         * Renders column element.
         *
         * @param array|\tei187\HTMLBuilder\Bootstrap\Col|null $sizes Array with size breakpoints,
         * object with set size and order breakpoints or null (no size breakpoints).
         * @param array|null $attributes Additional HTML attributes to use in the DIV tag.
         * @param string|null $content Column content.
         * @return string
         */
        public static function Column($properties = null, ?array $attributes = [], ?string $content = null) : string {
            if(Utilities::is_object_of_class($properties, "tei187\\HTMLBuilder\\Bootstrap\\Col")) {
                $class = $properties->getClassStr();
            } elseif(is_array($properties) || is_null($properties)) {
                $class = (new Col())->SetBreakpointsByArray($properties)->getClassStr();
            }

            $class = preg_replace('/^(col)\s{1}/', '', $class);
            
            if(is_array($attributes)) {
                if(key_exists('class', $attributes))
                    $attributes['class'] = implode(" ", array_unique(array_merge(explode(" ", $attributes['class']), explode(" ", $class))));
                else
                    $attributes['class'] = $class;
            }

            return HTML::Custom('div', $attributes, $content);
        }

        public function render() {
            return self::Column($this, $this->getAttributes(true), $this->content);
        }

    // supporting methods

}
