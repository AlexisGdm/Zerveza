<?php
    require_once "src/config/config.php";
    require_once "src/config/database.php";
    $db=connectDb();
    $sqlRequest = 'SELECT * FROM Reservation ';
    $sqlResponse = $db->prepare($sqlRequest);
    $sqlResponse->execute();
    $results = $sqlResponse->fetchAll(PDO::FETCH_OBJ);
    $db=disconnectDb();
    include("html.html");
?>
<?php
include('ZE-header-admin.php');
?>  
    <div class="show-resa-titre">
        <h4>Voici la liste des réservation en cours !</h4>
    </div>
    <div class="show-resa" >
                    <!-- SELECT GENRE -->
        <form  method="post" action="ZE-admin-resa-2.php">
            <div class="mb-3">
                <label for="ID" class="form-label">Selectionne une reservation :</label>
                <select class="form-select" id="idresa" name="idresa">
                    <?php
                    foreach ($results as $listresa)
                    {
                    ?>
                    <option value="<?= $listresa->ID_RESERVATION?>"><?= 'ID : '. $listresa->ID_RESERVATION.' / '. $listresa->NOM .' - '. $listresa->PRENOM. ' Date :' .$listresa->DATES?></option>
                    <?php 
                    }
                    ?>
                    
                </select>
            </div>                      
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Confirmer selection</button>
            </div>
            <div class="mb-3">
                <button type="button"><a href="ZE-admin-resa.php">Annuler</a></button>
            </div>
        </form>
    </div>
<?php
    include 'ZE-footer.php';
?>