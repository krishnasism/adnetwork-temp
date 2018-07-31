<?php
/* WORKFLOW
* Display apps/shops according to the type of user
* Always show alternative app/shop ads - e.g. developer should see shops & vice-versa
*
*/
class LoadDiscover
{

  function load($typeofaccount)
  {

    require('db.php');
    $db_operation = new Database_Operations();
    $conn = $db_operation->connect();

    $toshow = "";
    if($typeofaccount == "shop")
    {
       $toshow = "app";
    }
    else {
      $toshow = "shop";
    }


   $query = mysqli_query($conn,"SELECT * FROM adverts WHERE type='$toshow'") or die(mysqli_error($conn));
   $exists = mysqli_num_rows($query);


   $i = 0;
   if($exists>0)
     {
         while($row = mysqli_fetch_assoc($query))
         {
           print("<i><h2>  <a href=\"application/".$row['name']."\">".$row['name']."</a></h2></i>");
           print("<h4>".$row['owner']."</h4>");
           print("<p>".$row['description']."</p>");
           print("<hr>");
         }
     }
  }
}




 ?>
