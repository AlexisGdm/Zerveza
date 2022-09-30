<?php
require_once "src/config/config.php";
require_once "src/config/database.php";
$id_resa = '';
$db=connectDb();
if (isset($_GET['id_resa'])){
    $id_resa = $_GET['id_resa'];
    $db=connectDb();
    $sqlRequest2 = 'DELETE FROM reservation WHERE ID_RESERVATION = :ID_RESERVATION';
    $sql2 = $db->prepare($sqlRequest2);
    $sql2->bindParam('ID_RESERVATION', $id_resa, PDO::PARAM_STR);
    $sql2->execute();
    $db=disconnectDb();
}
include("html.html");
?>
<?php
include('ZE-header-admin.php');
?>  
    <div class="show-resa-titre">
        <h4>Reservation n° : <?=$id_resa?> bien supprimer</h4>
    </div>
<?php
    header( "refresh:3;url=ZE-admin-resa.php" );
    include 'ZE-footer.php';
?>

