<?php
function isLeapYear($year) {

    return (($year % 4 == 0) && ($year % 100 != 0)) || ($year % 400 == 0);
}

$year = 2021;
if (isLeapYear($year)) {
    echo "$year год - високосный.";
} else {
    echo "$year год - не високосный.";
}