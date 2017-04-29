
<?php include("template_part_a.php"); ?>
     <!--content_r-->
 <div class="container">
     <div class="content_r col-xs-12 col-sm-12 col-md-12 col-lg-12">
             <div class="search_filt  col-xs-12 col-sm-3 col-md-3 col-lg-3 text-center form_search">
                <div class="row form_search">
                 <p class="text_filt"><span class="glyphicon glyphicon-filter" aria-hidden="true"> </span> FILTER YOUR RESULTS</p>
                  <form action="/search_r.php" method="post" class="form_search">                
                     <select name="serviceSelect" class="lookgood_1 dr_down">
                        <option value="Diagnosis">Diagnosis</option>
                        <option value="Correction_of_occlusion">Correction_of_occlusion</option>
                        <option value="Treatment">Treatment</option>
                        <option value="Implantation">Implantation</option>
                        <option value="Childrens_dentistry">Childrens_dentistry</option>
                        <option value="Whitening">Whitening</option>
                        <option value="Periodontology">Periodontology</option>
                        <option value="Prosthetics">Prosthetics</option>
                        <option value="Surgery">Surgery</option>
                        <option value="Aesthetic_dentistry">Aesthetic_dentistry</option>
                     </select>
                     <br>
                     <select name="townSelect" class="lookgood_1 dr_down" id="townId" onchange="distr()">
                        <option value="Tallinn">Tallinn</option>
                        <option value="Tartu">Tartu</option>
                        <option value="Narva">Narva</option>
                        <option value="Parnu">Parnu</option>
                     </select>   
                     <div id="subDistr">
                        <select name="districtSelect" class="lookgood_1 dr_down">
                           <option value="Haabersti">Haabersti</option>
                           <option value="Kesklinn">Kesklinn</option>
                           <option value="Kristiine">Kristiine</option>
                           <option value="Lasnamae">Lasnamae</option>
                           <option value="Mustamae">Mustamae</option>
                           <option value="Nomme">Nomme</option>
                           <option value="Pirita">Pirita</option>
                           <option value="Pxhja-Tallinn">Pxhja-Tallinn</option>
                        </select>
                     </div>                    
                     <input name="minprice" type="text" placeholder="min" class="price" >
                     <input name="maxprice" type="text" placeholder="max" class="price" >
                     <br>                    
                     <input type="submit" class="lookgood_1 bt_ss" value="SEARCH">                  
                  </form>
               </div>      
<!-- DMITRI XXX!!!XXX -->
             </div>
             <br>
             <div class="search_res  col-xs-12 col-sm-9 col-md-9 col-lg-9">
                 <!--Result table-->
                 <!--Result map-->
                 <div class="notebook" id="notebook4">
                 <!-- notebook test container-->
                    <div class="tabs">
                       <div style="margin:0 auto;color:red;margin-top: 1px;">
                          <li onclick="switcToResults()" class="tab_1 col-xs-6">LIST</li>
                          <li onclick="switcToMap()" class="tab_1 col-xs-6">MAP</li>
                       </div>
                    </div>  
                    <div class="pages"id="page1">
                    <!-- Table -->
                      <li class="page">  
                        <div class="table-responsive">
                           <table class="table table-responsive">
                              <tr>
                                 <th>Doctor <span class="glyphicon glyphicon-arrow-up" aria-hidden="true"></span><span class="glyphicon glyphicon-arrow-down" aria-hidden="true"></span></th>
                                 <th>Clinic <span class="glyphicon glyphicon-arrow-up" aria-hidden="true"></span><span class="glyphicon glyphicon-arrow-down" aria-hidden="true"></span></th>
                                 <th>City <span class="glyphicon glyphicon-arrow-up" aria-hidden="true"></span><span class="glyphicon glyphicon-arrow-down" aria-hidden="true"></span></th>
                                 <th><span class="glyphicon glyphicon-euro" aria-hidden="true"> </span> <span class="glyphicon glyphicon-arrow-up" aria-hidden="true"></span><span class="glyphicon glyphicon-arrow-down" aria-hidden="true"></span></th>
                                 <th><span class="glyphicon glyphicon-star" aria-hidden="true"> </span> <span class="glyphicon glyphicon-arrow-up" aria-hidden="true"></span><span class="glyphicon glyphicon-arrow-down" aria-hidden="true"></span></th>
                              </tr>

<!-- DMITRI XXX!!!XXX-->

<?php
$town_req = "";
$service_req = "";
$district_req = "";
$inputService = "'Diagnosis of teeth'";
$inputDistrict = "All";

if (isset($_POST["townSelect"]) && !empty($_POST["townSelect"])){
   $inputTown = $_POST["townSelect"];
   $town_req = "town='".$inputTown."'";
}
if (isset($_POST["serviceSelect"]) && !empty($_POST["serviceSelect"])){
   $inputService = $_POST["serviceSelect"];
   $service_req = "and ".$inputService."<>'999'";
}
if (isset($_POST["districtSelect"]) && !empty($_POST["districtSelect"])){
   $inputDistrict = $_POST["districtSelect"];
   $district_req = "and district='".$inputDistrict."'";
}
$conn= new mysqli("localhost", "id1246705_user", "dentist", "id1246705_dentistbase");
$sql = "SELECT * FROM cliniclist WHERE $town_req $service_req $district_req";
echo "Showing results for:  Town: $inputTown  District: $inputDistrict  Service: $inputService";
$result = $conn->query($sql)
        or trigger_error($conn->error);
while ($row = $result->fetch_assoc()) {
    echo "<tr><td><a style=\"text-decoration:none;color:#fff0b4;\" href=\"".$row['doclink']."\">",$row['doctor'],"</a></td><td><a style=\"text-decoration:none;color:#fff0b4;\" href=\"".$row['doclink']."\">",$row['clinic'],"</a></td><td><a style=\"text-decoration:none;color:#fff0b4;\" href=\"".$row['doclink']."\">",$row['town'],"</a></td><td><a style=\"text-decoration:none;color:#fff0b4;\" href=\"".$row['doclink']."\">",$row[$inputService],"</a></td><td><a style=\"text-decoration:none;color:#fff0b4;\" href=\"".$row['doclink']."\">",$row['rating'],"</a></td></tr></div>";
}
?>
                           </table>
                        </div> 
                      </li>
                    </div> <!-- end table -->
                    <div class="page" id="page2">
                    <!-- map -->
                       <div class="img-responsive test" alt="Responsive image">
                         <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d32461.688565712957!2d24.748313590104548!3d59.43548392586756!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1shambakliinik!5e0!3m2!1sen!2see!4v1492711884377" width="100%" height="500vw" frameborder="0" style="border:0" allowfullscreen></iframe>
                       </div>
                    </div><!-- end map -->
                   
                 </div>  <!-- end notebook container -->              
             </div>  <!-- end search_res -->
     </div>
 </div>
   <!--end content_r-->
<br>
<br>
    <!--footer -->
<?php include("template_part_b.php"); ?>
