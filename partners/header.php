<!DOCTYPE html>
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<title>Rate My Dentist</title>

<!-- Bootstrap and jQuery  -->
<link href="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.3/js/bootstrap.min.js"></script>
<!-- CSS affecting all pages -->
<link rel="stylesheet" type="text/css" href="css/style.css" />
<!-- CSS for the navbar-->
<link rel="stylesheet" type="text/css" href="css/navbar.css" />
<!-- Include Bootstrap Multiselect CSS and JS -->
<link href="http://cdn.rawgit.com/davidstutz/bootstrap-multiselect/master/dist/css/bootstrap-multiselect.css" rel="stylesheet" type="text/css" />
<script src="http://cdn.rawgit.com/davidstutz/bootstrap-multiselect/master/dist/js/bootstrap-multiselect.js" type="text/javascript"></script>
<!-- CSS for forms -->
<link rel="stylesheet" type="text/css" href="css/forms.css" />
</head>

<body>
<div class="navbar navbar-blue navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand">Rate my Dentist</a>
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Dashboard</a></li>
        <li><a href="view-clinic-profile.php">Clinic profile</a></li>
        <li><a href="view-dentist-list.php">Dentist list</a></li>
        <li><a href="appointments.html">Appointments</a></li>
        <li><a href="view-reviews.php">Reviews</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php">Log out&nbsp;&nbsp;</a></li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</div>

<div class="container">
  <div class="row row-centered">
