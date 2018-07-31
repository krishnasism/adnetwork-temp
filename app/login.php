<?php
    session_start();
	  if(isset($_SESSION['username']))
    {
        header("location:account");
    }

    require($_SERVER['DOCUMENT_ROOT'].'/adnetwork/classes/LoginUser.php');
    $login_user_obj = new LoginUser();
    $login_user_obj->login_user();
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8"/>
        <meta content="initial-scale=1, width=device-width" name="viewport"/>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>

        <link href="css/styles.css" rel="stylesheet"/>

        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <title>AdNet:Login</title>

    </head>

    <body>
   <?php include $_SERVER['DOCUMENT_ROOT'].'/adnetwork/navbar/nav.php'; ?>

  <div class="container">
  <main>
    <h1>Login</h1>
    <form action="login" method="POST">
        <fieldset>
            <div class="form-group">
                <input autocomplete="off" autofocus class="form-control" name="username" placeholder="Username" type="text"/>
            </div>
            <div class="form-group">
                <input class="form-control" name="password" placeholder="Password" type="password"/>
            </div>
            <div class="form-group">
              <button class="btn btn-default" type="submit">Log In</button>
            </div>
          </fieldset>
    </form>
  </main>
  </div>

  
    </body>
   </html>
