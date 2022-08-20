<?php
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Booklet Online Bookstore</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <link rel="stylesheet" href="css/jquery-ui.min.css">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-3.2.0.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    <script>
  $( function() {
    $( "#datepicker" ).datepicker({dateFormat: "yy-mm-dd"});
  } );
  $( function() {
    $( "#datepicker1" ).datepicker({dateFormat: "yy-mm-dd"});
  } );
  </script>

  </head>
  <body>
  <nav class="navbar navbar-default navbar-fixed-top navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php" style="padding-left: 50px">Booklet</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <!-- <li ><a href="index.php">Books </a></li>
        <li ><a href="index.php">Best Sellers </a></li>
        <li ><a href="booking.php">Deals </a></li>
        <li ><a href="booking.php">New Releases </a></li> -->
        <li style="padding-left:350px">
        <form class="navbar-form navbar-left" action="search.php" method="post">
          <div class="form-group">
            <input type="text" name="txtSearch" class="form-control" placeholder="Search">
          </div>
          <button type="submit" name="btnSearch" class="btn btn-default">Search</button>
        </form>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      <li><a href="adminpanel.php">Admin</a></li>
      <li><a href="cart.php">Your Cart</a></li>
      <?php
      if(isset($_SESSION['uid'])){
        echo "<li style='padding-right: 20px'><a href='logout.php'>Sign Out</a></li>";
      }else{
        echo "<li style='padding-right: 20px'><a href='signin.php'>Sign In</a></li>";
      }
       ?>

        <!-- <li class="dropdown active">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sign In <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="Admin_Signin.php">Admin Sign In</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="Customer_Signin.php">Customer Sign In</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </li> -->
        <!-- <li style="padding-right: 20px">
          <a href="signin.php" type="button" class="btn btn-primary">Sign in</a>
        </li> -->
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
  </body>
</html>
