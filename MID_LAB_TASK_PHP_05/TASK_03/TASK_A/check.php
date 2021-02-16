<?php
    if(isset($_POST['date']) && isset($_POST['month']) && isset($_POST['year']) )
    {
        echo "<b>thnank you</b><br>";
        echo "Date: ".$_POST['date'];
        echo "<br>Month: ".$_POST['month'];
        echo "<br>Year: ".$_POST['year'];
    }
    else
    {
        echo "<b>un authoriged access</b>";
    }
?>