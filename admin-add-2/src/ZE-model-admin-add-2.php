<?php
$db = connectDb();
$NAME_beer = $_GET['NAME_beer'];
$TYPE_beer = $_GET['choix'];
$DESC_beer = $_GET['Message'];
$PHOTO_beer = $_GET["PHOTO_beer"];
$sqlRequest = "INSERT INTO beer (NAME_beer, TYPE_beer, DESC_beer, PHOTO_beer) VALUES (:NAME_beer, :TYPE_beer, :DESC_beer, :PHOTO_beer)";
$sql = $db->prepare($sqlRequest);
$sql->bindParam('NAME_beer', $NAME_beer, PDO::PARAM_STR);
$sql->bindParam('TYPE_beer', $TYPE_beer, PDO::PARAM_STR);
$sql->bindParam('DESC_beer', $DESC_beer, PDO::PARAM_STR);
$sql->bindParam('PHOTO_beer', $PHOTO_beer, PDO::PARAM_STR);
$sql->execute();
$db = disconnectDb();
