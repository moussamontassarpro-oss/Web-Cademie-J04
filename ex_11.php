<?php

$alpha = [];

for ($i = 0; $i < 26; $i++) {
    $lettre = chr(97 + $i);
    $alpha[] = $lettre;
}

var_dump($alpha);