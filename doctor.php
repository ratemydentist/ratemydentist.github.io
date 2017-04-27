<?php include("template_part_a.php"); ?>
     <!--content_r-->
 <div class="container">
     <div class="content_r col-xs-12 col-sm-12 col-md-12 col-lg-12">
       
       <div class="row">
          <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 ">
            <a href="#">
              <img class="img-responsive" src="img/504.jpg_frame%20(15).jpg" alt="photo doctor">
            </a>
          </div>
          
          <div class="col-xs-12 col-sm-10 col-md-10 col-lg-10 ">
           <!--name doctor-->
<?php
   $doc = "NO DOCTOR SELECTED !";
   if (isset($_GET["doctor"]) && !empty($_GET["doctor"])){
      $doc = $_GET["doctor"];
   }
?>
            <a href="#"><h4 class=""><? php echo $doc; ?></h4></a>
            <!--Clinic-->
                 <div class="dropdown dr_clinic">
                      <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        Clinic
                        <span class="caret"></span>
                      </button>
                      <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <li><a href="#">Clinic1</a></li>
                        <li><a href="#">Clinic2</a></li>
                        <li><a href="#">Clinic3</a></li>
                        <li><a href="#">Clinic4</a></li>
                      </ul>
                 </div>
                 <!-- calendar -->
                 <div class="panel panel-default ">
                      <!-- Default panel contents calendar -->
                      <div class="panel-heading"><span class="glyphicon glyphicon-calendar" aria-hidden="true"> </span> Calendar</div>
                                                   <!-- Table -->
                      <div class="table-responsive">
                        <form action="/book.php" method="post" id="bookform"> 
                          <table class="table ser_pac">
                            <tr>
                               Fri
                                <th><span class="glyphicon glyphicon-menu-left" aria-hidden="true"> </span></th>
                                <th>Mon. May 15</th>
                                <th>Tue. May 16</th>
                                <th>Wed. May 17</th>
                                <th>Thu. May 18</th>
                                <th>Fri. May 19</th>
                                <th>Sat. May 20</th>
                                <th>Sun. May 21</th>
                                <th><span class="glyphicon glyphicon-menu-right" aria-hidden="true"> </span></th>
                            </tr>
                            <tr>
                                <td></td>
                                <td><input type="radio" value="150800" name="datetime">8:00</td>
                                <td><input type="radio" value="160800" name="datetime">8:00</td>
                                <td><input type="radio" value="170800" name="datetime">8:00</td>
                                <td><input type="radio" value="180800" name="datetime">8:00</td>
                                <td><input type="radio" value="190800" name="datetime">8:00</td>
                                <td><input type="radio" value="200800" name="datetime">8:00</td>
                                <td><input type="radio" value="210800" name="datetime">8:00</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><input type="radio" value="150900" name="datetime">9:00</td>
                                <td><input type="radio" value="160900" name="datetime">9:00</td>
                                <td><input type="radio" value="170900" name="datetime">9:00</td>
                                <td><input type="radio" value="180900" name="datetime">9:00</td>
                                <td><input type="radio" value="190900" name="datetime">9:00</td>
                                <td><input type="radio" value="200900" name="datetime">9:00</td>
                                <td><input type="radio" value="210900" name="datetime">9:00</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><input type="radio" value="151000" name="datetime">10:00</td>
                                <td><input type="radio" value="161000" name="datetime">10:00</td>
                                <td><input type="radio" value="171000" name="datetime">10:00</td>
                                <td><input type="radio" value="181000" name="datetime">10:00</td>
                                <td><input type="radio" value="191000" name="datetime">10:00</td>
                                <td><input type="radio" value="201000" name="datetime">10:00</td>
                                <td><input type="radio" value="211000" name="datetime">10:00</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><input type="radio" value="151100" name="datetime">11:00</td>
                                <td><input type="radio" value="161100" name="datetime">11:00</td>
                                <td><input type="radio" value="171100" name="datetime">11:00</td>
                                <td><input type="radio" value="181100" name="datetime">11:00</td>
                                <td><input type="radio" value="191100" name="datetime">11:00</td>
                                <td><input type="radio" value="201100" name="datetime">11:00</td>
                                <td><input type="radio" value="211100" name="datetime">11:00</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><input type="radio" value="151200" name="datetime">12:00</td>
                                <td><input type="radio" value="161200" name="datetime">12:00</td>
                                <td><input type="radio" value="171200" name="datetime">12:00</td>
                                <td><input type="radio" value="181200" name="datetime">12:00</td>
                                <td><input type="radio" value="191200" name="datetime">12:00</td>
                                <td><input type="radio" value="201200" name="datetime">12:00</td>
                                <td><input type="radio" value="211200" name="datetime">12:00</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><input type="radio" value="151300" name="datetime">13:00</td>
                                <td><input type="radio" value="161300" name="datetime">13:00</td>
                                <td><input type="radio" value="171300" name="datetime">13:00</td>
                                <td><input type="radio" value="181300" name="datetime">13:00</td>
                                <td><input type="radio" value="191300" name="datetime">13:00</td>
                                <td><input type="radio" value="201300" name="datetime">13:00</td>
                                <td><input type="radio" value="211300" name="datetime">13:00</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><input type="radio" value="151400" name="datetime">14:00</td>
                                <td><input type="radio" value="161400" name="datetime">14:00</td>
                                <td><input type="radio" value="171400" name="datetime">14:00</td>
                                <td><input type="radio" value="181400" name="datetime">14:00</td>
                                <td><input type="radio" value="191400" name="datetime">14:00</td>
                                <td><input type="radio" value="201400" name="datetime">14:00</td>
                                <td><input type="radio" value="211400" name="datetime">14:00</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><input type="radio" value="151500" name="datetime">15:00</td>
                                <td><input type="radio" value="161500" name="datetime">15:00</td>
                                <td><input type="radio" value="171500" name="datetime">15:00</td>
                                <td><input type="radio" value="181500" name="datetime">15:00</td>
                                <td><input type="radio" value="191500" name="datetime">15:00</td>
                                <td><input type="radio" value="201500" name="datetime">15:00</td>
                                <td><input type="radio" value="211500" name="datetime">15:00</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><input type="radio" value="151600" name="datetime">16:00</td>
                                <td><input type="radio" value="161600" name="datetime">16:00</td>
                                <td><input type="radio" value="171600" name="datetime">16:00</td>
                                <td><input type="radio" value="181600" name="datetime">16:00</td>
                                <td><input type="radio" value="191600" name="datetime">16:00</td>
                                <td><input type="radio" value="201600" name="datetime">16:00</td>
                                <td><input type="radio" value="211600" name="datetime">16:00</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><input type="radio" value="151700" name="datetime">17:00</td>
                                <td><input type="radio" value="161700" name="datetime">17:00</td>
                                <td><input type="radio" value="171700" name="datetime">17:00</td>
                                <td><input type="radio" value="181700" name="datetime">17:00</td>
                                <td><input type="radio" value="191700" name="datetime">17:00</td>
                                <td><input type="radio" value="201700" name="datetime">17:00</td>
                                <td><input type="radio" value="211700" name="datetime">17:00</td>
                                <td></td>
                            </tr>

                          </table>
                        </form>   
                      </div> 
                 </div>
                 <!-- book -->
                 <div class=" bt_s">
                        <input type="submit" value="BOOK!" form="bookform">
                 </div>  
                 <!-- Service packages -->
                 <div class="panel panel-default ">
                      <!-- Default panel contents Service packages -->
                      <div class="panel-heading"><span class="glyphicon glyphicon-th-list" aria-hidden="true"> </span> Service packages</div>
                                                   <!-- Table -->
                      <div class="table-responsive">
                          <table class="table ser_pac">
                            <tr>
                                <th>Package of services<span class="glyphicon glyphicon-arrow-up" aria-hidden="true"></span><span class="glyphicon glyphicon-arrow-down" aria-hidden="true"></span></th>
                                <th>Clinic<span class="glyphicon glyphicon-arrow-up" aria-hidden="true"></span><span class="glyphicon glyphicon-arrow-down" aria-hidden="true"></span></th>
                                <th><span class="glyphicon glyphicon-euro" aria-hidden="true"></span></th>
                            </tr>
                            <tr>
                                <td>Package Ã¢ÂÂ1</td>
                                <td>Result table</td>
                                <td>Result table</td>
                            </tr>
                            <tr>
                                <td>Package Ã¢ÂÂ2</td>
                                <td>Result table</td>
                                <td>Result table</td>
                            </tr>
                            <tr>
                                <td>Package Ã¢ÂÂ3</td>
                                <td>Result table</td>
                                <td>Result table</td>
                            </tr>
                          </table>
                      </div> 
                 </div>
                 <!-- Comments -->
                 <div class="panel panel-default">
                      <div class="panel-heading">
                        <h3 class="panel-title"><span class="glyphicon glyphicon-star" aria-hidden="true"> </span> Comment1</h3>
                      </div>
                      <div class="panel-body">
                        sldvsnkjvnslndvlsndlkvnslnvlksnldnvlsnvlnvl
                      </div>
                 </div>
                 <!-- Comments -->
                 <div class="panel panel-default">
                      <div class="panel-heading">
                        <h3 class="panel-title"><span class="glyphicon glyphicon-star" aria-hidden="true"> </span> Comment2</h3>
                      </div>
                      <div class="panel-body">
                        sldvsnkjvnslndvlsndlkvnslnvlksnldnvlsnvlnvl
                      </div>
                 </div>
                 <p></p>
                 <br>
                 <br>
          </div>
           </div>
     </div>
 </div>
                 <br>
                 <br>
   <!--end content_r-->
    <!--footer -->
<?php include("template_part_b.php"); ?>
