<?php
         require($_SERVER['DOCUMENT_ROOT'].'/adnetwork/classes/RegisterUser.php');
         $register_user_obj = new RegisterUser();
         $register_user_obj->register_user();
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

        <title>AdNet:Register</title>

    </head>

    <body>
   <?php include $_SERVER['DOCUMENT_ROOT'].'/adnetwork/navbar/nav.php'; ?>

        <div class="container">


  <main>
    <h1>Register</h1>
    <form action="register" method="post">
        <fieldset>
            <div class="form-group form-inline">
                <input autocomplete="off" autofocus class="form-control" name="fname" placeholder="First Name" type="text"/>

                 <input autocomplete="off" autofocus class="form-control" name="lname" placeholder="Last Name" type="text"/>
            </div>

            <div class="form-group col-xs-16 form-inline">
                <input autocomplete="off" autofocus class="form-control" name="email" placeholder="E-mail" type="text"/>
            </div>
            <div class="form-group">
                <input autocomplete="off" autofocus class="form-control" name="username" placeholder="Username" type="text"/>
            </div>
            <div class="form-group">
                <input autocomplete="off" autofocus class="form-control" name="organisation" placeholder="Organisation Name" type="text"/>
            </div>
            <div class="form-group">
                <input class="form-control" name="contact" placeholder="Contact Number" type="number"/>
            </div>
            <div class="form-group">
                <input class="form-control" name="password" placeholder="Password" type="password"/>
            </div>
            <div class="form-group">
                <input class="form-control" name="conf_password" placeholder="Confirm Password" type="password"/>
            </div>
            <div class="radio">
    <label><input type="radio" name="type" value = "developer"> Developer</label>
            <div class="form-group">
       <div class="radio">

                <label><input type="radio" name="type" value="offline"> Offline-Business</label>
            <div class="form-group">
            <br>
                <button class="btn btn-default" type="submit">Register</button>
            </div>
        </fieldset>
    </form>

            </main>

        </div>

    </body>

</html>
