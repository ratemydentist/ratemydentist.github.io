<?php
session_start();

if(isset($_POST["login_input"]) && !empty($_POST["login_input"]) &&
 isset($_POST["password_input"]) && !empty($_POST["password_input"])  &&
 isset($_POST["email_input"]) && !empty($_POST["email_input"]) &&
 isset($_POST["name_input"]) && !empty($_POST["name_input"])  &&
 isset($_POST["familyname_input"]) && !empty($_POST["familyname_input"])  &&
 isset($_POST["idcode_input"]) && !empty($_POST["idcode_input"])  &&
 isset($_POST["phonenumber_input"]) && !empty($_POST["phonenumber_input"]) ){

$login_input  = $_POST["login_input"];
$password_input  = $_POST["password_input"];
$email_input  = $_POST["email_input"];
$name_input  = $_POST["name_input"];
$familyname_input  = $_POST["familyname_input"];
$idcode_input  = $_POST["idcode_input"];
$phonenumber_input  = $_POST["phonenumber_input"];

$_SESSION["mail"] = $_POST["email_input"];
$_SESSION["name"] = $_POST["name_input"];
$_SESSION["fname"] = $_POST["familyname_input"];
$_SESSION["id"] = $_POST["idcode_input"];
$_SESSION["phone"] = $_POST["phonenumber_input"];

   $to      = $email_input;
   $subject = 'RateMyDentist registration confirmation';
   $message = 'Thank you for registration!
Login: '.$login_input.'
Name: '.$name_input.'
ID code: '.$idcode_input.'
phone: '.$phonenumber_input;
   $message = wordwrap($message, 200, "\r\n");
   $headers = 'From: info@ratemydentist.com' . "\r\n" .
       'Reply-To: info@ratemydentist.com' . "\r\n" .
       'X-Mailer: PHP/' . phpversion();
   mail($to, $subject, $message, $headers);

   header("Location: https://ratemydentist.000webhostapp.com?register=good");
   die();
} else {

   header("Location: https://ratemydentist.000webhostapp.com/register.php?register=notgood");
   die();
}

?>
