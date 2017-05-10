<?php include 'header.php'; ?>

  <div class="col-xs-12 col-md-6 col-lg-6">
  <div class="col-xs-12 col-md-12 col-lg-12">
    <form class="form-horizontal" method="post" action="message-thanks.php">
    <div class="text-center">
    <h3>Contact us</h3>
    </div>
    <div class="form-group">
      <div class="inputGroupContainer col-xs-12 col-md-10 col-md-offset-1">
      <label for="name">Name *</label>
      <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input class="form-control" type="text" name="name" id="name" required>
      </div>
      </div>
    </div>

     <div class="form-group">
        <div class="inputGroupContainer col-xs-12 col-md-10 col-md-offset-1">
        <label for="email">E-mail address *</label>
        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
        <input type="email" class="form-control" name="email" id="email" required>
        </div>
        </div>
      </div>

      <div class="form-group">
        <div class="inputGroupContainer col-xs-12 col-md-10 col-md-offset-1">
        <label for="phone">Phone number</label>
        <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>  
        <input type="text" class="form-control" name="phone" id="phone">
        </div>
        </div>
      </div>

      <div class="form-group">
        <div class="inputGroupContainer col-xs-12 col-md-10 col-md-offset-1">
        <label for="message">Message *</label>
        <textarea class="form-control" id="message" name="message" rows="7" required></textarea>
        </div>
      </div>

      <div class="form-group text-center">
        <br><input type="submit" value="Submit">
      </div>
    </form>
  </div>
  </div>

  <div class="col-xs-12 col-md-6 col-lg-6">
  <div class="col-xs-12 col-md-12 col-lg-12">
    <div class="text-center">
    <h3>Our office</h3>
    </div>
    <div class="col-xs-12 col-md-10 col-md-offset-1">
    <p>Metro Plaza
    <br>Viru Square 2
    <br>Tallinn
    <br>+372  5642 969
    <br>info@ratemydentist.ee</p>
    <hr />
    <div class="hidden-xs">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2028.7421626567093!2d24.751782115659353!3d59.43737470939734!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46929360ff21f69d%3A0x4988cc1efbe275d4!2sMetro+Plaza!5e0!3m2!1sen!2see!4v1494337181551" width="408" height="345" frameborder="0" style="border:0"></iframe>
    </div>
    </div>
  </div>
  </div>
 <?php include 'footer.php'; ?>