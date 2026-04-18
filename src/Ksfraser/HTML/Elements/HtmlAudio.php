<?php

namespace Ksfraser\HTML\Elements;

use Ksfraser\HTML\HtmlElement;
use Ksfraser\HTML\HtmlElementInterface;

/**

 * HtmlAudio element — represents an HTML <audio> element.

 *

 * @since v2.0.1 2026-04-14

 * @return void

 */
/**
 * HtmlAudio
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * HtmlAudio
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * HtmlAudio
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * HtmlAudio
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * HtmlAudio
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * HtmlAudio
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * HtmlAudio
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * HtmlAudio
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * HtmlAudio
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * HtmlAudio
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * HtmlAudio
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * HtmlAudio
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * HtmlAudio
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * HtmlAudio
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * HtmlAudio
 *
 * @since v1.0.0 2026-04-14
 * @return void
 */
/**
 * HtmlAudio
 *
 * @since v1.0.0 2026-04-14
 * @return void
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
    public /**
 * __construct
 *
 * @param mixed $data
 * @return void
 */
/**
 * __construct
 *
 * @param mixed $data
 * @return void
 */
/**
 * __construct
 *
 * @param mixed $data
 * @return void
 */
/**
 * __construct
 *
 * @param mixed $data
 * @return void
 */
/**
 * __construct
 *
 * @param mixed $data
 * @return void
 */
/**
 * __construct
 *
 * @param mixed $data
 * @return void
 */
/**
 * __construct
 *
 * @param mixed $data
 * @return void
 */
/**
 * __construct
 *
 * @param mixed $data
 * @return void
 */
/**
 * __construct
 *
 * @param mixed $data
 * @return void
 */
/**
 * __construct
 *
 * @param mixed $data
 * @return void
 */
/**
 * __construct
 *
 * @param mixed $data
 * @return void
 */
/**
 * __construct
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $data
 * @return void
 */
/**
 * __construct
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $data
 * @return void
 */
/**
 * __construct
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $data
 * @return void
 */
/**
 * __construct
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $data
 * @return void
 */
/**
 * __construct
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $data
 * @return void
 */
/**
 * __construct
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $data
 * @return void
 */
/**
 * __construct
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $data
 * @return void
 */
/**
 * __construct
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $data
 * @return void
 */
/**
 * __construct
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $data
 * @return void
 */
/**
 * __construct
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $data
 * @return void
 */
/**
 * __construct
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $data
 * @return void
 */
/**
 * __construct
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $data
 * @return void
 */
/**
 * __construct
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $data
 * @return void
 */
/**
 * __construct
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $data
 * @return void
 */
/**
 * __construct
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $data
 * @return void
 */
/**
 * __construct
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $data
 * @return void
 */
function __construct($data = null)
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
    public /**
 * setSrc
 *
 * @param string $src
 * @return self
 */
/**
 * setSrc
 *
 * @param string $src
 * @return self
 */
/**
 * setSrc
 *
 * @param string $src
 * @return self
 */
/**
 * setSrc
 *
 * @param string $src
 * @return self
 */
/**
 * setSrc
 *
 * @param string $src
 * @return self
 */
/**
 * setSrc
 *
 * @param string $src
 * @return self
 */
/**
 * setSrc
 *
 * @param string $src
 * @return self
 */
/**
 * setSrc
 *
 * @param string $src
 * @return self
 */
/**
 * setSrc
 *
 * @param string $src
 * @return self
 */
/**
 * setSrc
 *
 * @param string $src
 * @return self
 */
/**
 * setSrc
 *
 * @param string $src
 * @return self
 */
/**
 * setSrc
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $src
 * @return self
 */
/**
 * setSrc
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $src
 * @return self
 */
/**
 * setSrc
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $src
 * @return self
 */
/**
 * setSrc
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $src
 * @return self
 */
/**
 * setSrc
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $src
 * @return self
 */
/**
 * setSrc
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $src
 * @return self
 */
/**
 * setSrc
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $src
 * @return self
 */
/**
 * setSrc
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $src
 * @return self
 */
/**
 * setSrc
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $src
 * @return self
 */
/**
 * setSrc
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $src
 * @return self
 */
/**
 * setSrc
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $src
 * @return self
 */
/**
 * setSrc
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $src
 * @return self
 */
/**
 * setSrc
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $src
 * @return self
 */
/**
 * setSrc
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $src
 * @return self
 */
/**
 * setSrc
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $src
 * @return self
 */
/**
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
 * @param bool $enabled
 * @return self
 */
/**
 * setControls
 *
 * @param bool $enabled
 * @return self
 */
/**
 * setControls
 *
 * @param bool $enabled
 * @return self
 */
/**
 * setControls
 *
 * @param bool $enabled
 * @return self
 */
/**
 * setControls
 *
 * @param bool $enabled
 * @return self
 */
/**
 * setControls
 *
 * @param bool $enabled
 * @return self
 */
/**
 * setControls
 *
 * @param bool $enabled
 * @return self
 */
/**
 * setControls
 *
 * @param bool $enabled
 * @return self
 */
/**
 * setControls
 *
 * @param bool $enabled
 * @return self
 */
/**
 * setControls
 *
 * @param bool $enabled
 * @return self
 */
/**
 * setControls
 *
 * @param bool $enabled
 * @return self
 */
/**
 * setControls
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $enabled
 * @return self
 */
/**
 * setControls
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $enabled
 * @return self
 */
/**
 * setControls
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $enabled
 * @return self
 */
/**
 * setControls
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $enabled
 * @return self
 */
/**
 * setControls
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $enabled
 * @return self
 */
/**
 * setControls
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $enabled
 * @return self
 */
/**
 * setControls
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $enabled
 * @return self
 */
/**
 * setControls
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $enabled
 * @return self
 */
/**
 * setControls
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $enabled
 * @return self
 */
/**
 * setControls
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $enabled
 * @return self
 */
/**
 * setControls
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $enabled
 * @return self
 */
/**
 * setControls
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $enabled
 * @return self
 */
/**
 * setControls
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $enabled
 * @return self
 */
/**
 * setControls
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $enabled
 * @return self
 */
/**
 * setControls
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $enabled
 * @return self
 */
/**
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
 * @param bool $enabled
 * @return self
 */
/**
 * setAutoplay
 *
 * @param bool $enabled
 * @return self
 */
/**
 * setAutoplay
 *
 * @param bool $enabled
 * @return self
 */
/**
 * setAutoplay
 *
 * @param bool $enabled
 * @return self
 */
/**
 * setAutoplay
 *
 * @param bool $enabled
 * @return self
 */
/**
 * setAutoplay
 *
 * @param bool $enabled
 * @return self
 */
/**
 * setAutoplay
 *
 * @param bool $enabled
 * @return self
 */
/**
 * setAutoplay
 *
 * @param bool $enabled
 * @return self
 */
/**
 * setAutoplay
 *
 * @param bool $enabled
 * @return self
 */
/**
 * setAutoplay
 *
 * @param bool $enabled
 * @return self
 */
/**
 * setAutoplay
 *
 * @param bool $enabled
 * @return self
 */
/**
 * setAutoplay
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $enabled
 * @return self
 */
/**
 * setAutoplay
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $enabled
 * @return self
 */
/**
 * setAutoplay
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $enabled
 * @return self
 */
/**
 * setAutoplay
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $enabled
 * @return self
 */
/**
 * setAutoplay
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $enabled
 * @return self
 */
/**
 * setAutoplay
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $enabled
 * @return self
 */
/**
 * setAutoplay
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $enabled
 * @return self
 */
/**
 * setAutoplay
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $enabled
 * @return self
 */
/**
 * setAutoplay
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $enabled
 * @return self
 */
/**
 * setAutoplay
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $enabled
 * @return self
 */
/**
 * setAutoplay
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $enabled
 * @return self
 */
/**
 * setAutoplay
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $enabled
 * @return self
 */
/**
 * setAutoplay
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $enabled
 * @return self
 */
/**
 * setAutoplay
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $enabled
 * @return self
 */
/**
 * setAutoplay
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $enabled
 * @return self
 */
/**
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

 * setLoop

 *

 * @since v1.0.5 2026-04-14

 * @param bool $enabled

 * @return self

 */
    public /**
 * setLoop
 *
 * @param bool $enabled
 * @return self
 */
/**
 * setLoop
 *
 * @param bool $enabled
 * @return self
 */
/**
 * setLoop
 *
 * @param bool $enabled
 * @return self
 */
/**
 * setLoop
 *
 * @param bool $enabled
 * @return self
 */
/**
 * setLoop
 *
 * @param bool $enabled
 * @return self
 */
/**
 * setLoop
 *
 * @param bool $enabled
 * @return self
 */
/**
 * setLoop
 *
 * @param bool $enabled
 * @return self
 */
/**
 * setLoop
 *
 * @param bool $enabled
 * @return self
 */
/**
 * setLoop
 *
 * @param bool $enabled
 * @return self
 */
/**
 * setLoop
 *
 * @param bool $enabled
 * @return self
 */
/**
 * setLoop
 *
 * @param bool $enabled
 * @return self
 */
/**
 * setLoop
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $enabled
 * @return self
 */
/**
 * setLoop
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $enabled
 * @return self
 */
/**
 * setLoop
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $enabled
 * @return self
 */
/**
 * setLoop
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $enabled
 * @return self
 */
/**
 * setLoop
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $enabled
 * @return self
 */
/**
 * setLoop
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $enabled
 * @return self
 */
/**
 * setLoop
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $enabled
 * @return self
 */
/**
 * setLoop
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $enabled
 * @return self
 */
/**
 * setLoop
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $enabled
 * @return self
 */
/**
 * setLoop
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $enabled
 * @return self
 */
/**
 * setLoop
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $enabled
 * @return self
 */
/**
 * setLoop
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $enabled
 * @return self
 */
/**
 * setLoop
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $enabled
 * @return self
 */
/**
 * setLoop
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $enabled
 * @return self
 */
/**
 * setLoop
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $enabled
 * @return self
 */
/**
 * setLoop
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $enabled
 * @return self
 */
function setLoop(bool $enabled = true): self
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
    public /**
 * setMuted
 *
 * @param bool $enabled
 * @return self
 */
/**
 * setMuted
 *
 * @param bool $enabled
 * @return self
 */
/**
 * setMuted
 *
 * @param bool $enabled
 * @return self
 */
/**
 * setMuted
 *
 * @param bool $enabled
 * @return self
 */
/**
 * setMuted
 *
 * @param bool $enabled
 * @return self
 */
/**
 * setMuted
 *
 * @param bool $enabled
 * @return self
 */
/**
 * setMuted
 *
 * @param bool $enabled
 * @return self
 */
/**
 * setMuted
 *
 * @param bool $enabled
 * @return self
 */
/**
 * setMuted
 *
 * @param bool $enabled
 * @return self
 */
/**
 * setMuted
 *
 * @param bool $enabled
 * @return self
 */
/**
 * setMuted
 *
 * @param bool $enabled
 * @return self
 */
/**
 * setMuted
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $enabled
 * @return self
 */
/**
 * setMuted
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $enabled
 * @return self
 */
/**
 * setMuted
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $enabled
 * @return self
 */
/**
 * setMuted
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $enabled
 * @return self
 */
/**
 * setMuted
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $enabled
 * @return self
 */
/**
 * setMuted
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $enabled
 * @return self
 */
/**
 * setMuted
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $enabled
 * @return self
 */
/**
 * setMuted
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $enabled
 * @return self
 */
/**
 * setMuted
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $enabled
 * @return self
 */
/**
 * setMuted
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $enabled
 * @return self
 */
/**
 * setMuted
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $enabled
 * @return self
 */
/**
 * setMuted
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $enabled
 * @return self
 */
/**
 * setMuted
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $enabled
 * @return self
 */
/**
 * setMuted
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $enabled
 * @return self
 */
/**
 * setMuted
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $enabled
 * @return self
 */
/**
 * setMuted
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $enabled
 * @return self
 */
function setMuted(bool $enabled = true): self
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
    public /**
 * setPreload
 *
 * @param string $value
 * @return self
 */
/**
 * setPreload
 *
 * @param string $value
 * @return self
 */
/**
 * setPreload
 *
 * @param string $value
 * @return self
 */
/**
 * setPreload
 *
 * @param string $value
 * @return self
 */
/**
 * setPreload
 *
 * @param string $value
 * @return self
 */
/**
 * setPreload
 *
 * @param string $value
 * @return self
 */
/**
 * setPreload
 *
 * @param string $value
 * @return self
 */
/**
 * setPreload
 *
 * @param string $value
 * @return self
 */
/**
 * setPreload
 *
 * @param string $value
 * @return self
 */
/**
 * setPreload
 *
 * @param string $value
 * @return self
 */
/**
 * setPreload
 *
 * @param string $value
 * @return self
 */
/**
 * setPreload
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $value
 * @return self
 */
/**
 * setPreload
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $value
 * @return self
 */
/**
 * setPreload
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $value
 * @return self
 */
/**
 * setPreload
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $value
 * @return self
 */
/**
 * setPreload
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $value
 * @return self
 */
/**
 * setPreload
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $value
 * @return self
 */
/**
 * setPreload
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $value
 * @return self
 */
/**
 * setPreload
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $value
 * @return self
 */
/**
 * setPreload
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $value
 * @return self
 */
/**
 * setPreload
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $value
 * @return self
 */
/**
 * setPreload
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $value
 * @return self
 */
/**
 * setPreload
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $value
 * @return self
 */
/**
 * setPreload
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $value
 * @return self
 */
/**
 * setPreload
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $value
 * @return self
 */
/**
 * setPreload
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $value
 * @return self
 */
/**
 * setPreload
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $value
 * @return self
 */
function setPreload(string $value): self
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
    public /**
 * addSourceElement
 *
 * @param HtmlElementInterface $source
 * @return self
 */
/**
 * addSourceElement
 *
 * @param HtmlElementInterface $source
 * @return self
 */
/**
 * addSourceElement
 *
 * @param HtmlElementInterface $source
 * @return self
 */
/**
 * addSourceElement
 *
 * @param HtmlElementInterface $source
 * @return self
 */
/**
 * addSourceElement
 *
 * @param HtmlElementInterface $source
 * @return self
 */
/**
 * addSourceElement
 *
 * @param HtmlElementInterface $source
 * @return self
 */
/**
 * addSourceElement
 *
 * @param HtmlElementInterface $source
 * @return self
 */
/**
 * addSourceElement
 *
 * @param HtmlElementInterface $source
 * @return self
 */
/**
 * addSourceElement
 *
 * @param HtmlElementInterface $source
 * @return self
 */
/**
 * addSourceElement
 *
 * @param HtmlElementInterface $source
 * @return self
 */
/**
 * addSourceElement
 *
 * @param HtmlElementInterface $source
 * @return self
 */
/**
 * addSourceElement
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $source
 * @return self
 */
/**
 * addSourceElement
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $source
 * @return self
 */
/**
 * addSourceElement
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $source
 * @return self
 */
/**
 * addSourceElement
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $source
 * @return self
 */
/**
 * addSourceElement
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $source
 * @return self
 */
/**
 * addSourceElement
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $source
 * @return self
 */
/**
 * addSourceElement
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $source
 * @return self
 */
/**
 * addSourceElement
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $source
 * @return self
 */
/**
 * addSourceElement
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $source
 * @return self
 */
/**
 * addSourceElement
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $source
 * @return self
 */
/**
 * addSourceElement
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $source
 * @return self
 */
/**
 * addSourceElement
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $source
 * @return self
 */
/**
 * addSourceElement
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $source
 * @return self
 */
/**
 * addSourceElement
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $source
 * @return self
 */
/**
 * addSourceElement
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $source
 * @return self
 */
/**
 * addSourceElement
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $source
 * @return self
 */
function addSourceElement(HtmlElementInterface $source): self
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
    public /**
 * addSourceUrl
 *
 * @param string $src
 * @param string|null $type
 * @return self
 */
/**
 * addSourceUrl
 *
 * @param string $src
 * @param string|null $type
 * @return self
 */
/**
 * addSourceUrl
 *
 * @param string $src
 * @param string|null $type
 * @return self
 */
/**
 * addSourceUrl
 *
 * @param string $src
 * @param string|null $type
 * @return self
 */
/**
 * addSourceUrl
 *
 * @param string $src
 * @param string|null $type
 * @return self
 */
/**
 * addSourceUrl
 *
 * @param string $src
 * @param string|null $type
 * @return self
 */
/**
 * addSourceUrl
 *
 * @param string $src
 * @param string|null $type
 * @return self
 */
/**
 * addSourceUrl
 *
 * @param string $src
 * @param string|null $type
 * @return self
 */
/**
 * addSourceUrl
 *
 * @param string $src
 * @param string|null $type
 * @return self
 */
/**
 * addSourceUrl
 *
 * @param string $src
 * @param string|null $type
 * @return self
 */
/**
 * addSourceUrl
 *
 * @param string $src
 * @param string|null $type
 * @return self
 */
/**
 * addSourceUrl
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $src
 * @param mixed $type
 * @return self
 */
/**
 * addSourceUrl
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $src
 * @param mixed $type
 * @return self
 */
/**
 * addSourceUrl
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $src
 * @param mixed $type
 * @return self
 */
/**
 * addSourceUrl
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $src
 * @param mixed $type
 * @return self
 */
/**
 * addSourceUrl
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $src
 * @param mixed $type
 * @return self
 */
/**
 * addSourceUrl
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $src
 * @param mixed $type
 * @return self
 */
/**
 * addSourceUrl
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $src
 * @param mixed $type
 * @return self
 */
/**
 * addSourceUrl
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $src
 * @param mixed $type
 * @return self
 */
/**
 * addSourceUrl
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $src
 * @param mixed $type
 * @return self
 */
/**
 * addSourceUrl
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $src
 * @param mixed $type
 * @return self
 */
/**
 * addSourceUrl
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $src
 * @param mixed $type
 * @return self
 */
/**
 * addSourceUrl
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $src
 * @param mixed $type
 * @return self
 */
/**
 * addSourceUrl
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $src
 * @param mixed $type
 * @return self
 */
/**
 * addSourceUrl
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $src
 * @param mixed $type
 * @return self
 */
/**
 * addSourceUrl
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $src
 * @param mixed $type
 * @return self
 */
/**
 * addSourceUrl
 *
 * @since v1.0.0 2026-04-14
 * @param mixed $src
 * @param mixed $type
 * @return self
 */
function addSourceUrl(string $src, ?string $type = null): self
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
