<?php include 'header.php';
echo '<div class="col-xs-12 col-md-4 col-md-offset-4 col-lg-4 col-lg-offset-4">';
echo '<div class="text-center">';
echo "<h2>Clinic profile</h2>";
echo '</div>';

include 'connect.php';

$sql = "SELECT id, clinic_name, clinic_address, clinic_city, clinic_zipcode, clinic_email, clinic_phone FROM Clinics";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
	{
    	// output data of each row
    	while($row = $result->fetch_assoc()) 
    	{
        	echo $row["clinic_name"];
            echo "<br>". $row["clinic_address"];
            echo "<br>". $row["clinic_zipcode"]. " ". $row["clinic_city"];
            echo "<br>". $row["clinic_email"];
            echo "<br>+372 ". $row["clinic_phone"];
            echo '<br><a href="edit-clinic-profile.php?id=1">Edit clinic profile</a>';
    	}
	} 
else 
	{
    echo "There are no results to display.";
	}

$conn->close();
include 'footer.php';
?>