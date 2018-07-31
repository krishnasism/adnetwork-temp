<?php
  /*Check if user is logged in*/
  session_start();
  if(!isset($_SESSION['username']))
  {
    header("location:login.php");
  }
  $configs = include($_SERVER['DOCUMENT_ROOT']."/adnetwork/config/config.php");
?>
<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8"/>
  <meta content="initial-scale=1, width=device-width" name="viewport"/>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>

  <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <title>Account</title>
</head>

<body>

  <?php
  //Include navigation bar
  include ($configs['system_path'].'/adnetwork/navbar/loggedinnav.php');
 ?>

  <div class="row">
    <div class="col-sm-4" style="margin-left: 10px">

      <img src="https://www.w3schools.com/bootstrap/paris.jpg" class="img-rounded" alt="Cinque Terre" width="230" height="230">
      <h1><?php print($_SESSION['fname']. " ".$_SESSION['lname']); ?> </h1>
      <h4><?php print($_SESSION['username']);?></h4>
      <h5><?php print($_SESSION['email']);?></h4>

      </div>
    </div>
  </body>
</html>
