<?php

// Inputs
$n = 1;
$s = '1B 1C';// '1A 2F 1C';

$result = getAvailableSeats($n, $s);

echo $result;

//n - number of rows, s- reserved seats
function getAvailableSeats($n, $s)
{

    $reservedSeats = explode(' ', $s);

    $available = 0;

    for ($i = 1; $i <= $n; $i++) {

        $flag = true;

        $seatsCombo1        = ["{$i}B", "{$i}C", "{$i}D", "{$i}E"];

        $seatsCombo2        = ["{$i}F", "{$i}G", "{$i}H", "{$i}J"];

        $middleSeatsCombo   = ["{$i}D", "{$i}E", "{$i}F", "{$i}G"];

        if (!count(array_intersect($seatsCombo1, $reservedSeats))) {
            $flag = false;
            $available++;
        }

        if (!count(array_intersect($seatsCombo2, $reservedSeats))) {
            $flag = false;
            $available++;
        }

        if (!count(array_intersect($middleSeatsCombo, $reservedSeats)) && $flag) {
            $available++;
        }
    }

    return $available;
}

