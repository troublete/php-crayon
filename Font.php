<?php
namespace Crayon;

use const Crayon\{RED, GREEN, BLUE, YELLOW, MAGENTA, CYAN};

/**
 * Class Font
 *
 * A string representation class which contains all formatting information
 * that'll be used when rendering the string.
 *
 * @package Crayon
 */
class Font
{
	/**
	 * @var string
	 */
	const BOLD = "\e[1m";

	/**
	 * @var string
	 */
	const ITALIC = "\e[3m";

	/**
	 * @var string
	 */
	const UNDERLINE = "\e[4m";

	/**
	 * @var string
	 */
	const RESET = "\e[0m";

	/**
	 * the text to be formatted
	 * @var string|null
	 */
	private $text;

	/**
	 * boolean value to indicate if the text shall be rendered bold
	 * @var bool
	 */
	private $bold = false;

	/**
	 * boolean value to indicate if the text shall be rendered italic
	 * @var bool
	 */
	private $italic = false;

	/**
	 * boolean value to indicate if the text shall be rendered underlined
	 * @var bool
	 */
	private $underline = false;

	/**
	 * may contain the color format string if available
	 * @var string|null
	 */
	private $color;

	/**
	 * Font constructor.
	 * @param string $text
	 */
	public function __construct(string $text)
	{
		$this->text = $text;
	}

	/**
	 * function to set text bold
	 * @return Font
	 */
	public function bold(): Font
	{
		$this->bold = true;
		return $this;
	}

	/**
	 * function to set text italic
	 * @return Font
	 */
	public function italic(): Font
	{
		$this->italic = true;
		return $this;
	}

	/**
	 * function to set text underlined
	 * @return Font
	 */
	public function underline(): Font
	{
		$this->underline = true;
		return $this;
	}

	/**
	 * function to color the text red
	 * @return Font
	 */
	public function red(): Font
	{
		return $this->color(RED);
	}

	/**
	 * function to color the text green
	 * @return Font
	 */
	public function green(): Font
	{
		return $this->color(GREEN);
	}

	/**
	 * function to color the text yellow
	 * @return Font
	 */
	public function yellow(): Font
	{
		return $this->color(YELLOW);
	}

	/**
	 * function to color the text blue
	 * @return Font
	 */
	public function blue(): Font
	{
		return $this->color(BLUE);
	}

	/**
	 * function to color the magenta
	 * @return Font
	 */
	public function magenta(): Font
	{
		return $this->color(MAGENTA);
	}

	/**
	 * function to color the text cyan
	 * @return Font
	 */
	public function cyan(): Font
	{
		return $this->color(CYAN);
	}

	/**
	 * function to prepare and render the text with set font options
	 * @return string
	 */
	public function __toString()
	{
		$reset = self::RESET;
		
		$color = $this->color ?? '';
		$bold = $this->bold ? self::BOLD : '';
		$italic = $this->italic ? self::ITALIC : '';
	 	$underline = $this->underline ? self::UNDERLINE : '';

		return "{$color}{$bold}{$italic}{$underline}{$this->text}{$reset}";
	}

	/**
	 * function to set color to a string
	 * @param string $color
	 * @return Font
	 */
	private function color(string $color): Font
	{
		$this->color = $color;
		return $this;
	}
}