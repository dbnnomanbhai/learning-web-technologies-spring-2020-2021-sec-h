<?php
    if(isset($_POST['name']))
    {
        echo "thank you for submission</b><br>";
        echo "Name: ".$_POST['name'];
    }
?>

<html>
 
<head> 
    <title>Name</title>
</head>
<body>
    <fieldset>
        <legend><b>Name</b></legend>
        <form method='POST' action=''>
            <input type='text' name='name'>
            <hr>
            <input type='submit'>
        </form>
    </fieldset>
</body>
</html>