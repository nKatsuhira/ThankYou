<?php

header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");

$ThankYou = [
    [
        "bruh" => [
            "color" => "Grey",
            "text_size" => 16,
            "members" => [
                "test1",
                "test2",
                "hurensohnvonnebenan"
            ]
        ]

    ]
];

echo json_encode($ThankYou, JSON_PRETTY_PRINT);