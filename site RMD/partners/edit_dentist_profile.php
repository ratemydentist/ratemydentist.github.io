<!DOCTYPE html>
<html>
<head>
<title>Rate My Dentist</title>
<!-- Include Bootstrap and jQuery  -->
<link href="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.3/js/bootstrap.min.js"></script>

<!-- Include Bootstrap Multiselect CSS and JS -->
<link href="http://cdn.rawgit.com/davidstutz/bootstrap-multiselect/master/dist/css/bootstrap-multiselect.css" rel="stylesheet" type="text/css" />
<script src="http://cdn.rawgit.com/davidstutz/bootstrap-multiselect/master/dist/js/bootstrap-multiselect.js" type="text/javascript"></script>

</head>

<body>
    <form action="" method="post">
    <input type="hidden" name="id" value="<?php echo $id; ?>"/>
    <br><strong>ID:</strong> <?php echo $id; ?>
    <br>First Name: *</strong> <input type="text" name="first_name" value="<?php echo $first_name; ?>">
    <br>Last Name: *</strong> <input type="text" name="last_name" value="<?php echo $last_name; ?>">


<input type="submit" name="submit" value="Submit">

</div>

</form>
</body>
</html>

<?php include 'connect.php';

// check if the form has been submitted. If it has, process the form and save it to the database
if (isset($_POST['submit']))
    {
    // confirm that the 'id' value is a valid integer before getting the form data
    if (is_numeric($_POST['id']))
        {
            // get form data
            $id = $_POST['id'];
            $first_name = $_POST['first_name'];
            $last_name = $_POST['last_name'];
            $specialty = $_POST['specialty'];
        }
    }

$edit = mysqli_query($conn, "UPDATE Dentists SET first_name='$first_name', last_name='$last_name', specialty='$specialty' WHERE id='$id'");

if ($conn->query($edit) === TRUE) 
    {
        echo "Profile updated successfully.";
    } 
else 
    {
        echo "Error updating profile: " . $conn->error;
    }

mysqli_close($conn);
?>