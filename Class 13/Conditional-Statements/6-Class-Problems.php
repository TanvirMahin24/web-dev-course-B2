<?php

    # Given 2 numbers find the greatest
    $num1 = 20;
    $num2 = 31;

    if($num1 > $num2)
    {
        echo "$num1 is greatest\n";
    }
    else
    {
        echo "$num2 is greatest\n";
    }


    # Give a number check it is odd or even
    $num3 = (int) readline("Enter a number: ");

    if($num3 % 2 == 0)
    {
        echo "$num3 is even\n";
    }
    else
    {
        echo "$num3 is odd\n";
    }


    # Give 3 numbers find the greatest
    $num4 = 10;
    $num5 = 14;
    $num6 = 1;

    if($num4 > $num5)
    {
        if($num4 > $num6)
        {
            echo "$num4 is greatest" ;
        }
        else
        {
            echo "$num6 is greatest" ;
        }
    }
    else
    {
        if($num5 > $num6)
        {
            echo "$num5 is greatest" ;
        }
        else
        {
            echo "$num6 is greatest" ;
        }
    }

?>