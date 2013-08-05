<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * CodeIgniter Image Placeholder Helper
 *
 * This will add a placeholder image of specified size for quickly filling your
 * page in design phase.
 *
 */

/**
 * Generates a generic placeholder image
 *
 * @param   integer width
 * @param   integer height
 * @param   string  text
 * @param   string  background color
 * @param   string  foreground color
 * @return  string  HTML
 */
if(!function_exists('img_placeholder')) {
    function img_placeholder($width = 100, $height = 100, $text = NULL, $background = 'CCCCCC', $foreground = '969696')
    {
        if (is_null($text) || empty($text)) $text = "$width x $height";
        return '<img src="http://placehold.it/'. $width . 'x'. $height . '/' . $background . '/' . $foreground . '&text='. $text . '" alt="Placeholder">';
    }
}

