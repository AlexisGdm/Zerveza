<?php
require_once "src/config/config.php";
require_once "src/config/database.php";
$db=connectDb();
$ID_BIERE = "";
if (isset ($_POST["choix2"]) || ($_POST["choix2"] != ""))
{
    $ID_BIERE = $_POST["choix2"];
}
else{
    header('Location: ZE-admin-remove.php');
}
$sqlRequest = 'SELECT * FROM biere WHERE ID_BIERE = :ID_BIERE';
$sqlResponse = $db->prepare($sqlRequest);
$sqlResponse->bindParam('ID_BIERE', $ID_BIERE, PDO::PARAM_STR);
$sqlResponse->execute();
$results = $sqlResponse->fetch();
$db=disconnectDb();
include("html.html");
include('ZE-header-admin.php');
if ($results) {
    $db=connectDb();
    $sqlRequest2 = 'DELETE FROM biere WHERE ID_BIERE = :ID_BIERE';
    $sql = $db->prepare($sqlRequest2);
    $sql->bindParam('ID_BIERE', $ID_BIERE, PDO::PARAM_STR);
    $sql->execute();
    $db=disconnectDb();
    ?>
    <div class="col-sm-8">
    <p>Bière supprimer avec succès</p>
    </div>
    <?php
}
else {
    ?>
    <div class="col-sm-8">
    <?php
     var_dump($_POST["choix2"]);
     var_dump($results);
     var_dump($ID_BIERE);?>
    <h2>Erreur dans la suppression !</h2>        
</div>
<?php
}
include 'ZE-footer.php';
?>