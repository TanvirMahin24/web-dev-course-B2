<?php

$filename = './population.txt';
$lines = [];

$f = fopen($filename, 'r');

if (!$f) {
    return;
}

while (!feof($f)) {
    $lines[] = fgets($f);
}

print_r($lines);

fclose($f);

?>