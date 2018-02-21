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

/**
 * function to initialize a new success text render
 * @param string $text
 * @return Font
 */
function success(string $text): Font {
    return text("$text ✔")->green()->bold();
}

/**
 * function to initialize a new error text render
 * @param string $text
 * @return Font
 */
function error(string $text): Font {
    return text("$text 𝙭")->red()->bold()->underline();
}
