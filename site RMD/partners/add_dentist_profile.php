<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Rate my dentist</title>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/jquery-3.2.0.min.js"></script>
    <script src="js/bootstrap.js"></script>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/rmd.css" rel="stylesheet">
    <!-- css for sidebar-->
	  <link href="css/sidebar.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
<!--page wrapper <div>-->
  <div id="wrapper">	
  	<!--Sidebar-->
			<div id="sidebar-wrapper">
				<ul class="sidebar-nav">
				<li><a href="#.html">Dashboard</a></li>
				<li><a href="#.html">Edit clinic profile</a></li>
				<li><a href="#.html">Dentist list</a></li>
				<li><a href="#.html">Appointments</a></li>
				<li><a href="#.html">View reviews</a></li>
				</ul>
			</div>
    <!--menu-->
    <!--<div class="container">-->
	<!-- page-content-wrapper -->
	<div id="page-content-wrapper">
      <!-- Static navbar -->
      <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
		  <a href="#" class="btn btn-success" id="menu-toggle">Toggle menu</a>
      <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav col-lg-9 col-md-8 col-sm-8">	
			   <a class="col-xs-12 col-sm-2 col-md-2 col-lg-3" href="index.html">Main page</a>
      </ul>
      <ul class="nav navbar-nav navbar-right col-lg-3 col-md-4 col-sm-4">
          <a class="col-xs-12 col-sm-3 col-md-3 col-lg-3" href="index.html">Log out</a>
      </ul>
      </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
  <!--  </div> <!--/.container -->
  <!--end menu-->
  <div class="row">
	  <div class="col-sm-6 col-md-3 col-lg-3">
    
	  </div>
  </div>
    
  <!--footer -->
  <footer id="footer">
    <div class="container">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><p class="text-center">
        Metro plaza, 2nd floor, Viru square, Tallinn 
        <br>+372 5642969 info@ratemydentist.ee 
        <br>Monday - Sunday 8:00 - 21:00
        <br>&copy; Rate My Dentist 2017</p>
      </div>
    </div>
  </footer>
  <!-- end footer -->
</div>
   <!-- end page-content-wrapper -->
   </div>
   <!--wrapper end-->
   <!--Menu toggle script-->
   <script>
		$("#menu-toggle").click( function (e){
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
   </script>
  </body>
  
</html>
