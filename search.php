<?php 
session_start();
include "inc/db.php";
include_once "inc/functions.php";
$logged_in = getProfile($pdo, $logged_in_id);
$number=1;
?>    


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Search Results</title>
   
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

   
  </head>
  <body>
  
      
     <?php include "inc/nav2.php" ?>

    
		
        <br>
		  <br>
		    <br>
			  <br>
			    <br>
				  <br>
						<h2>Search Results:</h2>
						
						
						
							<?php
 $query = $_GET['query']; 
    
     
    $min_length = 3;
  
     
    if(strlen($query) >= $min_length){ 
         
        $query = htmlspecialchars($query); 
        
         
        $query = mysql_real_escape_string($query);
       
         
        $raw_results = mysql_query("SELECT * FROM music
            WHERE (`SongName` LIKE '%".$query."%') OR (`Artist` LIKE '%".$query."%')") or die(mysql_error());
             
        if(mysql_num_rows($raw_results) > 0){ // if one or more rows are returned do 
             
            while($results = mysql_fetch_array($raw_results)){
            
             
                echo "<p><h3>".$results['SongName']."</h3>".$results['Artist']."</p>";
             
            }
             
        }
        else{ 
            echo "No results";
        }
         
    }
    else{ 
        echo "Minimum length is ".$min_length;
    }
?>
							
						
					
					
					
					
			
         
        </div>
       

  <?php include "inc/footer.php" ?>
  <?php include "inc/uploadmodal.php" ?>
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="script/script.js"></script>  
   
    <script src="script/bootstrap.min.js"></script>
      
  </body>
</html>
