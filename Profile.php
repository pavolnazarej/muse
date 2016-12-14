<?php 
session_start();
include "inc/db.php";
include_once "inc/functions.php";

$logged_in_id = $_SESSION["UserID"];

    $number=1;
    $sql = "SELECT * FROM Music WHERE Genre='rock'";
   $result = $pdo->query($sql);


//$logged_in_id =  18;
$logged_in = getProfile($pdo, $logged_in_id);
$number=1;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Profile</title>
   
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

   
  </head>
  <body>
    <!-- NAVIGATION STARTS HERE -->
      
     <?php include "inc/nav2.php" ?>

      <!-- NAVIGATION ENDS HERE -->
      
      
      
      <!-- CONTENT STARTS HERE -->
      <hr>
    <div class="container registercontent">
     <div class="row">
     <?php include "inc/Profilenav.php" ?>
         <div class="col-md-offset-1 col-md-7" id="registerdiv">    
         <h1>Top picks for you:  </h1>
         <?php
    
     while($oneSong = $result->fetchObject()){
         ?> <div class="row">    
            <hr>
            <div class="col-md-1">
                <h1><?php echo $number; $number++; ?>.</h1>  
                </div>    
            <div class="col-md-3">  
            <img src="Profile/Music/Image/default.png" class="img-responsive album" alt="default image">
            </div>
            <div class="col-md-offset-1 col-md-7">
            <h3><?php echo $oneSong->Artist;?>-<?php echo $oneSong->SongName; ?></h3>
            <audio controls>
  <source src="Profile/Music/<?php echo $oneSong->SongFile; ?>" type="audio/mpeg">

</audio>
            </div>
             </div>     
            <hr>
                
            <?php
     }
      ?>
         
         </div> 
          </div>
      </div>
      
   
    <hr>
    <!-- FOOTER STARTS HERE -->
  <?php include "inc/footer.php" ?>
  <?php include "inc/uploadmodal.php" ?>
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="script/script.js"></script>  
   
    <script src="script/bootstrap.min.js"></script>
      
  </body>
</html>
