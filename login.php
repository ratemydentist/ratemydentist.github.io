<?php      
    include 'template_part_a.php';
?>
    <!--logo-->
    <div class="container">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><p class="text-center logo_rmd">Login page</p></div>
    </div>
    <!--endlogo-->
    <br><br><br>
    <div class="row">
       <div class="col-md-4"></div>
       <div class="col-md-4">
          <div id="main_login" style="color:black;margin:0 auto;width:50%;">
             <input type="text" id="username_input" placeholder="Login" style="width:100%;text-align:center;"><br><br>
             <input type="text" id="password_input" placeholder="Password" style="width:100%;text-align:center;"><br><br>
             <input type="button" id="login" value="LOGIN" onclick="myFunction()" class="lookgood_1 bt_ss" ><br> <!-- JS does the login check-->
          </div>
       </div>
       <div class="col-md-4"></div>
    </div> <!-- end row -->
<?php
     include 'template_part_b.php';
?>
