<?php
    session_start();
    if(isset($_SESSION['username']) && isset($_SESSION['password']) && isset($_SESSION['flag']))
    {
        header('location: dashboard.php');
    }
	
	?>
	
	<html>
 
<head>
     
    <title>Registration form</title>
</head>
<body>
    <fieldset>
        <table width='90%' >
            <tr>
                <td>
                    <img src='./homepage/userlogo.png'   height='60px'/>
                </td> 
                <td align='right'>
                    <nav>
                        <a href='./home.php'>Home</a> |
                        <a href='./login.php'>Log In</a> |
                        <a href='./registration.php'>Registration</a>
                    </nav>
                </td>
            </tr>
        </table>
    </fieldset>
    <!---->
    <fieldset>
        <fieldset>
            <legend>
                <b>REGISTRATION</b>
            </legend>
            <form action='./check.php' method='POST' >
                <table align=""> 
                    <tr>
                        <td>
                            Name:
                        </td>
                        <td>
                            <input type="text" name='name'>
                        </td>
                    </tr>
                    <tr>
                         
                        </td>
                    </tr>
					
					
					<tr>
                        <td>
                           User  Name:
                        </td>
                        <td>
                            <input type="text" name='name'>
                        </td>
                    </tr>
                     
					
					
					
					
					
					
					
					
					
                     
                    
                    <tr>
                        <td>
                            Password:
                        </td>
                        <td>
                            <input type="password" name='password'>
                        </td>
                    </tr>
                    <tr>
                        
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Confirm Password:
                        </td>
                        <td>
                            <input type="password" name='confirmpassword'>
                        </td>
                    </tr>
                    <tr>
                         
                        </td>
                    </tr>
					
					
					
					 <tr>
                        <td>
                            Email:
                        </td>
                        <td>
                            <input type="email" name='email'>
                        </td>
                    </tr>
                    <tr>
                         
                        </td>
                    </tr>
					
					
					
                    <tr>
                        <td>
                            Phone Number:
                        </td>
                        <td>
                            <input type="number" name='pn'>
                        </td>
                    </tr>
                    <tr>
                      
                        </td>
                    </tr>
					
					<tr>
                        <td>
                             Address:
                        </td>
                        
                        <td> <textarea cols="25" rows="2"></textarea> </td>
                        
                    </tr>
                    <tr>
                        
                        </td>
                    </tr>
					
					
					  <tr>
                        <td>
                            <fieldset>
                                <legend>
                                    <b> Birth Date</b>
									</td>
									<td>
                                </legend>
                                <input type='number' name=date max=31 min=1>/
                                <input type='number' name=month max=12 min=1>/
                                <input type='number' name=year max=3000 min=1950>
                                <label><i>dd/mm/yyyy</i></label>
                            </fieldset>
                        </td>
                    </tr>
					
					
					
					
					
					
					
                    <tr>
					<td>
                         
                            <fieldset>
                                <legend>
                                    <b>Gender</b>
									</td>
									<td>
                                </legend>
                                <input type='radio' name='gender' value='male'>Male
                                <input type='radio' name='gender' value='female'>Female
                                
                            </fieldset>
                        </td>
                    </tr>
                    <tr>
					
					
					
					
					
					<tr>
                        <td>
                            where did you hear about us?:
                        </td>
                        	<td> 
 
						<input type="checkbox" name="SKILL"> A friend or colleague <br>
						<input type="checkbox"name= "SKILL"> Google <br>
						<input type="checkbox" name="SKILL"> Blog post <br>
						<input type="checkbox" name="SKILL"> New Article <br>
					</td>
					 
                         
                    </tr>
                    <tr>
                      
                    </tr>
					
					<tr>
                        <td>
                            Bio:
                        </td>
                        
                        <td> <textarea cols="25" rows="2"></textarea> </td>
                        < 
                    </tr>
                    <tr>
                       
                    <tr>
                        <td colspan="2">
                            <input type='submit' value='Submit'>
                            <input type='reset' value='Reset'>
                        </td>
                    </tr>
                </table>
            </form>
        </fieldset>
    </fieldset>
    <fieldset>
        <center>
            <label>
                Copyright © 2017
            </label>
        </center>
    </fieldset>
</body>
</html>