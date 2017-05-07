<?php include 'connect.php';
include 'header.php';
echo '<div class="col-xs-12 col-md-4 col-md-offset-4 col-lg-4 col-lg-offset-4">';

$id=$_POST['id'];
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$str = '';
foreach($_POST['specialty'] as $vals) {
    $str .= $vals . ', ';
}

$specialty = rtrim($str, ", ");

$edit = mysqli_query($conn, "UPDATE Dentists SET first_name='$first_name', last_name='$last_name', specialty='$specialty' WHERE id='$id'");

	if(mysqli_affected_rows($conn) > 0)
	{
		echo '<div class="text-center">';
		echo "<h2>Thank you!</h2>";
		echo '</div>';
		echo "<p>Dentist profile updated.</p>";
	} 
	else 
	{
		echo '<div class="text-center">';
		echo "<h2>Error!</h2>";
		echo '</div>';
		echo "The dentist profile could NOT be updated.";
		echo mysqli_error($conn);
	}

mysqli_close($conn);
include 'footer.php';
?>