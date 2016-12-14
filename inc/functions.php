<?php 
include "db.php";
    function getProfile($pdo, $UserID) {
        $sql = "SELECT * FROM User WHERE UserID= :id";
        $result = $pdo->prepare($sql);
        $result->bindValue(":id", $UserID);
        $result->execute();
        return $result->fetchObject();
    }
