<?php
    session_start();
    if($_SESSION['flag'] != true)
    {
        header('location: login.php');
    } 
?>
 <html>
<head>
     
    <title> Dashboard form</title>
</head>
<body>
    <fieldset>
        <table width='100%' >
            <tr>
            <td>
                    <img src='./homepage/userlogo.png'  height='60px'/>
                </td> 
                <td align='right'>
                    <nav>
                        <label> you are logged in as a user <a href='./home.php'> <?php echo $_SESSION['username'] ?></a> </label>|
                        <a href='./logout.php'>Log Out</a>
                    </nav>
                </td>
            </tr>
        </table>
    </fieldset>
    <table>
        <tr>
            <td>
                <label>Account</label>
                <br>
                <hr>
                <ul>
                    <li><a href='#'>Dashboard</a></li>
                    <li><a href='#'>View Profile</a></li>
                    <li><a href='#'>Edit Profile</a></li>
                    <li><a href='#'>Change Profile Picture</a></li>
                    <li><a href='#'>Change Password</a></li>
                    <li><a href='#'>Logout</a></li>
                </ul>
            </td>
        </tr>
    </table>
    <fieldset>
        <center>
            <label>
                Copyright © 2017
            </label>
        </center>
    </fieldset>
</body>
</html>