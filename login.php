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
       <div class="col-xs-12 col-md-4"></div>
       <div class="col-xs-12 col-md-4 text-center">
          <div id="main_login">
            <div class="row">
             <input class="inp_reg" type="text" id="username_input" placeholder="Login">
             <input class="inp_reg" type="text" id="password_input" placeholder="Password">
             <br>
             <input type="button" id="login" value="LOGIN" onclick="myFunction()" class="lookgood_1 bt_ss"> <!-- JS does the login check-->
            </div>
          </div>
       </div>
       <div class="col-xs-12 col-md-4"></div>
    </div> <!-- end row -->
<?php
     include 'template_part_b.php';
?>
