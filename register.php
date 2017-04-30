<?php      
    include 'template_part_a.php';
?>
    <!--logo-->
    <div class="container">
        <div class="col-xs-12"><p class="text-center logo_rmd">Register</p>
        <p class="text-center">
<?php
if(isset($_GET["register"])){
   if($_GET["register"]=="notgood"){
      echo "N.B.! PLEASE FILL ALL FIELDS";
   }
}
?>
        </p></div>
    </div>
    <!--endlogo-->

    <br>
    <div class="row">
       <div class=" col-xs-12 col-md-4"></div>
       <div class="col-xs-12 col-md-4 text-center">
          <div id="main_register ">
             <form action="regmail.php" method="post">
               <div class="row">
                <input class="inp_reg " type="text" name="login_input"  placeholder="New login">
                <input class="inp_reg " type="text" name="password_input"  placeholder="New password">
                <input class="inp_reg " type="text" name="email_input"  placeholder="your email">
                <input class="inp_reg " type="text" name="name_input"  placeholder="your given name">
                <input class="inp_reg " type="text" name="familyname_input"  placeholder="your familyname">
                <input class="inp_reg " type="text" name="idcode_input"  placeholder="your id code">
                <input class="inp_reg " type="text" name="phonenumber_input"  placeholder="(+372)your phone number">
               </div>
                <br>
                <input type="submit" name="login" value="REGISTER" class="lookgood_1 bt_ss">
             </form>
          </div>
       </div>
       <div class="col-xs-12 col-md-4"></div>
  
<?php
     include 'template_part_b.php';
?>
