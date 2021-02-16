<?php
    if(isset($_POST['date']) && isset($_POST['month']) && isset($_POST['year']) )
    {
        echo "<b>Successfully Submitted!</b><br>";
        echo "Date: ".$_POST['date'];
        echo "<br>Month: ".$_POST['month'];
        echo "<br>Year: ".$_POST['year'];
    }
?>
 <html>
<head>
     
    <title>DOB</title>
</head>
<body>
    <fieldset>
        <legend><b>DATE OF BIRTH</b></legend>
        <form method='POST' action='#'>
            <lable>-----DD--------</lable>
            <lable>MM-------</lable>
            <lable>YYYY----</lable>
            <br>
            <input type='number' name='date'>
            
            <input type='number' name='month' >
            
            <input type='number' name='year' >
            <hr>
            <input type='submit'>
        </form>
    </fieldset>
</body>
</html>