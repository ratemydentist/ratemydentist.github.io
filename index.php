<?php include("template_part_a.php"); ?>
    <!--logo-->
    <div class="container">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><p class="text-center logo_rmd">Rate my Dentist</p></div>
    </div>
    <!--endlogo-->
    <!-- search -->
    
    <br><br><br>
    <div class="row" style="color:black;">
       <div class="col-md-4"></div>
       <div class="col-md-4 text-center">
                  <form action="/search_r.php">
                     <select name="serviceSelect" class="lookgood_1">
                        <option value="Diagnosis_of_teeth">Diagnosis of teeth</option>
                        <option value="Correction_of_occlusion">Correction of occlusion</option>
                        <option value="Dental_treatment">Dental treatment</option>
                        <option value="Implantation_of_teeth">Implantation of teeth</option>
                        <option value="Childrens_dentistry">Children's dentistry</option>
                        <option value="Tooth_whitening">Tooth whitening</option>
                        <option value="Periodontology">Periodontology</option>
                        <option value="Prosthetic_dentistry">Prosthetic dentistry</option>
                        <option value="Surgical_stomatology">Surgical stomatology</option>
                        <option value="Aesthetic_dentistry">Aesthetic_dentistry</option>
                     </select>
                     <br><br>
                     <select name="townSelect" class="lookgood_1">
                        <option value="Tallinn">Tallinn</option>
                        <option value="Tartu">Tartu</option>
                        <option value="Narva">Narva</option>
                        <option value="Parnu">PÃÂ¤rnu</option>
                     </select>
                     <br><br>
                     <input type="submit" class="lookgood_1" value="SEARCH!">
                  </form>
       </div>
       <div class="col-md-4"></div>
    </div>
     
   <!-- end search -->
   <!--footer-->
<?php include("template_part_b.php"); ?>
