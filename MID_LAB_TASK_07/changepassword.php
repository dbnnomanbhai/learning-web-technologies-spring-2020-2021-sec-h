<?php


?>
<?php
    session_start();
    if(isset($_POST['current']) && isset($_POST['new']) && isset($_POST['confirmnew']))
    {
        if($_POST['current'] == $_POST['new'])
        {
            echo "New Password would be diff<br>";
        }
        if($_POST['new'] != $_POST['confirmnew'])
        {
            echo "New Password must match with the Retyped Password<br>";
        }
    }
?>



<html>
<head>
<title> change password form </title>
<body>
 <fieldset>
<table>
                    <tr>
                        <td>
						<h2>
						<b>
                           create  Password:
						   </h2>
						   </b>
                        </td>
                        <td>
                            <input type="password" name='current'>
                        </td>
                    </tr>
					
					
                    <tr>
                        <td>
						<h2>
						<b>
                           new   Password:
						   </h2>
						   </b>
                        </td>
                        <td>
                            <input type="password" name='new'>
                        </td>
                    </tr>
					
					
                    <tr>
                        
                        </td>
                    </tr>
                    <tr>
                        <td>
						<h2>
						<b>
                            Confirm Password:
							</h2>
							</b>
                        </td>
                        <td>
                            <input type="password" name='confirmnew'>
                        </td>
                    </tr>
                    <tr>
                         
                        </td>
                    </tr>
					 
					   
                    <tr>
                        <td colspan="2">
                            <input type='submit' value='Submit'>
                            <input type='reset' value='Reset'>
                        </td>
                    </tr>
					</table>
					 </fieldset>
					</body>
					</html>