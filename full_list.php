<?php include("template_part_a.php"); ?>
    <!--list-->
       <!--content_r-->
 <div class="container">
     <div class="content_r col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="table-responsive">
                           <table class="table">
                              <tr>
                                 <th>Doctor<span class="glyphicon glyphicon-arrow-up" aria-hidden="true"></span><span class="glyphicon glyphicon-arrow-down" aria-hidden="true"></span></th>
                                 <th>Clinic<span class="glyphicon glyphicon-arrow-up" aria-hidden="true"></span><span class="glyphicon glyphicon-arrow-down" aria-hidden="true"></span></th>
                                  <th><span class="glyphicon glyphicon-euro" aria-hidden="true"></span><span class="glyphicon glyphicon-arrow-up" aria-hidden="true"></span><span class="glyphicon glyphicon-arrow-down" aria-hidden="true"></span></th>
                                  <th><span class="glyphicon glyphicon-star" aria-hidden="true"></span><span class="glyphicon glyphicon-arrow-up" aria-hidden="true"></span><span class="glyphicon glyphicon-arrow-down" aria-hidden="true"></span></th>
                              </tr>
<?php
   $conn= new mysqli("localhost", "id1246705_user", "dentist", "id1246705_dentistbase");
   $result = $conn->query("SELECT * FROM cliniclist")
      or trigger_error($conn->error);
   $row = $result->fetch_array(MYSQLI_BOTH);

   while ($row = mysqli_fetch_assoc($result)) 
   {
      echo "<tr><td>",$row['doctor'],"</td><td>",$row['clinic'],"</td><td>",$row['1price'],"</td><td>",$row['rating'],"</td></tr>";
   }
?>
                           </table>
                        </div> 
                    </div> <!-- end table -->
     </div> 
<br>
<br>
   <!--footer-->
<?php include("template_part_b.php"); ?>
