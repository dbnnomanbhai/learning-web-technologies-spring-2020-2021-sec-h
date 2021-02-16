<?php
    if(isset($_POST['gender']) )
    {
        echo "<b>thank you for submission</b><br>";
        echo "Gender: ".$_POST['gender'];
    }
?>
 <html>
<head> 
    <title>Gender</title>
</head>
<body>
    <fieldset>
        <legend><b>GENDER</b></legend>
        <form method='POST' action='#'>
            <input type='radio' name='gender' value='Male'>Male
            <input type='radio' name='gender' value='Female'>Female
            <input type='radio' name='gender' value='Others'>Others
            <hr>
            <input type='submit'>
        </form>
    </fieldset>
</body>
</html>