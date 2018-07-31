<?php
    session_start();
    if(!isset($_SESSION['username']))
    {
        header("location:login.php");
    }

    $username = $_SESSION['username'];
    $userid = $_SESSION['userid'];
    $api = $_SESSION['api'];

   	/*require ($_SERVER['DOCUMENT_ROOT'].'/adnetwork/classes/db.php');

   	$db_operation = new Database_Operations();
   	$conn = $db_operation->connect();*/

    require($_SERVER['DOCUMENT_ROOT'].'/adnetwork/classes/AdOperations.php');
         $adoperations = new AdOperations();
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

   <form action="createad" method="POST">
    <input type = "text" name = "adname" placeholder="ad name">
    <input type = "text" name = "adimg" placeholder="ad img">
    <input type = "text" name = "adlink" placeholder="ad link">
    <input type = "text" name = "addesc" placeholder="ad addesc">
    <input type = "text" name = "adtype" placeholder="ad adtype">
    <input type = "submit" value="Submit">
   </form>
    </body>
   </html>

<?php

       if($_SERVER["REQUEST_METHOD"] == "POST")
       {
         $adoperations->createad();
       }

?>