<?php

namespace Ksfraser\HTML\Elements;

use Ksfraser\HTML\Elements\HtmlA;

/**

 * HtmlEmail: Anchor tag wrapper for email links

 *

 * <a href="mailto:...">...</a>

 * 

 *

 * @since v1.0.0 2026-04-11

 */
class HtmlEmail extends HtmlA
{
    /**
     * __construct
     *
     * @since v1.0.0 2026-04-13
     * @return void
     */
    public function __construct()
    {
        parent::__construct(new \Ksfraser\HTML\Elements\HtmlString(''));
    }
    /**
     * Set the email address and link text
     *
     * Stores the address as HtmlString for templating/recursion
     *
     * @since v1.0.0 2026-04-11
     * @param string $email
     * @param ?string $text
     * @return self
     */
    public function setAddress(string $email, ?string $text = null): self
    {
        $this->setHref($email);
        $this->setContent(new \Ksfraser\HTML\Elements\HtmlString($text ?? $email));
        return $this;
    }

    /**

     * Set href attribute for email link

     *

     * Ensures mailto: is prepended

     *

     * @since v1.0.0 2026-04-11

     * @param string $email

     * @return self

     */
    public function setHref(string $email): self
    {
        $mailto = (stripos($email, 'mailto:') === 0) ? $email : 'mailto:' . $email;
        return parent::setHref($mailto);
    }
    // Optionally validate email address
}
