<?php
$db = connectDb();
$login = new Login;
$login->authorize();
$sqlRequest = 'SELECT * FROM Reservation';
$sqlResponse = $db->prepare($sqlRequest);
$sqlResponse->execute();
$results = $sqlResponse->fetchAll(PDO::FETCH_OBJ);
$db = disconnectDb();