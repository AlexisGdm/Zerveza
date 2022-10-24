<?php
$db = connectDb();
$login = new Login;
$login->authorize();
$ID_beer = "";
if (isset($_GET["choix2"]) || ($_GET["choix2"] != "")) {
    $ID_beer = $_GET["choix2"];
} else {
    header('Location: //Zerveza/admin-remove');
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
    include('//Zerveza/head/ZE-controller-head.php');
    include('//Zerveza/header-admin/ZE-controller-header-admin.php');
?>
    <div>
        <p>Bière supprimée avec succès</p>
    </div>
<?php
} else {
?>
    <div>
        <?php
        var_dump($results); ?>
        <h2>Erreur dans la suppression !</h2>
    </div>
<?php
}
