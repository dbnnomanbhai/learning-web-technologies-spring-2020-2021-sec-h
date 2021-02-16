  
<?php
    if(isset($_POST['blood']))
    {
        if($_POST['blood'] != "null")
        {
            echo "<b> thank you for submit</b><br>";
            echo "Blood Group: ".$_POST['blood'];
        }
        else
        {
            echo"<b>Please select an option!</b><br>";
        }
    }
    else
    {
        echo "<b>un authoriged access</b>";
    }
?>