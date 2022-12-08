<?php
require('../header-admin/ZE-controller-header-admin.php');
// connexion BDD
$db = connectDb();
// variable du script PHP admin
$login = new Login;
$login->authorize();
// défnir ID_beer en fonction du choix de l'utilisateur (input choix2)
$ID_beer = $_GET["choix2"];
$sqlRequest = 'SELECT ID_beer, NAME_beer, TYPE_beer, DESC_beer, PHOTO_beer FROM beer WHERE ID_beer = :ID_beer';
$sqlResponse = $db->prepare($sqlRequest);
$sqlResponse->bindParam('ID_beer', $ID_beer, PDO::PARAM_STR);
$sqlResponse->execute();
$results = $sqlResponse->fetch();

// supprime la bière sélectionnée
if ($results) {
    $db = connectDb();
    $sqlRequest2 = 'DELETE FROM beer WHERE ID_beer = :ID_beer';
    $sql = $db->prepare($sqlRequest2);
    $sql->bindParam('ID_beer', $ID_beer, PDO::PARAM_STR);
    $sql->execute();
    $db = disconnectDb();
    // message de confirmation de supression + redirection automatique sur la page d'avant
?>
    <div>
        <p>Bière supprimée avec succès</p>
        <?php header("refresh:3;url= //Zerveza/admin-remove"); ?>
    </div>
<?php
} else {
?>
    <div>
        <?php
        // si erreur affiche un message + var_dump
        var_dump($results); ?>
        <h2>Erreur dans la suppression !</h2>
    </div>
<?php
}