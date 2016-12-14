<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="Profile.php">
          <img src="images/gologo.png" class="img-responsive navlogo" alt="logo">
        </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="charts.php">Charts</a></li>
      </ul>
     <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="search" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Go</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
          
        <li><div class="btn-group">
  <button type="button" class="btn btn-signin navbar-btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   Welcome, <?php echo $logged_in->Fname ?> <?php echo $logged_in->Lname ?><span class="caret"></span>
  </button>
  <ul class="dropdown-menu">
    <li><a href="profile.php">My Profile</a></li>
    <li><a href="Upload.php">Uploads</a></li>
    <li><a href="fav.php">Favourites</a></li>
    <li><a href="settings.php">Settings</a></li>  
    <li role="separator" class="divider"></li>
    <li><a href="singOut.php">Log Out</a></li>
  </ul>
</div></li>  
        <li class="or"></li>
        <li><button type="button" class="btn btn-createacc navbar-btn" data-toggle="modal" data-target="#myModal">Upload song</button>
           

         </li>  
      </ul>
      

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>