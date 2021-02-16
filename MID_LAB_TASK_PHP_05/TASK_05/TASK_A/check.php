<?php
    if(isset($_POST['SSC']) || isset($_POST['HSC']) || isset($_POST['BSc']) || isset($_POST['MSc']))
    {
        echo "<b>thank you for submission </b><br>";
        echo "Degrees: ";
        if(isset($_POST['SSC']))
        {
            echo "SSC ";
        }
        if(isset($_POST['HSC']))
        {
            echo "HSC ";
        }
        if(isset($_POST['BSc']))
        {
            echo "BSc ";
        }
        if(isset($_POST['MSc']))
        {
            echo "MSc ";
        }
    }
    else
    {
        echo "<b>unauthoriged access</b>";
    }
?>