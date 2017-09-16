<?php
require_once __DIR__ . '/../vendor/autoload.php';

use function Crayon\text as crayon;

echo crayon('normal') . "\n";
echo crayon('bold')->bold() . "\n";
echo crayon('italic')->italic() . "\n";
echo crayon('underline')->underline() . "\n";
echo crayon('color')->green() . "\n";
echo crayon('combinations')->green()->bold()->underline() . "\n";
echo crayon('combinations')->green()->bold()->underline()->background() . "\n";