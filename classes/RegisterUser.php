<?php
/*
* Register user to the database. Also, perform some validations[[YET TO BE IMPLEMENTED]].
*/
	class RegisterUser
	{
		function register_user()
		{
			if($_SERVER["REQUEST_METHOD"] == "POST")
            {
                require($_SERVER['DOCUMENT_ROOT'].'/adnetwork/classes/db.php');

                $username = $_POST['username'];
                $password = md5($_POST['password']);
                $fname = $_POST['fname'];
                $lname = $_POST['lname'];
                $email = $_POST['email'];
                $organisation = $_POST['organisation'];
                $contact = $_POST['contact'];
                $type = $_POST['type'];
                $api = md5($username);


                $db_operation = new Database_Operations();
                $conn = $db_operation->connect();

                $query = mysqli_query($conn, "SELECT * FROM users WHERE username='$username'") or die($conn);
                $exists = mysqli_num_rows($query);
                $flag = true;
                if($exists > 0)
                {
                    $flag = false;
                }

                if(!$flag)
                {
                    header("location:register");
                }
                else
                {
                    mysqli_query($conn,"INSERT INTO users(fname,lname,username,password,organisation,contact,email,typeofaccount,api) VALUES('$fname','$lname','$username','$password','$organisation','$contact','$email','$type','$api')") or die(mysqli_error($conn));
										header("location:login");
                }
            }
		}
	}
?>
