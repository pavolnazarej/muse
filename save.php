<?php
 include("inc/db.php");

$Fname = $_POST["Fname"];
$Lname = $_POST["Lname"];
$Email = $_POST["Email"];
$Username = $_POST["Username"];
$Password = $_POST["Password"];
$Prefferences=implode(',',$_POST["Prefferences"]);




$tempName = $_FILES["theFile"]["tmp_name"];
$fileName = $_FILES["theFile"]["name"];

move_uploaded_file("$tempName", "Profile/Pictures/$fileName");

$stmt = $pdo->prepare("INSERT INTO User (Fname, Lname, Email, Username, Password, Picture, Prefferences) VALUES (:Fname, :Lname, :Email, :Username, :Password, :Picture, :Prefferences)");

$stmt->bindValue(":Fname", $Fname);
$stmt->bindValue(":Lname", $Lname);
$stmt->bindValue(":Email", $Email);
$stmt->bindValue(":Username", $Username);
$stmt->bindValue(":Password", $Password);
$stmt->bindValue(":Picture", $fileName);
$stmt->bindValue(":Prefferences", $Prefferences);

$stmt->execute();


header('Location: signin.php');

