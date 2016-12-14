<?php
session_start();
 include("inc/db.php");

$Artist = $_POST["Artist"];
$SongName = $_POST["SongName"];
$Genre = $_POST["Genre"];
$UserID = $_SESSION["UserID"];

$tempName = $_FILES["theFileSong"]["tmp_name"];
$fileName = $_FILES["theFileSong"]["name"];

move_uploaded_file("$tempName", "Profile/Music/$fileName");

$stmt = $pdo->prepare("INSERT INTO Music (UserID, Artist, SongName, Genre, SongFile) VALUES (:UserID, :Artist, :SongName, :Genre, :SongFile)");

$stmt->bindValue(":UserID", $UserID);
$stmt->bindValue(":Artist", $Artist);
$stmt->bindValue(":SongName", $SongName);
$stmt->bindValue(":Genre", $Genre);
$stmt->bindValue(":SongFile", $fileName);

$stmt->execute();
header('Location: Profile.php');

?>