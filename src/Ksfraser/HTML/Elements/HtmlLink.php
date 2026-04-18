<?php

namespace Ksfraser\HTML\Elements;

use Ksfraser\HTML\HtmlElement;

use Ksfraser\HTML\HtmlElementInterface;

use Ksfraser\HTML\HtmlAttribute;

/**

 * Links

 *

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * <a href="URL">TEXT</a>

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 *

 * @since v1.0.0 2026-04-11

 * @return void

 */
class HtmlLink extends HtmlElement
{
	/**
	 * HtmlLink: Represents a <link> tag for external resources (CSS, icons, etc.)
	 *
	 * 
	 * 
	 * Generates: <link rel="..." href="...">
	 * 
	 * 
	 *
	 * @since v1.0.0 2026-04-11
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct(new HtmlString(''));
		$this->tag = 'link';
		$this->empty = true; // <link> is self-closing
	}

	/**

	 * Set href attribute

	 *

	 * @since v1.0.0 2026-04-13

	 * @param string $url

	 * @return self

	 */
	public function setHref(string $url): self
	{
		$encodedUrl = htmlspecialchars($url, ENT_QUOTES, 'UTF-8');
		$this->addAttributeObject(new HtmlAttribute('href', $encodedUrl));
		return $this;
	}

	/**

	 * Set rel attribute

	 *

	 * @since v1.0.0 2026-04-13

	 * @param string $rel

	 * @return self

	 */
	public function setRel(string $rel): self
	{
		$this->addAttributeObject(new HtmlAttribute('rel', $rel));
		return $this;
	}

	/**

	 * Set type attribute

	 *

	 * @since v1.0.0 2026-04-13

	 * @param string $type

	 * @return self

	 */
	public function setType(string $type): self
	{
		$this->addAttributeObject(new HtmlAttribute('type', $type));
		return $this;
	}

	/**

	 * Set media attribute

	 *

	 * @since v1.0.0 2026-04-13

	 * @param string $media

	 * @return self

	 */
	public function setMedia(string $media): self
	{
		$this->addAttributeObject(new HtmlAttribute('media', $media));
		return $this;
	}
}
