<?php
    if(isset($_POST['SSC']) || isset($_POST['HSC']) || isset($_POST['BSc']) || isset($_POST['MSc']))
    {
        echo "<b> thank you for submit!</b><br>";
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
?>

 <html>
<head>
   
    <title>Degree</title>
</head>
<body>
    <fieldset>
        <legend><b>Degree</b></legend>
        <form method='POST' action='#'>
            <input type='checkbox' name='SSC' value='SSC'>SSC
            <input type='checkbox' name='HSC' value='HSC'>HSC
            <input type='checkbox' name='BSc' value='BSc'>BSc
            <input type='checkbox' name='MSc' value='MSc'>MSc
            <hr>
            <input type='submit'>
        </form>
    </fieldset>
</body>
</html>