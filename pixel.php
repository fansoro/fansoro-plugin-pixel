<?php

/**
 * Fansoro Pixel Plugin
 *
 * (c) Romanenko Sergey / Awilum <http://fansoro.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */


// Usage in content: {pixel}
Shortcode::add('pixel', 'pixel');

function pixel($attributes)
{

    // Extract attributes
    extract($attributes);

    (isset($gray) && $gray == 'true') and $gray = 'g/' or $gray   = '';
    (isset($width))    and $width    = $width.'/'    or $width    = Config::get('plugins.pixel.width').'/';
    (isset($height))   and $height   = $height.'/'   or $height   = Config::get('plugins.pixel.height').'/';
    (isset($category)) and $category = $category.'/' or $category = Config::get('plugins.pixel.category').'/';
    (isset($text))     and $text     = $text.'/'     or $text = '';

    return rtrim('http://lorempixel.com/'.$gray.$width.$height.$category.$text, '/\\');
}
