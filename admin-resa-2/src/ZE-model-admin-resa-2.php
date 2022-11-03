<?php
$db = connectDb();
if (isset($_POST["id_resa"]) || ($_POST["id_resa"] != "")) {
    $id_resa = $_POST["id_resa"];
} else {
    header('Location: //Zerveza/admin-resa');
}
$sqlRequest = 'SELECT Id_reservation, Last_name, First_name, Telephone, Email, Dates, Number_persons, Messages FROM Reservation WHERE Id_reservation = :Id_reservation';
$sql = $db->prepare($sqlRequest);
$sql->bindParam('Id_reservation', $id_resa, PDO::PARAM_STR);
$sql->execute();
$results = $sql->fetch(5);
$db = disconnectDb();
