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
    <title>Date of Birth</title>
</head>
<body>
    <fieldset>
        <legend><b>DATE OF BIRTH</b></legend>
        <form method='POST' action='#'>
            <lable>-----DD--------</lable>
            <lable>MM-------</lable>
            <lable>YYYY----</lable>
            <br>
            <input type='number' name='date'  value=<?php if(isset($_POST['date'])){echo $_POST['date'];}?>>
            <br>
            <input type='number' name='month'  value=<?php if(isset($_POST['month'])){echo $_POST['month'];}?>>
            <br>
            <input type='number' name='year'   value=<?php if(isset($_POST['year'])){echo $_POST['year'];}?>>
            <hr>
            <input type='submit '>
        </form>
    </fieldset>
</body>
</html>