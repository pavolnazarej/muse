<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title>Register</title>
      <link rel="icon" href="images/tablogo.jpg">
   
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

 
  </head>
  <body>
  
      
     <?php include "inc/nav1.php" ?>

     
      <hr>
     <div class="container registercontent">
     <div class="row">
     <div class="col-md-4">
         <h1>Join Us</h1>
         <p>Millions of songs, both from top ranking artists and underground artists alike, at your fingertips.</p>
         <p>You can take your favorite songs offline and enjoy them wherever you are.</p>
         <p>No ads, no interuptions, just music!</p>
         <img src="images/downloadapp.png" class="downloadapp img-responsive" alt="download">
         </div>
     <div class="col-md-offset-1 col-md-7" id="registerdiv">    
         <form action="save.php" method="post" id="registerform" enctype="multipart/form-data">
         <label> First Name:</label> <input type="text" name="Fname" required>
             
         <label>Last Name:</label> <input type="text" name="Lname" required>
                  
        <label>Email:</label> <input type="email" name="Email" required>
              
        <label>Username:</label> <input type="text" name="Username" required>
             
        <label>Password:</label> <input type="password" name="Password" required>
             
         <label> Upload your profile picture:</label> <input type="file" name="theFile" required>
             
         <label>Choose your music prefferences</label> <br/>
<input type="checkbox" value="acoustic" name="Prefferences[]" > Acoustic; <br/>
<input type="checkbox" value="blues" name="Prefferences[]" > Blues;<br/>
<input type="checkbox" value="country" name="Prefferences[]" > Country;<br/>
<input type="checkbox" value="dance" name="Prefferences[]" > Dance;<br/>
<input type="checkbox" value="electro" name="Prefferences[]" > Electro;<br/>
<input type="checkbox" value="funk" name="Prefferences[]" >  Funk;<br/>
<input type="checkbox" value="jazz" name="Prefferences[]" > Jazz;<br/>
<input type="checkbox" value="metal" name="Prefferences[]" > Metal;<br/>
<input type="checkbox" value="pop" name="Prefferences[]" > Pop; <br/>
<input type="checkbox" value="rock" name="Prefferences[]" >  Rock; <br/>   
       
          
             
             
         <input type="submit" value="Register">
         
         </form>
         </div> 
         
         </div>     
      </div>
      
    <!-- CONTENT ENDS HERE -->
    <hr>
    <!-- FOOTER STARTS HERE -->
  <?php include "inc/footer.php" ?>

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="script/script.js"></script>  

    <script src="script/bootstrap.min.js"></script>
  </body>
</html>