 
<html>
<head>
  
    <title>DOB</title>
</head>
<body>
    <fieldset>
        <legend><b>DATE OF BIRTH</b></legend>
        <form method='POST' action='./check.php'>
            <lable>-----DD--------</lable>
            <lable>MM-              </lable>
            <lable>YYYY----</lable>
            <br>
            <input type='number' name='date' min='1' max='31'>
            <br>
              <input type='number' name='month' min='1' max='12'>
            
            <input type='number' name='year' min='1950' max='2021'>
            <hr>
            <input type='submit'>
        </form>
    </fieldset>
</body>
</html>