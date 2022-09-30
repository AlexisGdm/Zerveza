<?php
    require_once "src/config/config.php";
    require_once "src/config/database.php";
    $db=connectDb();
    $sqlRequest = 'SELECT DISTINCT TYPE_BIERE FROM biere';
    $sqlResponse = $db->prepare($sqlRequest);
    $sqlResponse->execute();
    $results = $sqlResponse->fetchAll(PDO::FETCH_OBJ);
    $TYPE_BIERE = 'Blonde';
    if (isset($_GET['choix'])){
    $TYPE_BIERE = $_GET['choix'];
}
    $sqlRequest2 = 'SELECT * FROM biere WHERE TYPE_BIERE = :TYPE_BIERE';
    $sqlResponse2 = $db->prepare($sqlRequest2);
    $sqlResponse2->bindParam('TYPE_BIERE', $TYPE_BIERE, PDO::PARAM_STR);
    $sqlResponse2->execute();
    $results2 = $sqlResponse2->fetchAll(PDO::FETCH_OBJ);
    
    $db=disconnectDb();
    include("html.html");
    include('ZE-header-admin.php');
?>  

    <div class="remove-biere">
        <h4>Supression d'une bière, sacrilège!</h4>
    </div>
    <div class="remove-biere" >
        <form  method="GET" action="ZE-admin-remove.php">
            
            <!-- SELECT TYPE -->
            <div class="mb-3">
                <label for="genreselect" class="form-label">Selectionne un type</label>
                <select onchange="this.form.submit()"class="form-select" id="choix" name="choix">

                     <?php
                    foreach ($results as $catBiere)
                    {
                        ?>
                            <option <?php if (isset($_GET['choix'])&&($catBiere->TYPE_BIERE == $_GET['choix'])){echo'selected';}?> value="<?= $catBiere->TYPE_BIERE ?>"> <?= $catBiere->TYPE_BIERE ?></option>
                        <?php
                    }
                    ?>
                    
                </select>
            </div>
            </form>
                        <!-- SELECT BIERE -->
        <form  method="POST" action="ZE-admin-remove-2.php">
            <div class="mb-3">
                <label for="genreselect2" class="form-label">Selectionne une bière</label>
                <select class="form-select" id="choix2" name="choix2">
                    <?php
                    foreach ($results2 as $catBiere2)
                    {
                    ?>
                    <option value="<?= $catBiere2->ID_BIERE ?>"> <?= $catBiere2->NOM_BIERE ?></option>
                    <?php 
                    }
                    ?>
                    
                </select>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">SUPPRIMER</button>
            </div>
            <div class="mb-3">
                <button type="button"><a href="ZE-admin-remove.php">Annuler</a></button>
            </div>
        </form>
    </div>
<?php
    include 'ZE-footer.php';
?>