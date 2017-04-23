<?php 

//VALIDATE INPUT---------------------------------
function test_input($data) 
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
// define variables and set to empty values
$error = array('userNameErr'=>"", 'passwordErr'=>"", 'emailErr'=>"");
$userName = $password = $email = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  if (empty($_POST["username"])) 
  {
    $error['userNameErr'] = "userName is required";
  } else 
    {
        $userName = test_input($_POST["username"]);
        // check if name only contains letters and whitespace
            if (!preg_match("/^[a-zA-Z ]*$/",$userName)) 
            {
              $error['userNameErr'] = "Only letters and white space allowed"; 
            }
    }

    if (empty($_POST["password"])) 
    {
        $error['passwordErr'] = "Password is required";
    } else 
        {
            $password = test_input($_POST["password"]);
            // check password
            if (strlen($_POST["password"]) <= '8') {
                $error['passwordErr'] = "Your Password Must Contain At Least 8 Characters!";
            }
            elseif(!preg_match("#[0-9]+#",$password)) {
                $error['passwordErr'] = "Your Password Must Contain At Least 1 Number!";
            }
            elseif(!preg_match("#[A-Z]+#",$password)) {
                $error['passwordErr'] = "Your Password Must Contain At Least 1 Capital Letter!";
            }
            elseif(!preg_match("#[a-z]+#",$password)) {
                $error['passwordErr'] = "Your Password Must Contain At Least 1 Lowercase Letter!";
            }
        }
    // check if e-mail address is well-formed
    if (empty($_POST["email"])) 
    {
        $error['emailErr'] = "Email is required";
    } else 
        {
            $email = test_input($_POST["email"]); 
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
            {
                $error['emailErr'] = "Invalid email format"; 
            }
        }

    if ($error === array('userNameErr'=>"", 'passwordErr'=>"", 'emailErr'=>"" ))
    {
        require('save_database.php') ; 
    }
    else
    {
        include('page_sign_in.php');
        exit;
    }
}

?>