<?php
if (isset($_POST["idresa"]) || ($_POST["idresa"] != "")) {
    $id_resa = $_POST["idresa"];
} else {
    header('Location: ZE-admin-resa.php');
}
$sqlRequest = 'SELECT * FROM reservation WHERE ID_RESERVATION = :ID_RESERVATION';
$sql = $db->prepare($sqlRequest);
$sql->bindParam('ID_RESERVATION', $id_resa, PDO::PARAM_STR);
$sql->execute();
$results = $sql->fetch(5);
$db = disconnectDb();
