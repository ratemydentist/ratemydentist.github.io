<?php      
    include 'template_part_a.php';
?>
    <!--logo-->
    <div class="container">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><p class="text-center logo_rmd">Register</p></div>
    </div>
    <!--endlogo-->
    <br>
    <div class="row">
       <div class="col-md-4"></div>
       <div class="col-md-4">
          <div id="main_register" style="width:50%;margin:0 auto;color:black;">
             <form action="./do_register.php" method="post">
                <input type="text" name="login_input" style="width:100%;" placeholder="New login"><br><br>
                <input type="text" name="password_input" style="width:100%;" placeholder="New password"><br><br>
                <input type="text" name="email_input" style="width:100%;" placeholder="your email"><br><br>
                <input type="text" name="name_input" style="width:100%;" placeholder="your given name"><br><br>
                <input type="text" name="familyname_input" style="width:100%;" placeholder="your familyname"><br><br>
                <input type="text" name="idcode_input" style="width:100%;" placeholder="your id code"><br><br>
                <input type="text" name="phonenumber_input" style="width:100%;" placeholder="(+372)your phone number"><br><br>
                <input type="submit" name="login" style="width:100%;" value="REGISTER">
             </form>
          </div>
       </div>
       <div class="col-md-4"></div>
  
<?php
     include 'template_part_b.php';
?>

