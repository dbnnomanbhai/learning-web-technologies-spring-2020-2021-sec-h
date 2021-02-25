<html>
<head> 
    <title>Login</title>
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
                        <a href='./reg.php'>Registration</a> 
                    </nav>
                </td>
            </tr>
        </table>
    </fieldset>
    <fieldset>
        <legend>
          <h2><b>  LOGIN </h2></b>
        </legend>
        <form action='./check.php' method='POST'>
            <table> 
                <tr>
                    <td>
                        User Name:
                    </td>
                    <td>
                        <input type="text" name='username'>
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
                     
                </tr>
                <tr>
                    <td>
                        <input type='checkbox'>Remember Me
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type='submit' value='Submit'>
                        <a href='./forget.php'>Forgot Password?</a>
                    </td>
                </tr>
            </table>
        </form>
    </fieldset>
</body>
</html>