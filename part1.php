<?php

$input = file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . 'input.txt');
$partners = explode(PHP_EOL, $input);
$matches = 0;

foreach ($partners as $partner) {
    $elves = explode(',', $partner);
    $firstElfRange = explode('-', $elves[0]);
    $firstElfElements = range($firstElfRange[0], $firstElfRange[1]);
    $secondElfRange = explode('-', $elves[1]);
    $secondElfElements = range($secondElfRange[0], $secondElfRange[1]);

    if (!array_diff($firstElfElements, $secondElfElements) || !array_diff($secondElfElements, $firstElfElements)) {
        $matches++;
    }
}

echo $matches;
