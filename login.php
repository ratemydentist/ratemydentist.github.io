<?php      
    include 'template_part_a.php';
?>
    <!--logo-->
    <div class="container">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><p class="text-center logo_rmd">Login page</p></div>
    </div>
    <!--endlogo-->

    <script src="./js/js.js" ></script>

    <div id="main_login" style="background-color:red;position:relative; color:black;">
            <input type="text" id="username_input" value="Login"><br>
            <input type="text" id="password_input" value="Password"><br>
            <input type="button" id="login" value="LOGIN" onclick="myFunction()"><br> <!-- JS does the login check-->
    </div>
<?php
     include 'template_part_b.php';
?>
