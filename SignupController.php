<?php

			$nameErr= $emailErr= $usernameErr= $pwdNErr= $pwdRErr= $genderErr= $dobErr=  "";
			$month = $day = $year ="";
			$name= $email= $username= $pwdN= $pwdR= $gender= $dob=  "";
			$signup_status = "";



			if ($_SERVER["REQUEST_METHOD"] == "POST") 
			{
				  
				  $counter = 0;

					  if (isset($_POST["name"]) & !empty($_POST["name"])) 

					  {
					    $name = test_input($_POST["name"]);
					  }

					  else 
					  {
					    $nameErr = "Invalid Name.. Name is Required ";
					    $counter = $counter + 1;
					  }


					  if (isset($_POST["email"]) & !empty($_POST["email"])) 

						  {
						    $email = test_input($_POST["email"]);
						  }

						  else 
						  {
						    $emailErr = "Invalid email... Email is Required";
						    $counter = $counter + 1;
						  }


						  if (isset($_POST["username"]) & !empty($_POST["username"])) 

						  {
						    $username = test_input($_POST["username"]);
						  }

						  else 
						  {
						    $usernameErr = "Invalid username.. User Name is Required";
						    $counter = $counter + 1;
						  }


						  if (isset($_POST["pwdN"]) & !empty($_POST["pwdN"])) 

						  {
						    $pwdN = test_input($_POST["pwdN"]);
						  }

						  else 
						  {
						    $pwdNErr = "Invalid Password... Password is Required";
						    $counter = $counter + 1;
						  }


						  if (isset($_POST["pwdR"]) & !empty($_POST["pwdR"])) 

						  {   

						  	$pwdR = test_input($_POST["pwdR"]); 
						    
                               if ( !empty($_POST["pwdN"]))

                               {
                                     

                                            $val=strcmp($pwdN,$pwdR);

				                            if($val==0)

				                            {
				                                $pwdR = test_input($_POST["pwdR"]); 
				                            }

				                            else

				                            {
				                                
                                                $pwdR = "";
                                                $counter = $counter + 1;
				                                $pwdRErr = "Password do not match, Please Re-enter "; 
				                                   
				                            } 

                                     

                               }



						    
						  }



						  else 
						  {
						    $pwdRErr = "Invalid Re-Password.... Repeat Password is Required";
						    $counter = $counter + 1;
						  }




						  if (isset($_POST["dob"]) & !empty($_POST["dob"])) 

						  {
						    $dob = test_input($_POST["dob"]);
						  }

						  else 
						  {
						    $dobErr = "Invalid Date Of Birth... Date-of-Birth is Required";
						    $counter = $counter + 1;
						  }



                       if($counter == 0) 

						  {
						    $signup_status = "Sign Up Successful";

                             


						    $user = fopen("../Data/LoginData.txt", "w") or die("Unable to open file!");
						    fwrite($user,$name."," .$email.",".$username.",".$pwdN.", ".$pwdR.",".$gender.",".$dob.",");
						    fwrite($user, "\n");
						    fclose($user);


						    header('Location: ../View/AfterSignup.php');
                             exit;
						  }


						  else

						   {


						    $signup_status = "Sign Up Failed";

						    
                            

						    $counter = 0;
						  }
						}



						else

						{
							$signup_status = "Sign Up Failed";
						}


						  

						function test_input($data) 

						{
						  $data = trim($data);
						  $data = stripslashes($data);
						  $data = htmlspecialchars($data);
						  return $data;
						}


		?>