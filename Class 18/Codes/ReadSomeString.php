<?php

$filename = './population.txt';
$f = fopen($filename, 'r');
if ($f) {
    $contents = fread($f, 100);
    fclose($f);
    echo nl2br($contents);
}
?>