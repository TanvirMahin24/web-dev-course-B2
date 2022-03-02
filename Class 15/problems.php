<?php

    $numbers = array(13, 50, 70, 58, 29, 10);

    // SIZE OF ARRAY
    $size = count($numbers);
    echo "$size\n\n";


    // PRINT THE ARRAY
    for($i=0; $i<$size; $i++)
    {
        echo "vaule is $numbers[$i]\n";
    }
    echo "\n\n";


    // FIND MAXIMNUM
    $maximum = $numbers[0];
    $index = 0;
    for($i=1; $i<$size; $i++)
    {
        if($numbers[$i] > $maximum)
        {
            $maximum = $numbers[$i];
            $index = $i;
        }
    }
    echo "Max: $maximum found at $index\n\n";


    // FIND MINIMUM
    $mini = $numbers[0];
    for($i=1; $i<$size; $i++)
    {
        if($numbers[$i] < $mini)
        {
            $mini = $numbers[$i];
        }
    }
    echo "Mini: $mini\n\n";



    // SUMMATION OF ALL VALUE
    $sum = 0;
    for($i=0; $i<$size; $i++)
    {
        $sum += $numbers[$i];
    }
    echo "Sum of this array: $sum\n\n";


    /* 
        $n = array(1, 2, 3, 4)
        count($n) = 4;

        $n = array(
            array(1,2,3,4),
            array(5,6,7,8),
        )

        count($n) = 2
        count($n[0]) = 4
    
    */


    // FIND NUMBER OF EVEN AND ODD
    $even = 0;
    $odd = 0;
    for($i=0; $i<$size; $i++)
    {
        if($numbers[$i] % 2 == 0)
            $even++;
        else
            $odd++;
    }
    echo "Number of even is: $even\n";
    echo "Number of odd is: $odd\n\n";


    // take array size (n) as input
    $n = readline("Enter size of array: ");
    // Declare empty array
    $num = [];
    // take number and store then in array
    for($i=0; $i<$n; $i++)
        $num[$i] = (int) readline("Enter a value: ");
    
    echo "\n\n";
    $m = readline("Enter a number: ");

    $count = 0;
    $index = -1;
    
    for($i=0; $i<$n; $i++)
    {
        if($num[$i] == $m)
        {
            $count++;
            if($index == -1)
            {
                $index = $i;
            }
        }
    }

    if($index == -1)
    {
        echo "$m is not found.\n";
    }
    else
    {
        echo "$m is found $count times.\n";
        echo "$m is found first at $index\n";
    }


?>