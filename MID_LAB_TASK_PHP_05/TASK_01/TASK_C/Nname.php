<?php
    if(isset($_POST['name']))
    {
        echo "<b> thank you for submit</b><br>";
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
        <form method='POST' action='#'>
            <input type='text' name="name" value=<?php if(isset($_POST['name'])){echo $_POST['name'];}?>>
            <hr>
            <input type='submit'>
        </form>
    </fieldset>
</body>
</html>