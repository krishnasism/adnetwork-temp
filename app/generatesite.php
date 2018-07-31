<?php
/* NOTE : Check if an user is loggged in over here. do a navbar -  something like wordpress ! */

require($_SERVER['DOCUMENT_ROOT'].'/adnetwork/classes/GenerateWebsite.php');
$generate = new GenerateWebsite();

$uri = $_GET['uri'];

//get data about the website - userdata, theme path, website contents
$data=$generate->getData($uri);
if($data=="null")
{
  header("location:error404");
  die(); //does this work?
}

//generate the website with the given theme
include($_SERVER['DOCUMENT_ROOT'].'/adnetwork/websitetemplates/'.$data['themename'].'.php');

?>
