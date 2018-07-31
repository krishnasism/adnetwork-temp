<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8"/>
        <meta content="initial-scale=1, width=device-width" name="viewport"/>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>


        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <title>AdNet</title>

    </head>

    <body>

   <?php
   if(!isset($_SESSION['username']))
    {
         include 'navbar/nav.php';
    }
    else
    {
               include 'navbar/loggedinnav.php';

    }
 ?>

   <div class="container">
  <div class="jumbotron">
    <h1>AdNet</h1>
    <p>Welcome to the advertising network which bridges the gap between offline and online. Let shops advertise on your app and get your app shown in shops!</p>
  </div>

</div>


    </body>
   </html>
