<?php
    if(isset($_POST['email']))
    {
        echo "<b>thank you for submission</b><br>";
        echo "Email: ".$_POST['email'];
    }
?>

 
<html>
<head>
  
    <title>Email</title>
</head>
<body>
    <fieldset>
        <legend><b>Email</b></legend>
        <form method='POST' action='#'>
            <input type='email' name='email'>
            <br>
            <input type='submit'>
        </form>
    </fieldset>
</body>
</html>