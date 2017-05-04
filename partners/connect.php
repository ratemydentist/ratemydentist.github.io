 <?php
$servername = "localhost";
$username = "mankhu93_db";
$password = "cra0pw3r!!";
$database = "mankhu93_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?> 