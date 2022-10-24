<?php
$login = new Login;
$login->authorize();
$db = connectDb();
$sqlRequest = 'SELECT DISTINCT TYPE_beer FROM beer ';
$sqlResponse = $db->prepare($sqlRequest);
$sqlResponse->execute();
$results = $sqlResponse->fetchAll(PDO::FETCH_OBJ);
$db = disconnectDb();
