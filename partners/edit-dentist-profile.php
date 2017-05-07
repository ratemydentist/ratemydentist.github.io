<?php include 'header.php';
include 'connect.php';

$id=$_GET['id'];

$sql="SELECT * FROM Dentists WHERE id='$id'";
$result=mysqli_query($conn, $sql);
$row=mysqli_fetch_array($result);
?>

  <div class="col-xs-12 col-md-4 col-md-offset-4 col-lg-4 col-lg-offset-4">
    <form method="post" action="edit_dentist_profile.php?id='<? echo $row['ID']; ?>'">
    <div class="text-center">
    <h2>Edit dentist profile</h2>
    </div>
    <input name="id" type="hidden" id="id" value="<? echo $row['ID']; ?>">
    <div class="form-group">
          <div class="inputGroupContainer">
          <label for="first_name">First name *</label>
        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        <input class="form-control" type="text" name="first_name" id="first_name" value="<? echo $row['first_name']; ?>" required>
        </div>
      </div>
    </div>

    <div class="form-group">
        <div class="inputGroupContainer">
        <label for="last_name">Last name *</label>
        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        <input type="text" class="form-control" name="last_name" id="last_name" value="<? echo $row['last_name']; ?>" required>
        </div>
      </div>
    </div>

      <!-- Initialize the Multiselect plugin: -->
    <script type="text/javascript">
        $(document).ready(function() {
            $('#specialty').multiselect();
        });
    </script>
    <div class="form-group">
        <div class="inputGroupContainer">
        <label for="specialty">Specialty *</label>
        <div class="input-group">
        <select class="form-control" name="specialty[]" id="specialty" multiple="multiple" required>
            <option value="General dentistry">General dentistry</option>
            <option value="Pediatric dentistry">Pediatric dentistry</option>
            <option value="Orthodontics">Orthodontics</option>
            <option value="Periodontics">Periodontics</option>
            <option value="Oral surgery">Oral surgery</option>
            <option value="Endodontics">Endodontics</option>
            <option value="Prosthodontics">Prosthodontics</option>
            <option value="Oral pathology">Oral pathology</option>
          </select>
          </div>
        </div>
    </div>

    <div class="form-group text-center">
    <br><input type="submit" value="Submit">
    </div>
    </form>
    </div>
 <?php include 'footer.php'; ?>