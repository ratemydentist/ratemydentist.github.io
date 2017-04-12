<?php      
    include 'template_part_a.php';
?>
<div id="main_register" style="background-color:red;position:relative;color:black;">
    <form action="./do_register.php" method="post">
            <input type="text" name="login_input" value="New login"><br>
            <input type="text" name="password_input" value="New password"><br>
            <input type="text" name="email_input" value="your email"><br>
            <input type="text" name="name_input" value="your given name"><br>
            <input type="text" name="familyname_input" value="your familyname"><br>
            <input type="text" name="idcode_input" value="your id code"><br>
            <input type="text" name="phonenumber_input" value="(+372)your phone number"><br>
            
            <input type="submit" name="login" value="REGISTER"><br>

    </form>
    
</div>
  
<?php
     include 'template_part_b.php';
?>
