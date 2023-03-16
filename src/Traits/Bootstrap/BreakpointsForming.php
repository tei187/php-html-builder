<?php

namespace tei187\HTMLBuilder\Traits\Bootstrap;

trait BreakpointForming {
    public static function FormBreakpoint($prefix, $breakpoint, $number) : ?string {
        return
            !is_null($number) && $number > 0
                ? ( 
                    $breakpoint == "xs"
                        ? "{$prefix}-{$number}"
                        : "{$prefix}-{$breakpoint}-{$number}" 
                    )
                : (
                    is_string($number) && strlen($number) > 0
                        ? "{$prefix}-{$breakpoint}-{$number}"
                        : null
                );
    }
}
