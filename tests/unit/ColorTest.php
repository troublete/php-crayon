<?php

use function Crayon\text as crayon;

class ColorTest extends \Codeception\Test\Unit
{
	/**
	 * @var \UnitTester
	 */
	protected $tester;

	public function testNone()
	{
		$text = crayon('text');
		$this->assertEquals("text\e[0m", (string) $text);
	}

	public function testRed()
	{
		$text = crayon('text')->red();
		$this->assertEquals("\e[31mtext\e[0m", (string) $text);
	}

	public function testGreen()
	{
		$text = crayon('text')->green();
		$this->assertEquals("\e[32mtext\e[0m", (string) $text);
	}

	public function testYellow()
	{
		$text = crayon('text')->yellow();
		$this->assertEquals("\e[33mtext\e[0m", (string) $text);
	}

	public function testBlue()
	{
		$text = crayon('text')->blue();
		$this->assertEquals("\e[34mtext\e[0m", (string) $text);
	}

	public function testMagenta()
	{
		$text = crayon('text')->magenta();
		$this->assertEquals("\e[35mtext\e[0m", (string) $text);
	}

	public function testCyan()
	{
		$text = crayon('text')->cyan();
		$this->assertEquals("\e[36mtext\e[0m", (string) $text);
	}
}