<?php
  
	
	?>
	
	<html>
 
<head>
     
    <title> edit profile form</title>
</head>
<body>
    <fieldset>
        <table width='90%' >
            
                 
        </table>
    </fieldset>
 
    <fieldset>
        <fieldset>
            <legend>
                <b>Edit profile </b>
            </legend>
            <form action='./dashboard.php' method='POST' >
                <table align=""> 
                    <tr>
                        <td>
                            Edit Name:
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
                          Edit  User  Name:
                        </td>
                        <td>
                            <input type="text" name='name'>
                        </td>
                    </tr>
                     
					
					
					
					
					
					
					
					
					
                     
                 
					
					 <tr>
                        <td>
                          Edit  Email:
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
                          Edit  Phone Number:
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
                          Edit   Address:
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
                                    <b> Edit Birth Date</b>
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
                           Edit  Bio:
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
    
</body>
</html>