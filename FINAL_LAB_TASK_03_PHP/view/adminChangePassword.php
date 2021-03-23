<center>
	<form method="POST" action = "../controller/userPasswordCheck.php">
		<table border="0" cellspacing="0" cellpadding="5">
			<tr>
				<td>
					<fieldset>
						<legend>CHANGE PASSWORD</legend>
						Current Password<br />
						<input type="password" name="cPass"/><br />
						New Password<br />
						<input type="password" name="nPass"/><br />
						Retype New Password<br />
						<input type="password" name="rPass"/>								
						<hr />
						<input type="submit" name = "change" value="Change"/>     
						<a href="adminHome.php">Home</a>						
					</fieldset>
				</td>
			</tr>
		</table>
	</form>  
</center>