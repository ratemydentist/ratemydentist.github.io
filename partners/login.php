<!DOCTYPE html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Rate My Dentist</title>

<!-- Bootstrap and jQuery  -->
<link href="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.3/js/bootstrap.min.js"></script>
<!-- CSS affecting all pages -->
<link rel="stylesheet" type="text/css" href="css/style.css" />
<!-- CSS for the navbar and sidebar-->
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
      <ul class="nav navbar-nav navbar-right">
        <li><a href="login.php">Log in</a></li>
        <li><a href="register.php">Register&nbsp;&nbsp;</a></li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</div>

<div class="container">
  <div class="row row-centered">
  <div class="col-xs-12 col-md-4 col-md-offset-4 col-lg-4 col-lg-offset-4">
  	<form method="post" action="index.php">
    <div class="text-center">
    <h2>Login</h2>
    </div>
    <div class="form-group">
        <div class="inputGroupContainer">
        <label for="first_name">Username</label>
        <input class="form-control" type="text" name="username" id="username" required>
        </div>
    </div>

    <div class="form-group">
        <div class="inputGroupContainer">
        <label for="first_name">Password</label>
        <input class="form-control" type="password" name="password" id="password" required>
        </div>
    </div>

    <div class="form-group text-center">
        <br><input type="submit" value="Login">
    </div>
  </div>
 <?php include 'footer.php'; ?>