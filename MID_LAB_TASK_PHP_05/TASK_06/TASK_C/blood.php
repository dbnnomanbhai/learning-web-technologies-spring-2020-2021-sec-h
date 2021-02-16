<?php
    if(isset($_POST['blood']))
    {
        if($_POST['blood'] != "null")
        {
            echo "<b> thank you for submit!</b><br>";
            echo "Blood Group: ".$_POST['blood'];
        }
        else
        {
            echo"<b>Please select an option!</b><br>";
        }
        
    }
?>

 <html>
<head>
 
    <title>Blood Group</title>
</head>
<body>
    <fieldset>
        <legend><b>BLOOD GROUP</b></legend>
        <form method='POST' action='#'>
            <select name='blood'>
                <option value='null'>Choose an option</option>
                <option value="AB+" <?php if(isset($_POST['blood'])){if($_POST['blood']=='AB+'){echo "selected";}}?>>AB+</option>
                <option value="AB-" <?php if(isset($_POST['blood'])){if($_POST['blood']=='AB-'){echo "selected";}}?>>AB-</option>
              
                <option value="B+" <?php if(isset($_POST['blood'])){if($_POST['blood']=='B+'){echo "selected";}}?>>B+</option>
               
                <option value="O+">O+</option>
                <option value="O-">O-</option>
            </select>
            <hr>
            <input type='submit'>
        </form>
    </fieldset>
</body>
</html>