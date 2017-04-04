<!DOCTYPE html>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<html>
<head>
BOOKING PAGE - NO BOOTSTRAP - NO THEME - NO JAVA - NO PHP<br>
</head>
<body>
    
<?php
echo "PHP is working";
?>
    
    
<div id="main" style="background-color:red;position:relative;">
    <form action="./book_processing.php" method="post" style="border-style:solid;position:relative;" >
        <div id="booking_info" style="float:right;border-style:solid;width:40%;position:relative;">
            <div id="time_plan">    VISIT TIME: </div>
            <div id="date_plan">    DATE:       </div>
            <div id="doctor_plan">  DOCTOR:     </div>
            <div id="address_plan"> ADDRESS:    </div>
        </div>
        <div id="patient_info" style="float:left;border-style:solid;width:40%;position:relative;">
            <input type="text" name="name_input" value="PATIENT NAME"><br>
            <input type="text" name="idcode_input" value="IDCODE"><br>
            <input type="text" name="phone_input" value="PHONE"><br>
            <input type="text" name="reason_input" value="REASON"><br>
        </div>
        <div style="float:left;border-style:solid;width:100%;position:relative;">
            <input type="submit" name="cancel" value="CANCEL"><br>
            <input type="submit" name="book" value="BOOK"><br>
        </div>
    </form>
    
</div>
    
    
</body>
</html>