<?php

use Illuminate\Support\Facades\Route;

if (!function_exists('set_active')) {
    function set_active($uri, $output = 'active')
    {
        if (is_array($uri)) {
            foreach ($uri as $u) {
                if (Route::is($u)) {
                    return $output;
                }
            }
        } else {
            if (Route::is($uri)) {
                return $output;
            }
        }
    }
}
if (!function_exists('set_active_page')) {
    function set_active_page($uri, $output = 'active-page')
    {
        if (is_array($uri)) {
            foreach ($uri as $u) {
                if (Route::is($u)) {
                    return $output;
                }
            }
        } else {
            if (Route::is($uri)) {
                return $output;
            }
        }
    }
}

function cutText($string, $limit)
{
    $string = strip_tags($string);
    if (strlen($string) > $limit) {

        // truncate string
        $stringCut = substr($string, 0, $limit);
        $endPoint = strrpos($stringCut, ' ');

        //if the string doesn't contain any space then it will cut without word basis.
        $string = $endPoint ? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
        $string .= '...';
    }
    echo $string;
}


/**
 * Convert number to roman
 *
 * @param int $integer name
 *
 * @return string
 */
function integerToRoman($integer)
{
    $integer = intval($integer);
    $result = '';

    // Create a lookup array that contains all of the Roman numerals.
    $lookup = ['M' => 1000, 'CM' => 900, 'D' => 500, 'CD' => 400, 'C' => 100, 'XC' => 90, 'L' => 50, 'XL' => 40, 'X' => 10, 'IX' => 9, 'V' => 5, 'IV' => 4, 'I' => 1];

    foreach ($lookup as $roman => $value) {
        $matches = intval($integer / $value);
        $result .= str_repeat($roman, $matches);
        $integer = $integer % $value;
    }

    return $result;
}

/**
 * Apply price format to number
 *
 * @param double $number   number
 * @param string $currency format
 *
 * @return string
 */
function priceFormat($number, $currency = '')
{
    $currency = !empty($currency) ? $currency . ' ' : '';
    return $currency . number_format($number, 0, ",", ".");
}

/**
 * Apply date format to datetime
 *
 * @param string $datetime datetime
 * @param string $format   format
 *
 * @return string
 */
function datetimeFormat($datetime, $format = 'd M Y H:i:s')
{
    if (!empty($datetime)) {
        return date($format, strtotime($datetime));
    } else {
        return '';
    }
}
