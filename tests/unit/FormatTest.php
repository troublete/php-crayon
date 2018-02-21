<?php

use function Crayon\text as crayon;

class FormatTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    public function testBold()
    {
        $text = crayon('text')->bold();
        $this->assertEquals("\e[1mtext\e[0m", (string) $text);
    }

    public function testItalic()
    {
        $text = crayon('text')->italic();
        $this->assertEquals("\e[3mtext\e[0m", (string) $text);
    }

    public function testUnderline()
    {
        $text = crayon('text')->underline();
        $this->assertEquals("\e[4mtext\e[0m", (string) $text);
    }
}
