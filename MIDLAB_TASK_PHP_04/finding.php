<?php
    $countries = array('Australia', 'Bangladesh', 'China', 'india', 'saudi-arab');
    $searchItem = 'Bangladesh';

    foreach($countries as $country)
    {
        if($country === $searchItem)
        {
            echo $country." is valid in the array";break;
        }
    }
?>