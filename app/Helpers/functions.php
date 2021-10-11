<?php

if (!function_exists('calculate')) {

    function calculate($cf,$sum)
    {
        $percent = 100;
        $totalcfSum = ($sum * $cf);

        return ($totalcfSum - $sum);
    }
}
