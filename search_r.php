<?php include("template_part_a.php"); ?>
     <!--content_r-->
 <div class="container">
     <div class="content_r col-xs-12 col-sm-12 col-md-12 col-lg-12">
             <div class="search_filt  col-xs-12 col-sm-4 col-md-4 col-lg-4">
                 <p class="text-center"><span class="glyphicon glyphicon-filter" aria-hidden="true"> </span> FILTER YOUR RESULTS</p>
                 <!--City-->
                 <div class="dropdown dr_city">
                      <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        City
                        <span class="caret"></span>
                      </button>
                      <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <li><a href="#">Tallinn</a></li>
                        <li><a href="#">Tartu</a></li>
                        <li><a href="#">Narva</a></li>
                        <li><a href="#">Pärnu</a></li>
                      </ul>
                 </div>  
                 <!--District of the Tallinn-->
                 <div class="dropdown dr_d">
                      <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        District of the Tallinn
                        <span class="caret"></span>
                      </button>
                      <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <li><a href="#">Haabersti</a></li>
                        <li><a href="#">Kesklinn</a></li>
                        <li><a href="#">Kristiine</a></li>
                        <li><a href="#">Lasnamäe</a></li>
                        <li><a href="#">Mustamäe</a></li>
                        <li><a href="#">Nõmme</a></li>
                        <li><a href="#">Pirita</a></li>
                        <li><a href="#">Põhja-Tallinn </a></li>
                      </ul>
                 </div> 
                 <!--Package of services-->   
                 <div class="dropdown dr_p">
                      <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        Package of services
                        <span class="caret"></span>
                      </button>
                      <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <li><a href="#">Package № 1</a></li>
                        <li><a href="#">Package № 2</a></li>
                        <li><a href="#">Package № 3</a></li>
                        <li><a href="#">Package № 4</a></li>
                      </ul>
                 </div>
                 <!--Price-->
                 <p class="text-price"><span class="glyphicon glyphicon-euro" aria-hidden="true"> </span> Price</p>
                 <input type="range" min="0" max="1000" step="20" value="500">
                 <!--Doctor's rating-->
                 <p class="text-price"><span class="glyphicon glyphicon-star" aria-hidden="true"> </span> Doctor's rating</p>
                 <input type="range" min="1" max="5" step="1" value="3">
                 <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 bt_s">
                      <a href="#">Search</a>
                 </div>           
             </div>
             <div class="search_res  col-xs-12 col-sm-8 col-md-8 col-lg-8">
                 <!--Result table-->
                 <!--Result map-->
                 <div class="notebook" id="notebook4">
 <ul class="tabs">
  <li><a href="#page1">Result table</a></li>
  <li><a href="#page2">Result map</a></li>
  
 </ul>
 <ul class="pages">
  <li class="page" id="page1">  
   <!-- Table -->
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
  <li class="page" id="page2">
      <!-- map -->
   <img src="img/1.jpg" class="img-responsive" alt="Responsive image">
  </li>
  
 </ul>
</div>              
             </div> 
     </div>
 </div>
   <!--end content_r-->
    <!--footer -->
<?php include("template_part_b.php"); ?>
