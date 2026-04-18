<?php

namespace Ksfraser\HTML\Elements;

use Ksfraser\HTML\HtmlElement;
use Ksfraser\HTML\HtmlElementInterface;
use Ksfraser\HTML\Elements\HtmlString;

/**

 * class HtmlVideo

 *

 * @since v2.0.1 2026-04-14

 * @return void

 */
/**
 * HtmlVideo
 *
 * @since v1.0.0 2026-04-14
 * @return void
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
    public /**
 * __construct
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $data
 * @return void
 */
function __construct(string|HtmlElementInterface|null $data = null)
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
    public /**
 * setSrc
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $src
 * @return self
 */
function setSrc(string $src): self
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
    public /**
 * setControls
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $enabled
 * @return self
 */
function setControls(bool $enabled = true): self
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
    public /**
 * setAutoplay
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $enabled
 * @return self
 */
function setAutoplay(bool $enabled = true): self
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
    public /**
 * addSourceUrl
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $src
 * @param mixed $type
 * @return self
 */
function addSourceUrl(string $src, ?string $type = null): self
    {
        $s = new HtmlSource($src, $type);
        $this->addNested($s);
        return $this;
    }
}
