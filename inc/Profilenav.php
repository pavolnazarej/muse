
     <div class="col-md-4">
         <?php echo "<img src='Profile/Pictures/$logged_in->Picture' class='img-responsive jakub img-thumbnail' alt='profile image'>";?>
         <h3>Hello, <?php echo $logged_in->Fname; ?> <?php echo $logged_in->Lname; ?>  </h3>
         
         <div class="profilenav">
         <ul>
    <li><a href="Profile.php">My Profile</a></li>
    <li><a href="Upload.php">Uploads</a></li>
    <li><a href="fav.php">Favourites</a></li>
    <li><a href="settings.php">Settings</a></li>
    <hr>
    <li><a href="singOut.php">Log Out</a></li>
  </ul>
         </div>
         </div>
     
         
       