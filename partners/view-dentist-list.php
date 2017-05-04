<?php include 'header.php';
include 'connect.php';

$sql = "SELECT id, first_name, last_name, specialty FROM Dentists";
$result = $conn->query($sql);

$counter = 1;

if ($result->num_rows > 0) 
	{
    	// output data of each row
    	while($row = $result->fetch_assoc()) 
    	{
        	echo $counter. ". " . $row["first_name"]. " " . $row["last_name"]. "<br>Specialty: " .$row["specialty"];
            echo '&nbsp; <a href="edit_dentist_profile.php?id=' . $row['id'] . '">Edit profile</a><br>';
            $counter++;
    	}
	} 
else 
	{
    echo "There are no results to display.";
	}

$conn->close();
include 'footer.php';
?>