<?php include 'connect.php';

//create a variable
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$specialty1 = $_POST['specialty'];

//execute query
$add = mysqli_query($conn, "INSERT INTO Dentists(first_name,last_name,specialty)
				VALUES('$first_name','$last_name','$specialty')");

	if(mysqli_affected_rows($conn) > 0)
	{
		echo "<p>Dentist information added.</p>";
	} 
	else 
	{
		echo "The information could NOT be added.<br />";
		echo mysqli_error ($conn);
	}

mysqli_close($conn);
?>