<?php include 'header.php';
include 'connect.php';

//create a variable
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$str = '';
foreach($_POST['specialty'] as $vals) {
    $str .= $vals . ', ';
}

$specialty = rtrim($str, ", ");

//execute query
$add = mysqli_query($conn, "INSERT INTO Dentists(first_name,last_name,specialty)
				VALUES('$first_name','$last_name','$specialty')");

	if(mysqli_affected_rows($conn) > 0)
	{
		echo "<h3>Thank you!</h3>"
		echo "<p>Dentist information added.</p>";
	} 
	else 
	{
		echo "<h3>Error!</h3>"
		echo "The dentist profile could NOT be added.";
		echo mysqli_error ($conn);
	}

mysqli_close($conn);
include 'footer.php';
?>