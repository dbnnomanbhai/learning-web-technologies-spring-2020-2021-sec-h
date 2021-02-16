<?php
    $numbers = array("1","2","3","4","5");
    $alphabet = array("A", "B","C","D","E","F");

    echo "Shape 1:\n";
    for($i = 0; $i<5; $i++)
    {
        for($j = 0; $j < $i+1; $j++)
        {
            echo "*";
        }
        echo "\n";
    }

    echo "\nShape :\n";
    for($i = count($numbers); $i>=0; $i--)
    {
        for($j = 0; $j < $i; $j++)
        {
            echo $numbers[$j];
        }
        echo "\n";
    }

    echo "Shape 3:\n";
    $counter = 0;
    for($i = 0; $i<5; $i++)
    {
        for($j = 0; $j <= $i; $j++)
        {
            echo $alphabet[$counter];
            $counter=$counter+1;
        }
        echo "\n";
    }
?>