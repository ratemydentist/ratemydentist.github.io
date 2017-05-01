<?php include("template_part_a.php"); ?>
     <!--content_r-->
 <div class="container">
     <div class="content_r col-xs-12 col-sm-12 col-md-12 col-lg-12">
       
       <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 text-center">
            <a href="/doctor.php">
               <p class="ref_doctor"> <span class="glyphicon glyphicon-menu-right" aria-hidden="true"> </span> Info and Boking</p>
            </a>
            <a href="#">
              <img class="img-responsive img_d text-center" src="img/504.jpg_frame%20(15).jpg" alt="photo doctor">
            </a>
            <p class="doctor">Doctor's name:</p>
            <p class="name_doctor">Ksenia_Ovchinnikova</p>
          </div>
          
          <div class="col-xs-12 col-sm-10 col-md-10 col-lg-10 ">
              <p class="h_info"><span> Write a review</span></p> 
                 <div class="row">
                         <div class="col-xs-12" >
                             <input class="col-xs-12 col-md-6 title_review" name="titlereview" type="text" placeholder="Title your review" > 
                         </div>
                         <div class="col-xs-12" >
                             <span class="glyphicon glyphicon-star col-xs-7 col-md-3 star" aria-hidden="true"> Rate your review</span>
                            <select name="districtSelect" class="lookgood_1 dr_down_star col-xs-2 col-md-1">
                               <option cass="dr_down_star" value="star5">
                                   5
                               </option>
                               <option cass="dr_down_star" value="star4">
                                   4
                               </option>
                               <option cass="dr_down_star" value="star3">
                                   3
                               </option>
                               <option cass="dr_down_star" value="star2">
                                   2
                               </option>
                               <option cass="dr_down_star" value="star1">
                                   1
                               </option>
                            </select>
         <!--
                              <p><span class="glyphicon glyphicon-star" aria-hidden="true"></span> <input name="starreview" type="text" placeholder="Rate your review (1,2,3,4,5)" class="star_review" ></p>-->
                         </div>
                     <div class="col-xs-12 col-md-2" >       
                     </div>
                         <div class="col-xs-12" > 
                              <textarea name="textreview" type="text" placeholder="Your review" class="text_review col-xs-12"></textarea>
                         </div>   
                         <div class="col-xs-12" >
                            <input type="submit" class="lookgood_1 bt_ss" value="Continue"> 
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
