<?php 
    $a = true && false;
    var_dump($a);       // bool(false)

    $b = false && true;
    var_dump($b);       // bool(false)

    $c = true && true;
    var_dump($c);       // bool(true)

    $d = false && false;
    var_dump($d);       // bool(false)

    $a = true || false;
    var_dump($a);       // bool(true)

    $b = false || true;
    var_dump($b);       // bool(true)

    $c = true || true;
    var_dump($c);       // bool(true)

    $d = false || false;
    var_dump($d);       // bool(false)
    
    
    // Leap years are divisible by 400 or by 4 but not 100 
    $year = 2014;

	if(($year % 400 == 0) || (($year % 100 != 0) && ($year % 4 == 0))){ 		echo "$year is a leap year."; 
	} 
	else { 
		echo "$year is not a leap year."; 
	} 
?>
