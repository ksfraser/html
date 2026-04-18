<?php

namespace Ksfraser\HTML\Elements;

use Ksfraser\HTML\HtmlElement;

/**

 * Generic heading element. Use as HtmlH(level, content)

 *

 * @since v2.0.1 2026-04-14

 * @return void

 */
/**
 * HtmlH
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * HtmlH
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * HtmlH
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * HtmlH
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * HtmlH
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * HtmlH
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * HtmlH
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * HtmlH
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * HtmlH
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * HtmlH
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * HtmlH
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * HtmlH
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * HtmlH
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * HtmlH
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * HtmlH
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * HtmlH
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
class HtmlH extends HtmlElement
{
/**
 * __construct
 *
 * @since v1.0.5 2026-04-14
 * @param int $level
 * @param string $text
 * @return void
 */
    public /**
 * __construct
 *
 * @param int $level
 * @param string $text
 * @return void
 */
/**
 * __construct
 *
 * @param int $level
 * @param string $text
 * @return void
 */
/**
 * __construct
 *
 * @param int $level
 * @param string $text
 * @return void
 */
/**
 * __construct
 *
 * @param int $level
 * @param string $text
 * @return void
 */
/**
 * __construct
 *
 * @param int $level
 * @param string $text
 * @return void
 */
/**
 * __construct
 *
 * @param int $level
 * @param string $text
 * @return void
 */
/**
 * __construct
 *
 * @param int $level
 * @param string $text
 * @return void
 */
/**
 * __construct
 *
 * @param int $level
 * @param string $text
 * @return void
 */
/**
 * __construct
 *
 * @param int $level
 * @param string $text
 * @return void
 */
/**
 * __construct
 *
 * @param int $level
 * @param string $text
 * @return void
 */
/**
 * __construct
 *
 * @param int $level
 * @param string $text
 * @return void
 */
/**
 * __construct
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $level
 * @param mixed $text
 * @return void
 */
/**
 * __construct
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $level
 * @param mixed $text
 * @return void
 */
/**
 * __construct
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $level
 * @param mixed $text
 * @return void
 */
/**
 * __construct
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $level
 * @param mixed $text
 * @return void
 */
/**
 * __construct
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $level
 * @param mixed $text
 * @return void
 */
/**
 * __construct
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $level
 * @param mixed $text
 * @return void
 */
/**
 * __construct
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $level
 * @param mixed $text
 * @return void
 */
/**
 * __construct
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $level
 * @param mixed $text
 * @return void
 */
/**
 * __construct
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $level
 * @param mixed $text
 * @return void
 */
/**
 * __construct
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $level
 * @param mixed $text
 * @return void
 */
/**
 * __construct
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $level
 * @param mixed $text
 * @return void
 */
/**
 * __construct
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $level
 * @param mixed $text
 * @return void
 */
/**
 * __construct
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $level
 * @param mixed $text
 * @return void
 */
/**
 * __construct
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $level
 * @param mixed $text
 * @return void
 */
/**
 * __construct
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $level
 * @param mixed $text
 * @return void
 */
/**
 * __construct
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $level
 * @param mixed $text
 * @return void
 */
function __construct(int $level = 1, string $text = '')
    {
        $level = max(1, min(6, $level));
        parent::__construct();
        $this->setTag('h' . $level);
        if ($text !== '') {
            $this->content = $text;
        }
    }
}
