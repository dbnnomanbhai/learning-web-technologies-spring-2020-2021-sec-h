<?php
    $value1 = 23;
    $value2 = 39;
    $value3 = 9;

    if($value1 > $value2 && $value1 > $value3)
    {
        echo $value1.' is the largest value';
    }
    elseif($value2 > $value1 && $value2 > $value3)
    {
        echo $value2.' is the largest value';
    }
    elseif($value3 > $value1 && $value3 > $value1)
    {
        echo $value3.' is the largest value';
    }
	
	 $value = 101;

    if($value%2==0)
    {
        echo $value.' is even';
    }
    else
    {
        echo $value.' is odd';
    }
?>