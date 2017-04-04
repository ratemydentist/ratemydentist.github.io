<!DOCTYPE html>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<html>
<head>
    
BOOKING CONFIRMATION EMAIL GENERATOR - NO BOOTSTRAP - NO THEME - NO JAVA <br>
</head>
<body>
    
<?php
    $parameters_present = False;
    echo "PHP is working. Here comes automatic redirection and email generation<br>";
    if(isset($_POST["time_plan"]))$time = $_POST["time_plan"];
    if(isset($_POST["date_plan"]))$date = $_POST["date_plan"];
    if(isset($_POST["doctor_plan"]))$doctor = $_POST["doctor_plan"];
    if(isset($_POST["address_plan"]))$address = $_POST["address_plan"];
    if(isset($_POST["name_input"]))$name = $_POST["name_input"];
    if(isset($_POST["idcode_input"]))$idcode = $_POST["idcode_input"];
    if(isset($_POST["phone_input"]))$phone = $_POST["phone_input"];
    if(isset($_POST["reason_input"]))$reason = $_POST["reason_input"];
    if(isset($_POST["email_input"]))$email = $_POST["email_input"];
    
    
    if($parameters_present == True){
        $msg = "This is a booking confirmation. \n Name: XXX \n ID Code: XXX \n Visit time: XXX \n Address: XXX \n Reason: XXX \n";
        $msg = wordwrap($msg,70);
        mail($email,"Booking confirmation",$msg);
    } else {
        echo "Insufficient parameters";
    }
?>
    
</div>
    
    
</body>
</html>