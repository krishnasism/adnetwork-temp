<?php
  class GenerateAdvert
  {
    function generate($name)
    {
        require('db.php');
        $db_operations = new Database_Operations();
        $conn = $db_operations->connect();

        $query = mysqli_query($conn,"SELECT * FROM adverts WHERE name = '$name'");
        
    }
  }
?>
