<?php include 'header.php'; ?>
  <div class="col-xs-12 col-md-4 col-md-offset-4 col-lg-4 col-lg-offset-4">
    <form method="post" action="add_clinic_profile.php">
    <div class="text-center">
    <h2>Enter clinic information</h2>
    </div>
      <div class="form-group">
          <div class="inputGroupContainer">
            <label for="clinic_name">Name *</label>
            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
            <input type="text" class="form-control" name="clinic_name" id="clinic_name" required>
            </div>
          </div>
      </div>
      
      <div class="form-group">
        <div class="inputGroupContainer">
          <label for="clinic_address">Street address *</label>
          <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
          <input type="text" class="form-control" name="clinic_address" id="clinic_address" required>
          </div>
        </div>
      </div>


      <div class="form-group">
        <div class="inputGroupContainer">
          <label for="clinic_city">City *</label>
          <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
          <input type="text" class="form-control" name="clinic_city" id="clinic_city" required>
          </div>
        </div>
      </div>

      <div class="form-group">
        <div class="inputGroupContainer">
          <label for="clinic_zipcode">Zip code *</label>
          <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
          <input type="text" class="form-control" name="clinic_zipcode" id="clinic_zipcode" required>
          </div>
        </div>
      </div>

      <div class="form-group">
        <div class="inputGroupContainer">
          <label for="clinic_email">E-mail address *</label>
          <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
          <input type="email" class="form-control" name="clinic_email" id="clinic_email" required>
          </div>
        </div>
      </div>

      <div class="form-group">
        <div class="inputGroupContainer">
          <label for="clinic_phone">Phone number *</label>
          <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>  
          <input type="text" class="form-control" name="clinic_phone" id="clinic_phone">
          </div>
        </div>
      </div>

      <div class="form-group text-center">
      <br><input type="submit" value="Submit">
      </div>
    </form>
    </div>
 <?php include 'footer.php'; ?>