<?php include 'connect.php';

$sql = "SELECT id, first_name, last_name FROM Dentists";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
	{
    	// output data of each row
    	while($row = $result->fetch_assoc()) 
    	{
        	echo $row["id"]. ". " . $row["first_name"]. " " . $row["last_name"];
            echo '&nbsp; <a href="edit_dentist_profile.php?id=' . $row['id'] . '">Edit profile</a><br>';
    	}
	} 
else 
	{
    echo "There are no results to display.";
	}

$conn->close();
?>