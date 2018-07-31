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
        <li class="" id = "dashboard"><a href="dashboard">Dashboard</a></li>
        <li class="" id="discover"><a href="discover">Discover</a></li> 
        <li class="" id="developers"><a href="developers">Developers</a></li>
        <li class="" id="createad"><a href="createad">Create</a></li> 

      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class = "" id="account"><a href="account"><span class="glyphicon glyphicon-user"></span> Account</a></li>
        <li class="" id="logout"><a href="logout"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

<script type="text/javascript">

    var pagePathName= window.location.pathname;
    var temp;
    pagename=pagePathName.substring(pagePathName.lastIndexOf("/") + 1);
    if(pagename == "account")
    {
      document.getElementById("account").classList.add('active');
    }
    else if(pagename == "discover")
    {
      document.getElementById("discover").classList.add('active');
    }
    else if(pagename =="dashboard")
    {
      document.getElementById("dashboard").classList.add('active');
    }
    else if(pagename == "about")
    {
      document.getElementById("about").classList.add('active');
    }

    else if(pagename == "index")
    {
      document.getElementById("home").classList.add('active');
    }
    else if(pagename == "developers")
    {
      document.getElementById("developers").classList.add('active');
    }
    else if(pagename == "createad")
    {
      document.getElementById("createad").classList.add('active');
    }

</script>