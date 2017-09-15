<?php
namespace Crayon;

/**
 * function to initialize a new text render
 * @param string $text
 * @return Font
 */
function text(string $text): Font {
	return new Font($text);
}