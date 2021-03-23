 
<html>
<head>
	<title>Log in</title>
</head>
<body>
	<form method="POST" action="../controller/logCheck.php">
		<fieldset >
			<legend>
				<b>LOGIN</b>
			</legend>
			<table>
				<tr>
					<td>
						User Id
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
						<input type="checkbox" name="remember"> Remember Me
					</td>
				</tr>
				<tr>
					<td>
						<hr>
					</td>
				</tr>
				<tr>
					<td>
						<input type="submit" name="login" value="Login">
					</td>
					<td>
						<a href="../index.php"> Register </a>
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>