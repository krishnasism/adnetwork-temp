<?php
/*
 * Manage basic database operations.
 */
	class Database_Operations
	{
		/*
		* Establishes a connection with database and returns the connection to the caller
		*/
		function connect()
		{
			$configs = include($_SERVER['DOCUMENT_ROOT']."/adnetwork/config/config_db.php");

			$conn = mysqli_connect($configs['db_host'],$configs['db_user'],$configs['db_pass']);
			mysqli_select_db($conn, $configs['db_name']) or die(mysqli_error($conn));
			return $conn;
		}
	}
?>
