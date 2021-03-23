 
<html>
<head>
	<title>Registration</title>
</head>
<body>
	<form method="POST" action="controller/regCheck.php">
		<fieldset>
			<legend>
				<b>REGISTRATION</b>
			</legend>
			<table>
				<tr>
					<td>
						ID
					</td>
				</tr>
				<tr>
					<td>
						<input type="text" name="id">
					</td>
				</tr>
				<tr>
					<td>
						Password
					</td>
				</tr>
				<tr>
					<td>
						<input type="password" name="password">
					</td>
				</tr>
				<tr>
					<td>
						Confirm Password
					</td>
				</tr>
				<tr>
					<td>
						<input type="password" name="confirmPassword">
					</td>
				</tr>
				<tr>
					<td>
						Name
					</td>
				</tr>
				<tr>
					<td>
						<input type="name" name="name">
					</td>
				</tr>
				<tr>
					<td>
						Email
					</td>
				</tr>
				<tr>
					<td>
						<input type="email" name="email">
					</td>
				</tr>
				<tr>
					<td>
						User Type  
					</td>
				</tr>
				<tr>
					<td>
						<select name="type">
							<option value="user"> User</option>
							<option value="admin"> Admin</option>
						</select>
					</td>
				</tr>
				<tr>
					<td> <hr> </td>
				</tr>
				<tr>
					<td>
						<input type="submit" name="register" value="Register">
					</td>
					<td>
						<a href="view/login.php"> Login </a>
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>