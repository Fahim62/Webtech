<?php
$name = $email  = $dob = $address = '';
$nameErr = $emailErr  = $dobErr = $addressErr = '';



if ($_SERVER["REQUEST_METHOD"] == "POST") 


{
    if (empty($_POST["name"])) 

    {
        $nameErr = "Name is required";


    } 

    else 

    {
        $name = test_input($_POST["name"]);

        if (str_word_count($name) < 2) 

        {
            $nameErr = "Must contain at least two words";
            $name = "";
        }

         else 

         {
            if (!preg_match("/^[a-zA-Z]/", $name)) 

            {
                $nameErr = "Must start with a letter";
                $name = "";
            } 

            
        }
    }


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


    

    if (empty($_POST["dob"])) 

    {
        $dobErr = "Date of Birth is required";
    } 

    else 

    {
        $dob = test_input($_POST["dob"]);
        $month = date('m', strtotime($dob));
        $day = date('d', strtotime($dob));
        $year = date('Y', strtotime($dob));

        if (($day >= 1 && $day <= 31) && ($month >= 1 && $month <= 12) && ($year >= 1960 && $year <= 2020)) 

        {
            $dob = test_input($_POST["dob"]);
        } 

        else 

        {
            $dobErr = "Invalid Date (Year must be between 1980-2020)";
            $dob = "";
        }

    }


    if (empty($_POST["address"])) 

    {
        $addressErr = "Address is required";
    } 

    else

     {
        $address = test_input($_POST["address"]);
    }


}


function test_input($data)

{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}




        if ( !empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["dob"]) &&  !empty($_POST["address"]) )

           {
                        header('Location: AfterEditProfile.php');
                        exit;
           }



?>