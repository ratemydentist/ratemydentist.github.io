<?php include("template_part_a.php"); ?>
    <!--logo-->
    <div class="container">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><p class="text-center logo_rmd">Rate my Dentist</p></div>
    </div>
    <!--endlogo-->
    <!-- search -->
    
    <br><br><br>
    <div class="row" style="color:black;">
       
       <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center search_p">
                  <form action="/search_r.php" method="post">
                     <select name="serviceSelect" class="lookgood_1 " style="color:black;">
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
                     
                     <select name="townSelect" class="lookgood_1">
                        <option value="Tallinn">Tallinn</option>
                        <option value="Tartu">Tartu</option>
                        <option value="Narva">Narva</option>
                        <option value="Parnu">Parnu</option>
                     </select>
                     
                     <input type="submit" class="lookgood_1 bt_ss" value="SEARCH">
                  </form>
       </div>
       
    </div>
     
   <!-- end search -->
   <!--footer-->
<?php include("template_part_b.php"); ?>
