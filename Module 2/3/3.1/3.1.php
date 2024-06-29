<?php
$month = 12;

if ($month >= 3 && $month <= 5) {
    echo "Весна";
} elseif ($month >= 6 && $month <= 8) {
    echo "Лето";
} elseif ($month >= 9 && $month <= 11) {
    echo "Осень";
} else {
    echo "Зима";
}