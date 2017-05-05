<?php      
    include 'template_part_a.php';
    session_start();

?>
<?php
      $day = "notset";
      $month = "notset";
      $hour = "notset";
      $minute = "notset";
   if (isset($_POST["datetime"]) && !empty($_POST["datetime"])){
      $when = $_POST["datetime"];
      $day = substr($when,0,2);
      $month = "May 2017";
      $hour = substr($when,2,2);
      $minute = substr($when,4,6);
      $clinic = $_POST["clinic_sel"];
   }

?>
<div id="main">
    <form action="bookmail.php" method="post">
      <div class="row" style="color:black;">
        <div class="col-md-2 "></div>
        <div class="col-md-4 test">
            <input class="book_field" readonly name="time_plan" value="<?php echo "VISIT TIME: ".$hour.":".$minute; ?>"><br>
            <input class="book_field" readonly name="date_plan" value="<?php echo "DATE: ".$day." ".$month; ?>"><br>
            <input class="book_field" readonly name="doctor_plan" value="Ksenia Ovchinnikova"><br>
            <textarea class="book_field" readonly name="address_plan" value="<?php echo "ADDRESS: ".$clinic; ?>"><?php echo "clinic: ".$clinic; ?></textarea><br>
        </div>
        <div class="col-md-4">
            <input class="book_field" type="text" name="name_input" style="width:100%;text-align:center;" value="<?php echo $_SESSION["name"]." ".$_SESSION["fname"]; ?>"><br>            
            <input class="book_field" type="text" name="idcode_input" style="width:100%;text-align:center;" 
value="<?php echo $_SESSION["id"]; ?>"><br>
            <input class="book_field" type="text" name="email_input" style="width:100%;text-align:center;" value="<?php echo $_SESSION["mail"]; ?>"><br>
            <input class="book_field" type="text" name="phone_input" style="width:100%;text-align:center;" value="<?php echo $_SESSION["phone"]; ?>"><br>
            <textarea class="book_field" name="reason_input" rows="5" style="width:100%;text-align:center;" placeholder="<?php echo"REASON FOR VISIT"; ?>"></textarea><br>
        </div>
        <div class="col-md-2 "></div>
      </div> <!-- end row --> 
      <br><br>
      <div class="row">
        <div class="col-md-2 "></div>
        <div class="col-md-10" style="color:black;">
            <input type="submit" name="book" class="lookgood_1 bt_ss" value="BOOK"><br>
        </div>
      </div> <!-- end row -->  
    </form>
    
</div>
<?php
    include 'template_part_b.php';
?>
