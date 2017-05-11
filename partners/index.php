<?php include 'header.php';
include 'connect.php'; ?>

  <div class="col-xs-12 col-md-3 col-lg-3">
  <div class="col-xs-12 col-md-12 col-lg-12 dashboard-section">
    <div class="text-center">
    <h3>Clinic</h3>
    </div>
    <?php 
    $sql = "SELECT id, clinic_name, clinic_address, clinic_city, clinic_zipcode, clinic_email, clinic_phone FROM Clinics";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) 
      {
        while($row = $result->fetch_assoc()) 
          {
            echo $row["clinic_name"];
            echo "<br>". $row["clinic_address"];
            echo "<br>". $row["clinic_zipcode"]. " ". $row["clinic_city"];
            echo "<br>". $row["clinic_email"];
            echo "<br>+372 ". $row["clinic_phone"];
            echo '<br><span class="glyphicon glyphicon-pencil"></span>&nbsp;<a href="edit-clinic-profile.php?id=1">Edit clinic profile</a>';
          }
      } 
    else 
      {
        echo "There is nothing to display.";
      }

    $conn->close();
    ?>
  </div>
  </div>
  <div class="col-xs-12 col-md-3 col-lg-3">
  <div class="col-xs-12 col-md-12 col-lg-12 dashboard-section">
    <div class="text-center">
    <h3>Dentists</h3>
    </div>
    <p><span class="glyphicon glyphicon-list-alt"></span>&nbsp;<a href="view-dentist-list.php">View dentist list</a>
    <br><span class="glyphicon glyphicon-plus"></span>&nbsp;<a href="add-dentist-profile.php">Add dentist profile</a></p>
  </div>
  </div>

  <div class="col-xs-12 col-md-3 col-lg-3">
  <div class="col-xs-12 col-md-12 col-lg-12 dashboard-section">
    <div class="text-center">
    <h3>Appointments</h3>
    </div>
    <p><span class="glyphicon glyphicon-list-alt"></span>&nbsp;<a href="appointments.html">View appointments</a></p>
  </div>
  </div>
  
  <div class="col-xs-12 col-md-3 col-lg-3">
  <div class="col-xs-12 col-md-12 col-lg-12 dashboard-section">
    <div class="text-center">
    <h3>Reviews</h3>
    </div>
    <p><span classclass="glyphicon glyphicon-star"></span>&nbsp;<a href="view-reviews.html">View reviews</a></p>
  </div>
  </div>
 <?php include 'footer.php'; ?>
