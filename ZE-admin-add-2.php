<?php
    require_once "src/config/config.php";
    require_once "src/config/database.php";
    $NOM_BIERE= $_POST['NOM_BIERE'];
    $TYPE_BIERE = $_POST['choix'];
    $DESC_BIERE = $_POST['Message'];
    $PHOTO_BIERE = $_POST["PHOTO_BIERE"];
    $db=connectDb();
    $sqlRequest = "INSERT INTO biere (NOM_BIERE, TYPE_BIERE, DESC_BIERE, PHOTO_BIERE) VALUES (:NOM_BIERE, :TYPE_BIERE, :DESC_BIERE, :PHOTO_BIERE)";
    $sql = $db->prepare($sqlRequest);
    $sql->bindParam('NOM_BIERE', $NOM_BIERE, PDO::PARAM_STR);
    $sql->bindParam('TYPE_BIERE', $TYPE_BIERE, PDO::PARAM_STR);
    $sql->bindParam('DESC_BIERE', $DESC_BIERE, PDO::PARAM_STR);
    $sql->bindParam('PHOTO_BIERE', $PHOTO_BIERE, PDO::PARAM_STR);
    $sql->execute();
    $db=disconnectDb();
    include("html.html");
?>
<?php
include('ZE-header-admin.php');
?>  
    <div class="col-sm-8">
        <h2>Bière <?= $_POST['NOM_BIERE'] ?> Ajouté avec succès</h2>        
    </div>

<?php
  include 'ZE-footer.php';
?>