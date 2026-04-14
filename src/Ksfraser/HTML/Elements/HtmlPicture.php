<?php

namespace Ksfraser\HTML\Elements;

use Ksfraser\HTML\HtmlElement;
use Ksfraser\HTML\HtmlElementInterface;
use Ksfraser\HTML\Elements\HtmlString;

/**
 * class HtmlPicture
 *
 *
 *
 *
 *
 *
 * @since v2.0.1 2026-04-14
 */
class HtmlPicture extends HtmlElement
{
/**
 * __construct
 *
 * @since v1.0.5 2026-04-14
 * @param string|HtmlElementInterface|null $data
 * @return void
 */
    public function __construct(string|HtmlElementInterface|null $data = null)
    {
        if (is_string($data)) {
            $data = new HtmlString($data);
        }
        parent::__construct($data ?? new HtmlString(''));
        $this->setTag('picture');
    }

    /**
     * Add an existing source element
 * @return self
 * @param HtmlElementInterface $source
 * @since v2.0.1 2026-04-14
     */
    public function addSourceElement(HtmlElementInterface $source): self
    {
        $this->addNested($source);
        return $this;
    }

    /**
     * Convenience: add a <source src="..." type="..."> child
 * @return self
 * @param string $src
 * @param ?string $type
 * @since v2.0.1 2026-04-14
     */
    public function addSourceUrl(string $src, ?string $type = null): self
    {
        $s = new HtmlSource($src, $type);
        $this->addNested($s);
        return $this;
    }
}
