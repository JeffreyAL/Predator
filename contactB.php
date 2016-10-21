<?php


/// functions section

/// check for hack codes !! or any unwanted program
function test_input($data){

  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;

}


// set variables to empty
$name = $email = $message = "";
$Ename = $Eemail = $comment = "";

/// Beginning of script ------------
if($_SERVER['REQUEST_METHOD'] == 'POST'){


  if(empty($_POST['name']))
  {$Ename = "Name is Required";
   $mail = false;
  }
   else {
    $name = test_input($_POST['name']);
    //// check if it contains letters and whitespace
    if(!preg_match("/^[a-zA-Z ]*$/", $name)){
     $Ename = "Only Letters and space allowed";
     $mail = false;
    }
    $mail = true;
  }

  if(empty($name) || empty($email) || empty($message)){
    $warning="You forgot something";
  }

    if(empty($_POST['email']))
  {$Eemail = "Email is Required"; $mail = false;}
   else {
    $email = test_input($_POST['email']);
    //// check if it contains letters and whitespace
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
     $Eemail = "Invalid email or format";
     $mail = false;
    }
    $mail = true;
  }

  if(!empty($_POST['message'])){
   $message = test_input($_POST['message']);
  } else {
   $Emessage = "";
   $mail = false;
  }






 if(empty($Ename) AND  empty($Eemail) AND empty($Emessage)  ){




  $emailTo = "alhassan.jeffrey@yahoo.com";
 // $name = test_input($_POST['name']);
  //$email = test_input($_POST['email']);
  //$message = test_input($_POST['message']);


    ////// set up for the body of the email
    $body = "";
    $subject = "New Message from: $name";

    $body .= "Name:";
    $body .="$name";
    $body .="\n";

    $body .="Email:";
    $body .="$email";
    $body .="\n";

    $body .="Message:";
    $body .="$message";
    $body .="\n";
     /// send mail--------
     mail($emailTo, $subject, $body, "From: ". $name);
     echo("Your message has been sent");

      }
     }


?>
