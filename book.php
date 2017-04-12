<?php      
    include 'template_part_a.php';
?>
<div id="main" style="background-color:red;position:relative;color:black;">
    <form action="./book_processing.php" method="post" style="border-style:solid;position:relative;" >
        <div id="booking_info" style="float:right;border-style:solid;width:40%;position:relative;">
            <input type="hidden" readonly name="time_plan"      value="<?php echo"TIME PARAMETER"; ?>"><br>
            <input type="hidden" readonly name="date_plan"      value="<?php echo"DATE PARAMETER"; ?>"><br>
            <input type="hidden" readonly name="doctor_plan"    value="<?php echo"PHONE PARAMETER"; ?>"><br>
            <input type="hidden" readonly name="address_plan"   value="<?php echo"REASON PARAMETER"; ?>"><br>
            
            <div id="time_plan">    VISIT TIME: <?php echo"TIME PARAMETER"; ?> </div>
            <div id="date_plan">    DATE:       <?php echo"DATE PARAMETER"; ?></div>
            <div id="doctor_plan">  DOCTOR:     <?php echo"PHONE PARAMETER"; ?></div>
            <div id="address_plan"> ADDRESS:    <?php echo"REASON PARAMETER"; ?></div>
        </div>
        <div id="patient_info" style="float:left;border-style:solid;width:40%;position:relative;">
            <input type="text" name="name_input"    value="<?php echo"PATIENT NAME PARAMETER"; ?>"><br>            
            <input type="text" name="idcode_input"  value="<?php echo"IDCODE PARAMETER"; ?>"><br>
            <input type="text" name="email_input"  value="<?php echo"EMAIL PARAMETER"; ?>"><br>
            <input type="text" name="phone_input"   value="<?php echo"PHONE PARAMETER"; ?>"><br>
            <input type="text" name="reason_input"  value="<?php echo"REASON "; ?>"><br>
        </div>
        <div style="float:left;border-style:solid;width:100%;position:relative;">
            <input type="submit" name="cancel" value="CANCEL"><br>
            <input type="submit" name="book" value="BOOK"><br>
        </div>
    </form>
    
</div>
<?php
    include 'template_part_b.php';
?>
