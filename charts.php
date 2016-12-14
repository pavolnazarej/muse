<?php 
session_start();
$logged_in_id = $_SESSION["UserID"];
include "inc/db.php";
include_once "inc/functions.php";

//$logged_in_id =  18;
$logged_in = getProfile($pdo, $logged_in_id);


    $number=1;
    $sql = "SELECT * FROM Music";
   

    
if(isset($_GET["genre_select"])) {
    
    $selected_genre = $_GET["genre_select"];
    
    $sql .= " WHERE Genre = '{$selected_genre}'";
};

 $result = $pdo->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title>Charts Muse</title>
      

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  
  </head>
  <body>
   
      
     <?php include "inc/nav2.php" ?>


      
      
      
      <!-- CONTENT STARTS HERE -->
      <hr>
    <div class="container registercontent">
     <div class="row">
         <div class="col-md-12" id="registerdiv">   
         <h1>Top charts:</h1>
             
             <form action="charts.php" name="genre_form" method="get">
              <select name="genre_select"  onchange='this.form.submit()'>
<option selected disabled>Choose genre</option>                  
<option name="genre" value="acoustic"> Acoustic</option>
<option name="genre" value="blues">Blues</option>
<option name="genre" value="country">Country</option>
<option name="genre" value="dance">Dance</option>
<option name="genre" value="electro">Electro</option>
<option name="genre" value="funk">Funk</option>
<option name="genre" value="jazz">Jazz</option>
<option name="genre" value="metal"> Metal </option>                 
<option name="genre" value="pop"> Pop</option>
<option name="rock" value="rock">  Rock</option>   
</select>
                 <noscript><input type="submit" name="selected" value="Submit"></noscript>
                 </form>
             
        
            
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
                <h4>Uploaded by<a href="#"> <?php echo $oneSong->UserID; ?></a></h4>
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
   
  <?php include "inc/footer.php" ?>
  <?php include "inc/uploadmodal.php" ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="script/script.js"></script>  
  
    <script src="script/bootstrap.min.js"></script>
      
  </body>
</html>
