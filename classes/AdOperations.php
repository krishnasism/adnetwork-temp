<?php
/**
*   Developed by Krishnasis Mandal.
*   ©All Rights Reserved.
*   This class performs operations with and on advertisements.
*   Serving ads, storing ad clicks and eyeballs.
*   26-08-2017 - Data is unprocessed. Need to process the data. Github issue #2
**/
class AdOperations
{
  /*
  * This function updates the number of clicks in ad_own table.
  * Data is unprocessed.
  * Also, stores meta data about click origin into intermediate table, for future processing.
  */
  function ad_click()
  {

    $adid = $_GET['adid'] - 788988712;
  	$uid = $_GET['uid'] - 78548789;

    require ($_SERVER['DOCUMENT_ROOT'].'/adnetwork/classes/db.php');
    $db_operation = new Database_Operations();
    $conn = $db_operation->connect();

    $referrer = $_SERVER['HTTP_REFERER'];
  	$browser = $_SERVER['HTTP_USER_AGENT'];
  	$ip = $_SERVER['REMOTE_ADDR'];
  	$time = $_SERVER['REQUEST_TIME'];
  	$location = "Kolkata";

    $query = mysqli_query($conn,"UPDATE ad_own SET clicks = clicks + 1 WHERE adid = '$adid'") or die (mysqli_error($conn));
    $query_link = mysqli_query($conn,"SELECT link from adverts WHERE id = '$adid'");
    $row = mysqli_fetch_assoc($query_link);

    $query_process = mysqli_query($conn, "INSERT INTO processing_ad(adid, referrer, ip, time_origin, browser, location) VALUES('$adid','$referrer','$ip','$time','$browser','$location')") or die(mysqli_error($conn));


    print("<script>window.location=\"".$row['link']."\"</script>");
  }

  /*
  * Function responsible for displaying advertisement to the calling script.
  */
  function ad_view($api)
  {
    require ($_SERVER['DOCUMENT_ROOT'].'/adnetwork/classes/db.php');

  	$db_operation = new Database_Operations();
  	$conn = $db_operation->connect();

  	$img_path = ""; //stores the path of the image to be displayed.

    //select the user who has supplied api. api is md5(username). auto generated on registration/[payment](?)
  	$query = mysqli_query($conn, "SELECT id FROM users WHERE api='$api'");
  	$exists = mysqli_num_rows($query);

    //api key is matched with user. i.e., an user exists w/ this api key
  	if($exists>0)
  	{
  		$rows = mysqli_fetch_assoc($query);
  		$uid = $rows['id']; //user id associated with the api


      //get the ad associated with the user from connected ad table.
  		$query_ad = mysqli_query($conn, "SELECT adid FROM ad_conn WHERE uid='$uid'") or die(mysqli_error($conn));
  		$exists_ad = mysqli_num_rows($query_ad);
  		if($exists_ad>0)
  		{
  			$rows_ad = mysqli_fetch_assoc($query_ad);
  			$adid = $rows_ad['adid']; //adid associated with user id

        //select the advertisement image with the given adid
  			$query_ad_img = mysqli_query($conn, "SELECT image FROM adverts WHERE id = '$adid'");

  			$rows_img = mysqli_fetch_assoc($query_ad_img);
  			$img_path = $rows_img['image'];

         $this -> eyeballs($conn,$adid);

        return array($img_path,$adid,$uid);

      }
    }
      else
      {
        return array("null",0,0); //nothing was found in database.
      }
    }

 /*
 * Function responsible for storing the number of views on an advertisement. [[UNPROCESSED]]
 */
 function eyeballs($conn,$adid)
  {
    $query_eyeball = mysqli_query($conn, "UPDATE ad_own SET eyeballs = eyeballs + 1 WHERE adid = '$adid'") or die(mysqli_error($conn));
  }


  function createAd()
  {
      require('db.php');
    /*First input these stuff into the adverts table*/
        $adname = $_POST['adname'];
        $adimg = $_POST['adimg'];
        $adowner = $_POST['adowner'];
        $adlink = $_POST['adlink'];
        $addescription = $_POST['addesc'];
        $adtype = $_POST['adtype'];


        $db_operation = new Database_Operations();
        $conn = $db_operation->connect();

        $query = mysqli_query($conn, "INSERT into adverts(name,link,owner,type,description,image) VALUES('$adname', '$adlink', '$adowner', '$adtype', '$addescription', '$adimg')") or die(mysqli_error($conn));

       

    /*Now update every table related to this, i.e., ad_own*/
    $username = $_SESSION['username'];
    $query = mysqli_query($conn, "SELECT id FROM users WHERE username = '$username'") or die(mysqli_error($conn)); 

    $rows = mysqli_fetch_assoc($query);
    $uid = $rows['id'];



    $query = mysqli_query($conn, "SELECT id FROM adverts WHERE name = '$adname'") or die(mysqli_error($conn));
    $rows = mysqli_fetch_assoc($query);
    $adid = $rows['id'];

    $query = mysqli_query($conn, "INSERT into ad_own(uid,adid) VALUES('$uid','$adid')") or die(mysqli_error($conn));
    


    //Redirect to discover page.. or somewhere else!! 
    header('location:discover');
  }
}

?>
