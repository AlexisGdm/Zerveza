<?php
$id_resa = '';
$db = connectDb();
if (isset($_GET['id_resa'])) {
    $id_resa = $_GET['id_resa'];
    $db = connectDb();
    $sqlRequest2 = 'DELETE FROM Reservation WHERE Id_reservation = :Id_reservation';
    $sql2 = $db->prepare($sqlRequest2);
    $sql2->bindParam('Id_reservation', $id_resa, PDO::PARAM_STR);
    $sql2->execute();
    $db = disconnectDb();
}
