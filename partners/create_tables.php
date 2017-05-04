<?php include 'connect.php';

// sql to create table
$sql = "CREATE TABLE Dentists (
    ID int NOT NULL AUTO_INCREMENT,
    first_name varchar(40) NOT NULL,
    last_name varchar(40) NOT NULL,
    specialty varchar(600) NOT NULL,
    address varchar(600) NULL,
    PRIMARY KEY (ID)
)";

$sql1 = "CREATE TABLE Clinics (
    ID int NOT NULL AUTO_INCREMENT,
    clinic_name varchar(255) NOT NULL,
    clinic_address varchar(255) NOT NULL,
    clinic_city varchar(255) NOT NULL,
    clinic_zipcode int(5) NOT NULL,
    clinic_email varchar(255) NOT NULL,
    clinic_phone int(12) NOT NULL,
    PRIMARY KEY (ID)
)";

if ($conn->query($sql) === TRUE && $conn->query($sql1) === TRUE)  {
    echo "Tables created successfully";
} else {
    echo "Error creating tables: " . $conn->error;
}

$conn->close();
?> 