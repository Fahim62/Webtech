<?php

			$emailErr= $pwdNErr= $pwdRErr = "";
			$email= $pwdN= $pwdR = "";

			if ($_SERVER["REQUEST_METHOD"] == "POST")
			{
				if (empty($_POST["email"])) 
			  	{
			  		$emailErr = "E-mail is required";
			  	}
			  	else
			  	{
			  		$email = test_input($_POST["email"]);
			  		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
			  		{
	  					$emailErr = "Invalid email format";
	  					$email = "";
	  				}
	  			}



	  			if (empty($_POST["pwdN"])) 

			  	{
			  		$pwdNErr = "Password is required";
			  	}

			  	else
			  	{
			  		$pwdN = test_input($_POST["pwdN"]);	
			  		if (strlen($pwdN)<8) 
			  		{
	      				$pwdNErr = "Must not be less than eight (8) characters";
	      				$pwdN = "";
	    			}
	    			elseif(strpos($_POST["pwdN"], "$") == false && strpos($_POST["pwdN"], "@") == false && strpos($_POST["pwdN"], "%") == false &&strpos($_POST["pwdN"], "#") == false)
	    			{
	    				$pwdNErr = "Must contain at least one of the special characters (@, #, $, %)";
	    				$pwdN = "";
			  		}
			  	}




			  	if (empty($_POST["pwdR"])) 
			  	{
			  		$pwdRErr = "Please retype Password";
			  		$pwdN = "";
			  	}
			  	
			  	else
			  	{
			  		$pwdR = test_input($_POST["pwdR"]);	
			  		if ($pwdN != $pwdR) 
			  		{
	      				$pwdRErr = "Password is not matching";
	      				$pwdR = "";
	      				$pwdN = "";
	    			}
			  	}

            }

            
			function test_input($data) 
			{
	 			$data = trim($data);
	 			$data = stripslashes($data);
	  			$data = htmlspecialchars($data);
	  			return $data;
			}


			if( !empty($_POST["email"]) && !empty($_POST["pwdN"]) && !empty($_POST["pwdR"]) )

           {
                        if ( $pwdN = $pwdR)

                        {
                           header('Location: AfterChangePassword.php');
                           exit;

                        }

                        
         
           }
			
		?>