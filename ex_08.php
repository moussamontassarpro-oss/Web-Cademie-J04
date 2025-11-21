<?php

    $person = [

        "surname" => "Dupont",
        "name" => "Sophie",
        "age" => "27",
    ];

    foreach ($person as $key => $value){

        echo $key . " : " . $value . "\n";
    }