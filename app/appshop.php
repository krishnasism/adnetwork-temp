<?php
  session_start();
  $username = $_SESSION['username'];
  $appname = $_GET['name'];

//  print($appname);
  /*Workflow
  * Get app name
  * Find app in apps table, get the uid
  * Get user data and display alongside application
  * Put a request button to partner with app
  * Send request to requests table /request uid adid receiver uid/
  */
  require($_SERVER['DOCUMENT_ROOT'].'/adnetwork/classes/GenerateAppShop.php');
  $generate = new GenerateAppShop();

  $data = $generate -> generate($appname,$username);
  if($data == "null")
  {
    //error 404
  }
  else {
    print($data['name']);
    print("<hr> ");
    print($data['description']);
  }
 ?>
 <html>
 </head><title><?php print($data['name']); ?></title></head>
 <body>

 </body>
 </html>
