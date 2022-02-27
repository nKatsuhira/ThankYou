<?php

header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");

$ThankYou = [
    [
        "bruh" => "bruh2",
        "fuck" => "fucj3"
    ]
];

echo json_encode($ThankYou, JSON_PRETTY_PRINT);