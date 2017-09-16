<?php

use function Crayon\{success, error, text as crayon};

class CombinationTest extends \Codeception\Test\Unit
{
	/**
	 * @var \UnitTester
	 */
	protected $tester;

	public function testColorAndBold()
	{
		$text = crayon('text')->red()->bold();
		$this->assertEquals("\e[31m\e[1mtext\e[0m", (string) $text);
	}

	public function testColorAndItalicAndBold()
	{
		$text = crayon('text')->red()->italic()->bold();
		$this->assertEquals("\e[31m\e[1m\e[3mtext\e[0m", (string) $text);
	}

	public function testColorAndItalicAndUnderlineAndBold()
	{
		$text = crayon('text')->red()->italic()->bold()->underline();
		$this->assertEquals("\e[31m\e[1m\e[3m\e[4mtext\e[0m", (string) $text);
	}

	public function testError()
	{
		$text = error('text');
		$this->assertEquals("\e[31m\e[1m\e[4mtext 𝙭\e[0m", (string) $text);
	}

	public function testSuccess()
	{
		$text = success('text');
		$this->assertEquals("\e[32m\e[1mtext ✔\e[0m", (string) $text);
	}
}