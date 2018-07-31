<?php
    session_start();
    if(!isset($_SESSION['username']))
    {
        header("location:login.php");
    }
    $username = $_SESSION['username'];
    $userid = $_SESSION['userid'];
    $api = $_SESSION['api'];

    require($_SERVER['DOCUMENT_ROOT'].'/adnetwork/classes/db.php');

    $db_operation = new Database_Operations();
    $conn = $db_operation->connect();

    require($_SERVER['DOCUMENT_ROOT'].'/adnetwork/classes/Dashboard.php');
    $dashboard = new Dashboard();

 ?>
<!DOCTYPE html>

<html lang="en">

    <head>
        <meta charset="utf-8"/>
        <meta content="initial-scale=1, width=device-width" name="viewport" user-scalable="no"/>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="css/styles.css" rel="stylesheet"/>
        <title>Dashboard</title>
    </head>
    <body>

   <?php
   include $_SERVER['DOCUMENT_ROOT'].'/adnetwork/navbar/loggedinnav.php';
   ?>

   <h1 align="center">Dashboard</h1><hr>
   <div class="row">
      <div class="col-sm-4" style="margin-left: 10px">
          <h3>Analytics</h3>
          <?php
            $dashboard->ads_own($conn);
          ?>
     </div>
     <div class="col-sm-4" style="margin-left: 10px">
       <h3>Ads being shown on my shop</h3>
       <?php
     		     $dashboard->display_ads_on_shop($conn);
       ?>
     </div>
   </div>
</body>
</html>
