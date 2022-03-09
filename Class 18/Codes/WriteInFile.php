<?php
    $filename = './population.txt';

    $txt = "\nNew line\n";

    $current  = file_get_contents($filename);
    $current .= $txt;

    file_put_contents($filename, $current);
    
?>