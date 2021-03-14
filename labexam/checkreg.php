<?php
    session_start();  


     if ($_SERVER['REQUEST_METHOD'] == 'POST') { 

          

        function get_data() { 

            $datae = array(); 

            $datae[] = array( 

                'Name' => $_POST['name'], 

                  'email' => $_POST['email'], 
				  
                  'username' => $_POST['username'], 
 

            ); 

            return json_encode($datae); 

        } 

          

        $name = "gfg"; 

        $file_name = $name . '.json'; 

       

              if(file_put_contents( 

            "$file_name", get_data())) { 

                echo $file_name .' file created'; 

            } 

        else { 

            echo 'There is some error'; 

        } 

    } 
 
 
 
?>



 
<?php
 
  
   
 if(isset($_POST['name']) || isset($_POST['username']) || isset($_POST['email'])  || isset($_POST['password']) || isset($_POST['confirmpassword'])   || isset($_POST['date']) || isset($_POST['gender']) || isset($_POST['month']) || isset($_POST['year'])    || isset($_POST['gender']))
    {
		
                $name = $_POST['name'];
           $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $confirmpassword = $_POST['confirmpassword'];
        $gende= $_POST['gender'];
		 
        $date = $_POST['date'];
        $month = $_POST['month'];
        $year = $_POST['year'];

        for($i=0;$i<strlen($name);$i++)
        {
            if(!((ord($name[$i]) >= 97 && ord($name[$i]) <= 122)) && !((ord($name[$i]) >= 65 && ord($name[$i]) <= 90)) && !(ord($name[$i]) == 32))
            {
                echo 'Name can only be alphabetical';break;
                return;
            }
        }

        $atSymbol=false;
        $atSymbolLocation = 0;
        $period=false;
        $periodLocation = 0;

        for($i=0;$i<strlen($email);$i++)
        {
            if($email[$i] == '@')
            {
                $atSymbol = true;
                $atSymbolLocation = $i;
            }
            if($email[$i] == '.')
            {
                $period = true;
                $periodLocation = $i;
            }
        }
        if(!($atSymbol == true && $period == true && $atSymbolLocation < $periodLocation))
        {
            echo "Email must contain a '@' and '.'";
            return;
        }

        for($i=0;$i<strlen($username);$i++)
        {
            if(!((ord($username[$i]) >= 97 && ord($username[$i]) <= 122)) && !((ord($username[$i]) >= 65 && ord($username[$i]) <= 90))  && !((ord($username[$i]) >= 48 && ord($username[$i]) <= 57)))
            {
                echo 'Username can be only alphanumeric';break;
                return;
            }
        }
        
        if($password != $confirmpassword)
        {
            echo 'Passwords do not match!';
            return;
        }
        if(strlen($password) < 8)
        {
            echo 'Password must be atleast 8 characters!';
            return;
        }
        
        echo "Registered successfully!";
		
    
	 
        $_SESSION['name'] = $name;
  
		
        $_SESSION['email'] = $email;
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        $_SESSION['gender'] = $gender;
        $_SESSION['date'] = $date;
        $_SESSION['month'] = $month;
        $_SESSION['year'] = $year;

        $_SESSION['flag'] = true;
        
		
        header('location: login.php');
		       
	}
?>