<?php include("template_part_a.php"); ?>
     <!--content_r-->
 <div class="container">
     <div class="content_r col-xs-12 col-sm-12 col-md-12 col-lg-12">
             <div class="search_filt  col-xs-12 col-sm-4 col-md-4 col-lg-4">
                 <p class="text-center"><span class="glyphicon glyphicon-filter" aria-hidden="true"> </span> FILTER YOUR RESULTS</p>

                                    <form action="/search_r.php">
                    <br><br>
                    <select name="townSelect" class="lookgood_1">
                        <option value="Tallinn">Tallinn</option>
                        <option value="Tartu">Tartu</option>
                        <option value="Narva">Narva</option>
                        <option value="Parnu">Parnu</option>
                     </select>
                     <br><br>
                     <select name="districkSelect" class="lookgood_1" style="color:black;">
                        <option value="Haabersti">Haabersti</option>
                        <option value="Kesklinn">Kesklinn</option>
                        <option value="Kristiine">Kristiine</option>
                        <option value="Lasnamae">Lasnamae</option>
                        <option value="Mustamae">Mustamae</option>
                        <option value="Nomme">Nomme</option>
                        <option value="Pirita">Pirita</option>
                        <option value="Pxhja-Tallinn">Pxhja-Tallinn</option>
                     </select>
                     <br><br>
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
                     <input type="range" min="0" max="1000" step="20" value="500">
                     <br><br>
                     <input type="submit" class="lookgood_1" value="SEARCH!">
                     <br><br><br><br>
                  </form>
<!-- DMITRI XXX!!!XXX -->
             </div>
             <br>
             <div class="search_res  col-xs-12 col-sm-8 col-md-8 col-lg-8">
                 <!--Result table-->
                 <!--Result map-->
                 <div class="notebook" id="notebook4">
                 <!-- notebook test container-->
                    <div class="tabs">
                       <div style="width:50%;margin:0 auto;color:red;margin-top: 1px;">
                          <li onclick="switcToResults()" class="tab_1">RESULTS</li>
                          <li onclick="switcToMap()" class="tab_1">SHOW ON MAP</li>
                       </div>
                    </div>  
                    <div class="pages"id="page1">
                    <!-- Table -->
                      <li class="page">  
                        <div class="table-responsive">
                           <table class="table">
                              <tr>
                                 <th>Doctor<span class="glyphicon glyphicon-arrow-up" aria-hidden="true"></span><span class="glyphicon glyphicon-arrow-down" aria-hidden="true"></span></th>
                                 <th>Clinic<span class="glyphicon glyphicon-arrow-up" aria-hidden="true"></span><span class="glyphicon glyphicon-arrow-down" aria-hidden="true"></span></th>
                                 <th><span class="glyphicon glyphicon-euro" aria-hidden="true"></span></th>
                                 <th><span class="glyphicon glyphicon-star" aria-hidden="true"></span></th>
                              </tr>
                              <tr>
                                 <td>Result table</td>
                                 <td>Result table</td>
                                 <td>Result table</td>
                                 <td>Result table</td>
                              </tr>
                              <tr>
                                 <td>Result table</td>
                                 <td>Result table</td>
                                 <td>Result table</td>
                                 <td>Result table</td>
                              </tr>
                              <tr>
                                 <td>Result table</td>
                                 <td>Result table</td>
                                 <td>Result table</td>
                                 <td>Result table</td>
                              </tr>
                           </table>
                        </div> 
                      </li>
                    </div> <!-- end table -->
                    <div class="page" id="page2">
                    <!-- map -->
                         <img src="img/1.jpg" class="img-responsive" alt="Responsive image">
                    </div> <!-- end map -->
                   
                 </div>  <!-- end notebook container -->              
             </div>  <!-- end search_res -->
     </div>
 </div>
   <!--end content_r-->
    <!--footer -->
<?php include("template_part_b.php"); ?>
