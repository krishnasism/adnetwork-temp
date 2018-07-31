<?php
	require ($_SERVER['DOCUMENT_ROOT'].'/adnetwork/classes/AdOperations.php');
	//Store header information from originating traffic
	$ad_click_pc = new AdOperations();
	//register ad click
	$ad_click_pc -> ad_click();
?>
