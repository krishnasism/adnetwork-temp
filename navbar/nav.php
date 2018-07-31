<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="#">AdNet</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="" id = "home"><a href="index">Home</a></li>
        <li class="" id = "join"><a href="#">Why Join Us?</a></li>
        <li class = "" id = "about"><a href="#">About</a></li> 
        <li class="" id="contact"><a href="#">Contact</a></li> 
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class = "" id="register"><a href="register"><span class="glyphicon glyphicon-user"></span> Register</a></li>
        <li class="" id="login"><a href="login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>

<script type="text/javascript">

    var pagePathName= window.location.pathname;
    var temp;
    pagename=pagePathName.substring(pagePathName.lastIndexOf("/") + 1);
    if(pagename == "login")
    {
      document.getElementById("login").classList.add('active');
    }
    else if(pagename == "register")
    {
      document.getElementById("register").classList.add('active');
    }
    else if(pagename == "index")
    {
      document.getElementById("home").classList.add('active');
    }
    else if(pagename == "contact")
    {
      document.getElementById("contact").classList.add('active');
    }
    else if(pagename == "about")
    {
      document.getElementById("about").classList.add('active');
    }

</script>