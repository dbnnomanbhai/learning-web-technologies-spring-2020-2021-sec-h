<?php
    if(isset($_FILES['image']))
    {
        if($_FILES['image']['type']== 'image/jpeg' || $_FILES['image']['type'] == 'image/jpg' ||$_FILES['image']['type'] == 'image/png')
        {
            if($_FILES['image']['size'] <= )
            {
                echo 'File uploaded !';
            }
            else
            {
                echo 'its too large!';
            }
        }
        else
        {
            echo ' not supported file!';
        }
        
    }
?>
 <html>
<head>
    
    <title> image</title>
</head>
<body>
    <fieldset>
        <legend>
            LOGIN
        </legend>
        <form action='#' method='POST' >
            <table> 
                <tr>
                    <td colspan="2">
                        <img src='./noman.jpg'/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type='file' name="image"/>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type='submit' value='Submit'>
                    </td>
                </tr>
            </table>
        </form>
    </fieldset>
</body>
</html>