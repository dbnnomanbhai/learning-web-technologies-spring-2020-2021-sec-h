<?php
    if(isset($_POST['gender']) )
    {
        echo "<b>thank you for submission</b><br>";
        echo "Gender: ".$_POST['gender'];
    }
    else
    {
        echo " unauthoriged access</b>";
    }
?>