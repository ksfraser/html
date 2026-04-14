<?php

namespace Ksfraser\HTML\Formatting;

/**
 * class HtmlSub
 *
 * @since 1.0.3 2026-02-21
 */
class HtmlSub extends HtmlFormatting
{
/**
 * __construct
 *
 * @since v1.0.0 2026-04-13
 * @param mixed $data
 * @return void
 */
    function __construct( $data )
    {
        parent::__construct( $data );
        $this->tag = "sub";
    }
}
