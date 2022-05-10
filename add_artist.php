<?php
require_once("connection.php");
$sql = "INSERT INTO artistes (nom) VALUES (:nom);";
$stmt = $dbh->prepare($sql);
$stmt->bindParam(':nom', $_POST['nom']);
$stmt->execute();
