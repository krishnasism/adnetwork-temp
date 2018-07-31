<?php
/*
* Login user to the system. Store session data.
*/
class LoginUser
{
    function login_user()
    {

     if($_SERVER["REQUEST_METHOD"] == "POST")
      {
        require ($_SERVER["DOCUMENT_ROOT"].'/adnetwork/classes/db.php');


      $username = "";
      $password = "";
      $table_username="";
      $table_password="";
      $username = $_POST['username'];
      $password = md5($_POST['password']);

      $db_operations = new Database_Operations();
      $conn = $db_operations->connect();

      $query = mysqli_query($conn,"SELECT * FROM users WHERE username = '$username'");
      $exists = mysqli_num_rows($query);

         if(!($exists>0))
         {
            session_destroy();
            print("<script>alert(\"Invalid username or password!\");</script>");
            header("location:login");
         }

        while($row = mysqli_fetch_assoc($query))
        {
          $table_username = $row['username'];
          $table_password = $row['password'];

          if($table_username == $username)
          {
            if($table_password = $password)
            {
              print("<script>alert(\"You are logged in!\");</script>");
              $_SESSION['username'] = $username;
              $_SESSION['fname'] = $row['fname'];
              $_SESSION['lname'] = $row['lname'];
              $_SESSION['organisation'] = $row['organisation'];
              $_SESSION['typeofaccount'] = $row['typeofaccount'];
              $_SESSION['email'] = $row['email'];
              $_SESSION['userid'] = $row['id'];
              $_SESSION['api'] = $row['api'];

              header("location:account");
            }
            else
            {
              session_destroy();
              print("<script>alert(\"Invalid username or password!\");</script>");
              header("location:login");
            }
          }
        }
      }

    }
  }
  ?>
