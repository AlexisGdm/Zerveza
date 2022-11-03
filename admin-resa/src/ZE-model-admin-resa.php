<?php
$db = connectDb();
$login = new Login;
$login->authorize();
$sqlRequest = 'SELECT Id_reservation, Last_name, First_name, Telephone, Email, Dates, Number_persons, Messages FROM Reservation';
$sqlResponse = $db->prepare($sqlRequest);
$sqlResponse->execute();
$results = $sqlResponse->fetchAll(PDO::FETCH_OBJ);
$db = disconnectDb();
