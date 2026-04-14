<?php

namespace Ksfraser\HTML\Elements;

use Ksfraser\HTML\HtmlElementInterface;

/**

 * HtmlOB - HTML Output Buffer Wrapper

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

 * Captures echoed output from legacy methods and wraps it as HtmlElementInterface.

 * 

 * 

 * 

 * Extends HtmlRaw to avoid HTML entity escaping.

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * Usage:

 * 

 * 

 * 

 * ```php

 * 

 * 

 * 

 * // Constructor with callback

 * 

 * 

 * 

 * $html = new HtmlOB(function() {

 * 

 * 

 * 

 *     $this->displaySomethingThatEchoes();

 * 

 * 

 * 

 * });

 * 

 * 

 * 

 * echo $html->getHtml();

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * // Or static capture method

 * 

 * 

 * 

 * $html = HtmlOB::capture(function() {

 * 

 * 

 * 

 *     $this->displaySomethingThatEchoes();

 * 

 * 

 * 

 * });

 * 

 * 

 * 

 * echo $html->getHtml();

 * 

 * 

 * 

 * 

 * 

 * 

 * 

 * // Or manual start/end

 * 

 * 

 * 

 * $ob = new HtmlOB();

 * 

 * 

 * 

 * $ob->start();

 * 

 * 

 * 

 * $this->displaySomethingThatEchoes();

 * 

 * 

 * 

 * $ob->end();

 * 

 * 

 * 

 * echo $ob->getHtml();

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

 * @since v1.0.0 2026-04-11

 * @package HTML

 * @return void

 */
class HtmlOB extends HtmlRaw
{
	/**
	 * Create an HtmlOB instance by capturing output from a callable
	 *
	 * @since v1.0.0 2026-04-11
	 * @param callable $callback The function that echoes HTML
	 * @return HtmlOB Instance containing the captured output
	 */
	public static function capture(callable $callback): HtmlOB
	{
		return new self($callback);
	}
	
	/**
	
	 * Constructor - captures output from callable or accepts pre-captured string
	
	 *
	
	 * @since v1.0.5 2026-04-14
	
	 * @param mixed $input
	
	 * @return void
	
	 */
public function __construct($input = null)
	{
		if (is_callable($input)) {
			// Capture output from callable
			ob_start();
			$input();
			$captured = ob_get_clean();
			parent::__construct($captured);
		} elseif (is_string($input)) {
			// Use pre-captured string
			parent::__construct($input);
		} else {
			// Empty initialization for manual start/end usage
			parent::__construct('');
		}
	}
	
	/**
	
	 * Start output buffering
	
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
	
	 * Call this, then do your echoes, then call end()
	
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
	
	 * @since v1.0.0 2026-04-13
	
	 * @return void
	
	 */
	public function start(): void
	{
		ob_start();
	}
	
	/**
	
	 * End output buffering and capture the output
	
	 *
	
	 * @since v1.0.0 2026-04-13
	
	 * @return string The captured HTML
	
	 */
	public function end(): string
	{
		$this->html = ob_get_clean();
		return $this->html;
	}
}

