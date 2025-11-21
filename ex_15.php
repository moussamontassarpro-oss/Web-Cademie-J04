<?php

$day = [
    "monday" => "math, french.",
    "tuesday" => "english, history.",
    "wednesday" => "french, spanish, sciences",
    "friday" => "philosophy, match",
];

    foreach ($day as $key => $value) {
        echo $key . " : " . $value . "\n";
    }