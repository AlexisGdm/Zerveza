<?php
$db = connectDb();
$sqlRequest = 'SELECT DISTINCT TYPE_beer FROM beer ORDER BY TYPE_beer';
$sqlResponse = $db->prepare($sqlRequest);
$sqlResponse->execute();
$results = $sqlResponse->fetchAll(PDO::FETCH_OBJ);
$TYPE_beer = 'Blonde';
if (isset($_GET['choix'])) {
    $TYPE_beer = $_GET['choix'];
}

$sqlRequest2 = 'SELECT * FROM beer WHERE TYPE_beer = :TYPE_beer';
$sqlResponse2 = $db->prepare($sqlRequest2);
$sqlResponse2->bindParam('TYPE_beer', $TYPE_beer, PDO::PARAM_STR);
$sqlResponse2->execute();
$results2 = $sqlResponse2->fetchAll(PDO::FETCH_OBJ);

$db = disconnectDb();
