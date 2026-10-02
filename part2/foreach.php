<?php

// foreach
$collage = ["UGM", "UCLA", "KAIST", "MIT"];

$students = [
    ["name" => "Alex",    "major" => "Psychology"],
    ["name" => "Baron",   "major" => "Chemistry"],
    ["name" => "Christy", "major" => "Computer Science"],
    ["name" => "Deby",    "major" => "Business Management"],
];

foreach ($collage as $c) {
    echo "- $c\n";
}

foreach ($students as $s) {
    echo $s["name"] . ": " . $s["major"] . "\n";
}