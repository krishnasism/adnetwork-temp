<style type="text/css">
	.ad_img_adnet
	{
		width: 100%;
		height: 100%;
	}
</style>
<?php

			require ($_SERVER['DOCUMENT_ROOT'].'/adnetwork/classes/AdOperations.php');

			$adview = new AdOperations();
			$stuff = $adview -> ad_view($_GET['api']);

			//get stuff from stuff
			$img_path = $stuff[0];
			$adid = $stuff[1];
			$uid = $stuff[2];

			if($img_path == "null")
			{
				print("Ad could not be loaded.");
			}
			else
			{
				//super bad encryption(or not!)
				$uid += 78548789;
				$adid +=788988712;

				print("<a href = \"adclick.php?uid=".$uid."&adid=".$adid."\"/>");
				print("<img class=\"ad_img_adnet\" src =\"".$img_path."\"></img>");
				print("</a>");
				print($_SERVER['HTTP_REFERER']);
				print("<br>");
				print($_SERVER['HTTP_USER_AGENT']);
				print("<br>");
				print($_SERVER['REMOTE_ADDR']);
			}
?>
