<?php
    session_start();
    if(!isset($_SESSION['username']))
    {
        header("location:login.php");
    }
    $api = $_SESSION['api'];
 ?>
<!DOCTYPE html>

<html lang="en">

    <head>
        <meta charset="utf-8"/>
        <meta content="initial-scale=1, width=device-width" name="viewport"/>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>


        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <link href="css/styles.css" rel="stylesheet"/>


        <title>Developers</title>


    </head>

    <body>
   <?php include $_SERVER['DOCUMENT_ROOT'].'/adnetwork/navbar/loggedinnav.php'; ?>
<h1 align="center">Developers</h1>
<hr>
<h4 align="center"><i>For Websites</i></h4>
<div class="container">
  <form>
    <div class="form-group">
      <label for="comment">Embed this code within head tag:</label>
      <textarea class="form-control" rows="2" id="comment" readonly><?php
        print("<script src=\"https://code.jquery.com/jquery-3.1.1.min.js\"></script>");
       ?></textarea>
    </div>
  </form>
</div>


<div class="container">
  <form>
    <div class="form-group">
      <label for="comment">Embed this code within body tag:</label>
      <textarea class="form-control" rows="8" id="comment" readonly><?php
        print("<div id = \"adnet-ad-placement-banner\" class = \"adnet-ad-placement-banner\" style=\"display=block; height: 100%; width: 80%; margin:20px;\">
  <script>
    $.get(\"banner.php?api=".$api."\", function(response)
     {
        document.getElementById('adnet-ad-placement-banner').innerHTML = response;
  });
  </script>
</div>");
       ?></textarea>
    </div>
  </form>
</div>
<hr>
<h4 align="center"><i>For Android</i></h4>
<div class="container">
  <form>
    <div class="form-group">
      <label for="comment">Add this function to any activity you want the ad to be displayed in:</label>
      <textarea class="form-control" rows="15" id="comment" readonly><?php
         print("public void displayAd(View view)
{
    AlertDialog.Builder alert = new AlertDialog.Builder(this);
    alert.setTitle(\"Alfaload Ad\");

    WebView wv = new WebView(this);
    wv.loadUrl(\"http://www.alfaload.com\");
    wv.setWebViewClient(new WebViewClient() {
        @Override
        public boolean shouldOverrideUrlLoading(WebView view, String url) {
            view.loadUrl(url);

            return true;
        }
    });

    alert.setView(wv);
    alert.setNegativeButton(\"Close\", new DialogInterface.OnClickListener() {
        @Override
        public void onClick(DialogInterface dialog, int id) {
            dialog.dismiss();
        }
    });
    alert.show();
}); ");
       ?></textarea>
    </div>
  </form>
</div>


<div class="container">
  <form>
    <div class="form-group">
      <label for="comment">Call the function, on a button click, onAwake, onDestroy(), onCreate() etc.</label>
      <textarea class="form-control" rows="2" id="comment" readonly><?php
        print("displayAd(this.findViewById(android.R.id.content));");
       ?></textarea>
    </div>
  </form>
</div>


    </body>
   </html>
