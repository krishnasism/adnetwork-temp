<?php
/*
* Manages the dashboard of the user.
*/
/* Workflow
* Get the type of account of the user from Sessions
* Generate alternate list of ads. e.g. -> apps will see shops and vice versa
* Generate link to the specific app/shop
*/
class Dashboard
{
    function ads_own($conn)
    {
      $userid =$_SESSION['userid'];
      $query = mysqli_query($conn,"SELECT * FROM ad_own WHERE uid = '$userid'");
      $exists = mysqli_num_rows($query);
      if($exists == 0)
      {
        print("<h3>You don't have any active ads</h3>");
      }
      else
      {
        while($row = mysqli_fetch_assoc($query))
        {
          $adid = $row['adid'];

          $query_ad = mysqli_query($conn,"SELECT name FROM adverts WHERE id = '$adid'");
          $row_ad = mysqli_fetch_assoc($query_ad);
          print("<h5>".$row_ad['name']."</h5>");
          print("<p>Eyeballs : ".$row['eyeballs']." Clicks : ".$row['clicks']);
        }
      }
    }
    //display shop ads _ just for test
    function display_ads_on_shop($conn)
    {
      $userid =$_SESSION['userid'];
      $query = mysqli_query($conn,"SELECT * FROM ad_conn WHERE uid = '$userid'");
        $exists = mysqli_num_rows($query);
        if($exists == 0)
        {
          print("<h2>No ads are being shown</h2>");
        }
        else
        {
          while($rows = mysqli_fetch_assoc($query))
          {
            $adid=$rows['adid'];
            $query_ad = mysqli_query($conn,"SELECT * FROM adverts WHERE id ='$adid'");
            $rows_ad = mysqli_fetch_assoc($query_ad);
            print("<h4>".$rows_ad['name']."</h4>");
          }
        }
      }
}
?>
