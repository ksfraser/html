<?php

namespace Ksfraser\HTML\Elements;

use Ksfraser\HTML\HtmlElement;
use Ksfraser\HTML\HtmlElementInterface;
use Ksfraser\HTML\Elements\HtmlString;

/**
 * class HtmlVideo
 *
 *
 * @since v2.0.1 2026-04-14
 */
class HtmlVideo extends HtmlElement
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
        // If a simple HtmlString was passed as content, treat it as a src URL
        if ($data instanceof \Ksfraser\HTML\Elements\HtmlString) {
            $raw = html_entity_decode($data->getHtml(), ENT_QUOTES, 'UTF-8');
            if ($raw !== '') {
                $this->setSrc($raw);
            }
        }
        $this->setTag('video');
    }

/**
 * setSrc
 *
 * @since v1.0.5 2026-04-14
 * @param string $src
 * @return self
 */
    public function setSrc(string $src): self
    {
        $this->addAttribute('src', $src);
        return $this;
    }

/**
 * setControls
 *
 * @since v1.0.5 2026-04-14
 * @param bool $enabled
 * @return self
 */
    public function setControls(bool $enabled = true): self
    {
        if ($enabled) {
            $this->addAttribute('controls', 'controls');
        } else {
            $this->removeAttribute('controls');
        }
        return $this;
    }

/**
 * setAutoplay
 *
 * @since v1.0.5 2026-04-14
 * @param bool $enabled
 * @return self
 */
    public function setAutoplay(bool $enabled = true): self
    {
        if ($enabled) {
            $this->addAttribute('autoplay', 'autoplay');
        } else {
            $this->removeAttribute('autoplay');
        }
        return $this;
    }

/**
 * addSourceUrl
 *
 * @since v1.0.5 2026-04-14
 * @param string $src
 * @param ?string $type
 * @return self
 */
    public function addSourceUrl(string $src, ?string $type = null): self
    {
        $s = new HtmlSource($src, $type);
        $this->addNested($s);
        return $this;
    }
}
