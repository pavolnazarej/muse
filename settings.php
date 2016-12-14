<?php 
session_start();
$logged_in_id = $_SESSION["UserID"];

include "inc/db.php";
include_once "inc/functions.php";

//$logged_in_id =  18;
$logged_in = getProfile($pdo, $logged_in_id);


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title>Settings</title>
     <link rel="icon" href="images/tablogo.jpg">
   
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
         <h1>Settings:  </h1>
          
    
     
          <div class="row">    
            <hr>
            
            <div class="col-md-7">
            <h3>Name:</h3>
            <h4><?php echo $logged_in->Fname;?> <?php echo $logged_in->Lname;?></h4>
            <a href="#">Edit</a>
            </div>
             </div>     
            
       <div class="row">    
            
            
            <div class="col-md-7">
            <h3>Email adress:</h3>
            <h4><?php echo $logged_in->Email;?> </h4>
            <a href="#">Edit</a>
            </div>
             </div>     
           
             
                   
       <div class="row">    
            
            
            <div class="col-md-7">
            <h3>Profile picture:</h3>
            <a href="#">Edit</a>
            </div>
             </div>     
            <hr>
       
         
         </div> 
          </div>
      </div>
      
    <!-- CONTENT ENDS HERE -->
    <hr>
    <!-- FOOTER STARTS HERE -->
  <?php include "inc/footer.php" ?>
  <?php include "inc/uploadmodal.php" ?>
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="script/script.js"></script>  

    <script src="script/bootstrap.min.js"></script>
      
  </body>
</html>