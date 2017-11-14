<?php
/**
 * Created by PhpStorm.
 * User: ignas
 * Date: 17.11.14
 * Time: 13.57
 */

namespace AppBundle\Service;

class NumberFormatter
{
    public function convert(float $number) : string
    {
        if ($number >= 999500 || $number <=-999500) {
            $number = $number / 1000000;
            $number = round($number, 2);
            return (string)$number.'M';
        }
        if ($number >= 99950 || $number <=-99950) {
            $number = $number / 1000;
            $number = round($number);
            return (string)$number.'K';
        }
        if ($number >= 1000 || $number <=-1000) {
            return number_format($number, 0, '.', ' ');
        }
        $number = round($number, 2);
        return (string)$number;
    }
}