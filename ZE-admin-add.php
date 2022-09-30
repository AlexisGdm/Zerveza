<?php
    require_once "src/config/config.php";
    require_once "src/config/database.php";
    $db=connectDb();
    $sqlRequest = 'SELECT DISTINCT TYPE_BIERE FROM biere ';
    $sqlResponse = $db->prepare($sqlRequest);
    $sqlResponse->execute();
    $results = $sqlResponse->fetchAll(PDO::FETCH_OBJ);
    $db=disconnectDb();
    include("html.html");
?>
<?php
include('ZE-header-admin.php');
?>  
    <div class="add-biere">
        <h4>Saisie d'une nouvelle bière !</h4>
    </div>
    <div class="add-biere" >
        <form  method="post" action="ZE-admin-add-2.php">
            <div class="mb-3">
                <label for="Titre" class="form-label">Nom :</label>
                <input type="text" class="form-control" id="NOM_BIERE" name="NOM_BIERE" required>
            </div>
            <!-- SELECT GENRE -->
            <div class="mb-3">
                <label for="genreselect" class="form-label">Selectionne un type</label>
                <select class="form-select" id="choix" name="choix">
                    <?php
                    foreach ($results as $catBiere)
                    {
                    ?>
                    <option value="<?= $catBiere->TYPE_BIERE ?>"> <?= $catBiere->TYPE_BIERE ?></option>
                    <?php 
                    }
                    ?>
                    
                </select>
            </div>

            <div class="mb-3">
                <label for="refimg" class="form-label">Affiche :</label>
                <input type="text" class="form-control" id="PHOTO_BIERE" name="PHOTO_BIERE" required>
            </div> 

            <div class="mb-3">
                    <label for="resume" class="form-label">Résumé :</label>
                    <textarea type="text" name="Message" id="Message" rows="6" cols=35 required></textarea>
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-primary">CREER</button>
            </div>
            <div class="mb-3">
                <button type="button"><a href="ZE-admin-add.php">Annuler</a></button>
            </div>
        </form>
    </div>
<?php
    include 'ZE-footer.php';
?>