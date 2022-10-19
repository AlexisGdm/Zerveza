<?php
$db = connectDb();
$login = new Login;
$login->authorize();
$ID_beer = "";
if (isset($_POST["choix2"]) || ($_POST["choix2"] != "")) {
    $ID_beer = $_POST["choix2"];
} else {
    header('Location: ZE-admin-remove.php');
}
$sqlRequest = 'SELECT * FROM beer WHERE ID_beer = :ID_beer';
$sqlResponse = $db->prepare($sqlRequest);
$sqlResponse->bindParam('ID_beer', $ID_beer, PDO::PARAM_STR);
$sqlResponse->execute();
$results = $sqlResponse->fetch();
$db = disconnectDb();

if ($results) {
    $db = connectDb();
    $sqlRequest2 = 'DELETE FROM beer WHERE ID_beer = :ID_beer';
    $sql = $db->prepare($sqlRequest2);
    $sql->bindParam('ID_beer', $ID_beer, PDO::PARAM_STR);
    $sql->execute();
    $db = disconnectDb();

    require("../Zerveza/head.php");
    require('ZE-header-admin.php'); ?>
    <div>
        <p>Bière supprimée avec succès</p>
    </div>
<?php
} else {
?>
    <div>
        <?php
        var_dump($_POST["choix2"]);
        var_dump($results);
        var_dump($ID_beer); ?>
        <h2>Erreur dans la suppression !</h2>
    </div>
<?php
}
