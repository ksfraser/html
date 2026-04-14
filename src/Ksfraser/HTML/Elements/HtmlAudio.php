<?php

namespace Ksfraser\HTML\Elements;

use Ksfraser\HTML\HtmlElement;
use Ksfraser\HTML\HtmlElementInterface;

/**

 * HtmlAudio element — represents an HTML <audio> element.

 *

 * @since v2.0.1 2026-04-14

 */
class HtmlAudio extends HtmlElement
{
    /**
     * Accept string content (url) or an HtmlElementInterface (nested content)
     *
     * @since v2.0.1 2026-04-14
     * @param mixed $data
     * @return void
     */
    public function __construct($data = null)
    {
        if ($data === null) {
            parent::__construct(new HtmlString(''));
        } elseif ($data instanceof HtmlElementInterface) {
            parent::__construct($data);
        } else {
            // treat plain string as a src attribute value (common usage)
            parent::__construct(new HtmlString(''));
            $this->setSrc((string)$data);
        }

        $this->setTag('audio');
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

 * setLoop

 *

 * @since v1.0.5 2026-04-14

 * @param bool $enabled

 * @return self

 */
    public function setLoop(bool $enabled = true): self
    {
        if ($enabled) {
            $this->addAttribute('loop', 'loop');
        } else {
            $this->removeAttribute('loop');
        }
        return $this;
    }

/**

 * setMuted

 *

 * @since v1.0.5 2026-04-14

 * @param bool $enabled

 * @return self

 */
    public function setMuted(bool $enabled = true): self
    {
        if ($enabled) {
            $this->addAttribute('muted', 'muted');
        } else {
            $this->removeAttribute('muted');
        }
        return $this;
    }

/**

 * setPreload

 *

 * @since v1.0.5 2026-04-14

 * @param string $value

 * @return self

 */
    public function setPreload(string $value): self
    {
        $this->addAttribute('preload', $value);
        return $this;
    }

    /**

     * Add a nested <source> element (accepts an HtmlElementInterface source element)

     *

     * @since v2.0.1 2026-04-14

     * @param HtmlElementInterface $source

     * @return self

     */
    public function addSourceElement(HtmlElementInterface $source): self
    {
        $this->addNested($source);
        return $this;
    }

    /**

     * Convenience: add a <source src="..." type="..."> child element

     *

     * @since v2.0.1 2026-04-14

     * @param string $src

     * @param ?string $type

     * @return self

     */
    public function addSourceUrl(string $src, ?string $type = null): self
    {
        $s = new HtmlElement();
        $s->setTag('source');
        $s->addAttribute('src', $src);
        if ($type !== null) {
            $s->addAttribute('type', $type);
        }
        $this->addNested($s);
        return $this;
    }
}
