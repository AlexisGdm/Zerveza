<?php
$login = new Login;
$login->authorize();
$login = new Login;
$login->authorize();
$db = connectDb();
$sqlRequest = 'SELECT DISTINCT TYPE_beer FROM beer ';
$sqlResponse = $db->prepare($sqlRequest);
$sqlResponse->execute();
$results = $sqlResponse->fetchAll(PDO::FETCH_OBJ);
?>
<div class="add-beer">
    <h4>Saisie d'une nouvelle bière !</h4>
</div>
<div class="add-beer">
    <form method="get" action="//Zerveza/admin-add">
        <div class="mb-3">
            <label for="title-beer-second" class="form-label">Nom :</label>
            <input type="text" class="form-control" name="NAME_beer" required>
        </div>
        <div class="mb-3">
            <label for="genreselect" class="form-label">Selectionne un type</label>
            <select class="form-select" id="choix" name="choice">
                <?php
                foreach ($results as $catbeer) {
                ?>
                    <option value="<?= $catbeer->TYPE_beer ?>"> <?= $catbeer->TYPE_beer ?></option>
                <?php
                }
                ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="refimg" class="form-label">Photo de la bière :</label>
            <input type="file" class="form-control" name="photo-beer" required>
        </div>
        <div class="mb-3">
            <label for="resume" class="form-label">Résumé :</label>
            <textarea type="text" name="txt-beer" rows="6" cols=35 required></textarea>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary" name="submit-admin-add">CREER</button>
        </div>
    </form>
</div>

<?php
if(isset($_GET['submit-admin-add'])) {
    $img_name  = $_FILES['photo-beer']['name'];
    $tmp_img_name = $_FILES['photo-beer']['tmp_name'];
    $folder = '//Zerveza/assets/images/' . $img_name;
    move_uploaded_file($tmp_img_name ,$folder.$img_name);
    $NAME_beer = $_GET['NAME_beer'];
    $TYPE_beer = $_GET['choice'];
    $DESC_beer = $_GET['txt-beer'];
    $PHOTO_beer = $_GET["photo-beer"];
    $db = connectDb();
    $sqlRequest2 = "INSERT INTO beer (NAME_beer, TYPE_beer, DESC_beer, PHOTO_beer) VALUES (:NAME_beer, :choice, :txt-beer, :photo-beer)";
    $sql = $db->prepare($sqlRequest2);
    $sql->bindParam('NAME_beer', $NAME_beer, PDO::PARAM_STR);
    $sql->bindParam('TYPE_beer', $TYPE_beer, PDO::PARAM_STR);
    $sql->bindParam('DESC_beer', $DESC_beer, PDO::PARAM_STR);
    $sql->bindParam('PHOTO_beer', $PHOTO_beer, PDO::PARAM_STR);
    $sql->execute();
    $db = disconnectDb();
    echo "Bière $NAME_beer ajoutée avec succès";
}