<?php 
session_start();

if(isset($_POST["signin"])){
    include_once("inc/db.php");


$Username = $_POST["Username"];
$Password = $_POST["Password"];


$sql ="SELECT * FROM User WHERE Username='$Username' AND Password='$Password' ";   
$result = $pdo->query($sql);

//if($row = $result->fetch(PDO::FETCH_ASSOC))  
if($row = $result->fetchObject())  {
    $_SESSION["Username"] = $row->Username;
    $_SESSION["UserID"] = $row->UserID;
    header("Location: Profile.php");
} else {
echo '<script language="javascript">';
echo 'alert("Username or password incorrect!")';
echo '</script>';
} 
    
};
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <title>Sign in to Muse</title>
     <link rel="icon" href="images/tablogo.jpg">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>
    <!-- NAVIGATION STARTS HERE -->
      
     <?php include "inc/nav1.php" ?>

      <!-- NAVIGATION ENDS HERE -->
      
      
      
      <!-- CONTENT STARTS HERE -->
      <hr>
     <div class="container">
     <div class="row">
     <div class="col-md-offset-4 col-md-4">
         <h1>Sign In</h1>
         <form action="signin.php" method="post" enctype="multipart/form-data" id="signinform">
         <input placeholder="Username" name="Username" type="text" autofocus>
         <input placeholder="Password" name="Password" type="password">
         <input name="signin" type="submit" value="Sign In">
         </form>
       
          
         
         </div>     
      </div>
      </div>
    <!-- CONTENT ENDS HERE -->
    <hr>
    <!-- FOOTER STARTS HERE -->
  <?php include "inc/footer.php"; ?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="script/script.js"></script>  
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="script/bootstrap.min.js"></script>
         
    </body>
</html>