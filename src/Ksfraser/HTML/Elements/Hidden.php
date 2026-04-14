<?php

namespace Ksfraser\HTML\Elements;

/**

 * Hidden - Convenience Class for Hidden Input Fields

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

 * Shorter, cleaner alternative to Input()->setType('hidden').

 * 

 * 

 * 

 * Provides semantic, dedicated class for hidden form fields.

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * This is essentially an alias/convenience wrapper extending HtmlHidden,

 * 

 * 

 * 

 * providing the same functionality with optional shorter naming.

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

 * ```php

 * 

 * 

 * 

 * use Ksfraser\HTML\Elements\Hidden;

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * // Using the shorter alias

 * 

 * 

 * 

 * $hidden = (new Hidden())->setName('csrf_token')->setValue($token);

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * // Fluent interface

 * 

 * 

 * 

 * $id = (new Hidden('record_id', '123'))

 * 

 * 

 * 

 *     ->setId('form_record_id');

 * 

 * 

 * 

 * ```

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

 * @since 1.0.1 2026-02-16

 * @package Ksfraser\HTML

 * @author Kevin Fraser

 * @version 1.0.0

 * @example 

 * @return void

 */
class Hidden extends HtmlHidden
{
    // Inherits all functionality from HtmlHidden
    // Provides semantic, dedicated class for hidden fields
}
