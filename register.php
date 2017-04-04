<!DOCTYPE html>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<html>
<head>
REGISTER PAGE - NO BOOTSTRAP - NO THEME - NO JAVA - NO PHP<br>
</head>
<body>
    
<?php
echo "PHP is working";
?>
    
    
<div id="main_register" style="background-color:red;position:relative;">
    <form action="./do_register.php" method="post">
            <input type="text" name="login_input" value="New login"><br>
            <input type="text" name="password_input" value="New password"><br>
            <input type="text" name="email_input" value="your email"><br>
            <input type="text" name="name_input" value="your given name"><br>
            <input type="text" name="familyname_input" value="your familyname"><br>
            <input type="text" name="idcode_input" value="your id code"><br>
            <input type="text" name="phonenumber_input" value="(+372)your phone number"><br>
            
            <input type="submit" name="login" value="REGISTER"><br>

    </form>
    
</div>
    
    
</body>
</html>