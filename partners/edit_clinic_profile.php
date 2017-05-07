<?php include 'connect.php';
include 'header.php';
echo '<div class="col-xs-12 col-md-4 col-md-offset-4 col-lg-4 col-lg-offset-4">';

$id=$_POST['id'];
$clinic_name=$_POST['clinic_name'];
$clinic_address=$_POST['clinic_address'];
$clinic_city=$_POST['clinic_city'];
$clinic_zipcode=$_POST['clinic_zipcode'];
$clinic_email=$_POST['clinic_email'];
$clinic_phone=$_POST['clinic_phone'];

$edit = mysqli_query($conn, "UPDATE Clinics SET clinic_name='$clinic_name', clinic_address='$clinic_address', clinic_city='$clinic_city', clinic_zipcode='$clinic_zipcode', clinic_email='$clinic_email', clinic_phone='$clinic_phone' WHERE id='$id'");

	if(mysqli_affected_rows($conn) > 0)
	{
		echo '<div class="text-center">';
		echo "<h2>Thank you!</h2>";
		echo '</div>';
		echo "<p>Clinic information updated.</p>";
	} 
	else 
	{
		echo '<div class="text-center">';
		echo "<h2>Error!</h2>";
		echo '</div>';
		echo "The clinic information could NOT be updated.";
		echo mysqli_error($conn);
	}

mysqli_close($conn);
include 'footer.php';
?>