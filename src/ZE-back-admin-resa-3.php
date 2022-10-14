<?php 
$id_resa = '';
if (isset($_GET['id_resa'])) {
    $id_resa = $_GET['id_resa'];
    $db = connectDb();
    $sqlRequest2 = 'DELETE FROM reservation WHERE ID_RESERVATION = :ID_RESERVATION';
    $sql2 = $db->prepare($sqlRequest2);
    $sql2->bindParam('ID_RESERVATION', $id_resa, PDO::PARAM_STR);
    $sql2->execute();
    $db = disconnectDb();
}
