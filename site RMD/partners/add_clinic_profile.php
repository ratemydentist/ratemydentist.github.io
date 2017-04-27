<?php include 'connect.php';

//create a variable
$clinic_name=$_POST['clinic_name'];
$clinic_address=$_POST['clinic_address'];
$clinic_city=$_POST['clinic_city'];
$clinic_zipcode=$_POST['clinic_zipcode'];
$clinic_email=$_POST['clinic_email'];
$clinic_phone=$_POST['clinic_phone'];

//execute query
$add = mysqli_query($conn, "INSERT INTO Clinics (clinic_name, clinic_address, clinic_city, clinic_zipcode, clinic_email, clinic_phone)
				VALUES('$clinic_name','$clinic_address', '$clinic_city', '$clinic_zipcode', '$clinic_email', '$clinic_phone')");

	if(mysqli_affected_rows($conn) > 0)
	{
		echo "<p>Clinic information added.</p>";
	} 
	else 
	{
		echo "The information could NOT be added.<br />";
		echo mysqli_error ($conn);
	}

mysqli_close($conn);
?>