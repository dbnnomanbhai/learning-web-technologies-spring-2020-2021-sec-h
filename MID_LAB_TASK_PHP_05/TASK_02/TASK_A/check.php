<?php
    if(isset($_POST['email']))
    {
        echo "<b> thank you for submission </b><br>";
        echo "Email: ".$_POST['email'];
    }
    else
    {
        echo "<b>un authoriged person</b>";
    }
?>