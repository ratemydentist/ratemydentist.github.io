<?php include 'header.php';
echo '<div class="col-xs-12 col-md-4 col-md-offset-4 col-lg-4 col-lg-offset-4">';
echo '<div class="text-center">';
echo "<h2>Dentist list</h2>";
echo '</div>';
include 'connect.php';

$sql = "SELECT id, first_name, last_name, specialty FROM Dentists";
$result = $conn->query($sql);

$counter = 1;

if ($result->num_rows > 0) 
	{
    	// output data of each row
    	while($row = $result->fetch_assoc()) 
    	{
            echo $counter. ". " . $row["first_name"]. " " . $row["last_name"]. "<br>" .$row["specialty"];
            echo '&nbsp; <a href="edit-dentist-profile.php?id=' . $row['id'] . '">Edit profile</a><br>';
            echo '<br>&nbsp;';
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