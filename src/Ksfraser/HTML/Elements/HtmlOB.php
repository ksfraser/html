<?php

namespace Ksfraser\HTML\Elements;

use Ksfraser\HTML\HtmlElementInterface;

/**
 * HtmlOB - HTML Output Buffer Wrapper
 *
 * Captures echoed output from legacy methods and wraps it as HtmlElementInterface.
 * Extends HtmlRaw to avoid HTML entity escaping.
 *
 * Usage:
 * ```php
 * // Constructor with callback
 * $html = new HtmlOB(function() {
 *     $this->displaySomethingThatEchoes();
 * });
 * echo $html->getHtml();
 *
 * // Or static capture method
 * $html = HtmlOB::capture(function() {
 *     $this->displaySomethingThatEchoes();
 * });
 * echo $html->getHtml();
 *
 * // Or manual start/end
 * $ob = new HtmlOB();
 * $ob->start();
 * $this->displaySomethingThatEchoes();
 * $ob->end();
 * echo $ob->getHtml();
 * ```
 *
 *
 * @package HTML
 * @since v1.0.0 2026-04-11
 */
class HtmlOB extends HtmlRaw
{
	/**
	 * Create an HtmlOB instance by capturing output from a callable
	 * 
	 * @param callable $callback The function that echoes HTML
	 * @return HtmlOB Instance containing the captured output
 * @since v1.0.0 2026-04-11
	 */
	public static function capture(callable $callback): HtmlOB
	{
		return new self($callback);
	}
	
	/**
	 * Constructor - captures output from callable or accepts pre-captured string
	 * 
 * @param mixed $input
 * @return void
 * @since v1.0.5 2026-04-14
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
	 * Call this, then do your echoes, then call end()
	 * 
	 * @return void
 * @since v1.0.0 2026-04-13
	 */
	public function start(): void
	{
		ob_start();
	}
	
	/**
	 * End output buffering and capture the output
	 * 
	 * @return string The captured HTML
 * @since v1.0.0 2026-04-13
	 */
	public function end(): string
	{
		$this->html = ob_get_clean();
		return $this->html;
	}
}

