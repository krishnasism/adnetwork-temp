<?php
/*This class will be called when someone navigates to a website(?)*/
class GenerateAppShop
{
  function generate($appshopName,$requester)
  {
      require("db.php");
      $db_operations = new Database_Operations();
      $conn = $db_operations->connect();

      //$ownercheck= checkOwner($requester)
      //$checkSent = checkIfAlreadySent($requester)
      //$checkReceived = checkIfReceived($requester)
      $ownercheck = (new GenerateAppShop())->checkOwner($conn, $appshopName, $requester);

      $checkIfAlreadySent  = false; //temp

      $checkIfReceived = false; //temp

      $query = mysqli_query($conn, "SELECT * FROM adverts WHERE name = '$appshopName'");
      $exists = mysqli_num_rows($query);



    /*  if($ownercheck)
      {
          //redirect to another page
      }
      elseif($checkIfReceived)
      {
        //do something about it
      }
      elseif($checkIfAlreadySent)
      {
          //do something about it
      }
      else
      {*/

          if($exists==0)
          {
            //error 404
            return "null";
          }
          $rows = mysqli_fetch_assoc($query);

          $appshopData['name'] = $rows['name'];
          $appshopData['link'] = $rows['link'];
          $appshopData['owner'] = $rows['owner'];
          $appshopData['type'] = $rows['type'];
          $appshopData['description'] = $rows['description'];
          $appshopData['image'] = $rows['image'];

          return $appshopData;
    //  }



  }

  function checkOwner($conn,$adname, $requester)
  {
    /*
    If the requester is the owner, dont show request button
    return true if this is the owner
    return false if this is not the owner
    */

   

    $username = $_SESSION['username'];
    $query = mysqli_query($conn, "SELECT id FROM users WHERE username ='$username'");
    $rows = mysqli_fetch_assoc($query);
    $uid = $rows['id'];

    $query = mysqli_query($conn, "SELECT id FROM adverts WHERE name = '$adname'");
    $rows = mysqli_fetch_assoc($query);
    $adid = $rows['id'];

    $query = mysqli_query($conn, "SELECT adid FROM ad_own WHERE uid = '$uid'");
    $rows = mysqli_fetch_assoc($query);
    $adid_table = $rows['adid'];

    


    if($adid_table == $adid)
    {
      print('GenerateAppShop.php : You are the Owner<br><br>');
      return true;
    }
    else
    {
      print('GenerateAppShop.php : You are NOT the Owner<br><br>');
      return false;
    }

  }
  function checkIfAlreadySent($conn, $requester)
  {
    /*If the requester has already sent a request, redirect/ show him a message / status*/
    /*Return true if already sent, false if not sent*/
  }
  function checkIfReceived($conn, $requester)
  {
    /*If the requester has a pending request from this application / shop for an ad exchange
    return true, else return false*/
  }
  function typeIsSame($requester, $appshopName)
  {
    /*If the type of users are same, redirect, don't allow any interaction!*/
  }
  function getUserData($appshopName)
  {
    /*Get the user data to be displayed in the bio, etc*/
  }
}

?>
