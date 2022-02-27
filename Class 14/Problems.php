<?php

    $n = (int) readline("Enter n: ");

    # Sum from 1 to n
    $sum = 0;
    for($i=1; $i<=$n; $i++)
    {
        $sum += $i;
    }
    echo "Summation: $sum\n";
    
    
    #factorial
    $fact = 1;
    for($i=1; $i<=$n; $i++)
    {
        $fact *= $i;
    }
    echo "Factorial: $fact\n";


    
    # 1*1 + 2*2 + 3*3 + ...... + n*n
    $mulsum = 0;
    for($i=1; $i<=$n; $i++)
    {
        $mulsum += $i * $i;
    }
    echo "Summation of series-1: $mulsum\n";



    # (1) + (1+2) + (1+2+3) + (1+2+3+4) + .....
    # O(n^2) approach
    $sum2 = 0;
    for($i=1; $i<=$n; $i++)
    {
        $tempSum = 0;
        for($j=1; $j<=$i; $j++)
        {
            $tempSum += $j;
        }
        $sum2 += $tempSum;
    }
    echo "Summation of series-2 using O(n^2) approach: $sum2\n";

    # O(n) approach
    $sum2 = 0;
    $prevSum2 = 0;

    for($i=1; $i<=$n; $i++)
    {
        $sum2 += $prevSum2 + $i;
        $prevSum2 += $i;
    }
    echo "Summation of series-2 using O(n) approach: $sum2\n";
?>