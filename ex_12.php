<?php



$studen = [
    "Alice" => "14",
    "Bob" => "9",
    "Eva" => "18",
];

foreach ($studen as $name => $value) {
    if ($value >= 10) {
        echo $name . "\n";
    }
}