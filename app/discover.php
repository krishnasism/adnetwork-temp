<?php
    session_start();
    if(!isset($_SESSION['username']))
    {
        header("location:login.php");
    }
    //require($_SERVER['DOCUMENT_ROOT'].'/adnetwork/classes/db.php');
    require($_SERVER['DOCUMENT_ROOT'].'/adnetwork/classes/LoadDiscover.php');
    //print($_SESSION['typeofaccount']);
 ?>
<!DOCTYPE html>

<html lang="en">

    <head>
        <meta charset="utf-8"/>
        <meta content="initial-scale=1, width=device-width" name="viewport"/>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>


        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <link href="css/styles.css" rel="stylesheet"/>


        <title>AdNet:Login</title>

    </head>

    <body>
   <?php include $_SERVER['DOCUMENT_ROOT'].'/adnetwork/navbar/loggedinnav.php'; ?>
   <h1 align="center">Discover</h1>
   <hr>

   <div class="row">
  <div class="col-sm-8" style="margin-left: 10px">
    <?php
      $ld = new LoadDiscover();
      $ld->load($_SESSION['typeofaccount']); // send type of account here
    ?>
  </div>
  <div class="col-sm-4" style="margin-left: 10px">
  </div>


</div>

    </body>
   </html>
