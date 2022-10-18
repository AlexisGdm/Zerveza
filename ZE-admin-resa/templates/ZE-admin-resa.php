<?php
require_once "../src/connectdb.php";
require("ZE-admin-auth.php");
$db = connectDb();
$login = new Login;
$login->authorize();
require("../src/ZE-model-admin-resa.php");
require("head.php");
require('ZE-header-admin.php');
?>

<div class="show-resa">
    <h4>Voici la liste des réservation en cours !</h4>
</div>
<div class="show-resa">
    <!-- SELECT GENRE -->
    <form method="post" action="ZE-admin-resa-2.php">
        <div class="mb-3">
            <label for="ID" class="form-label">Selectionne une reservation :</label>
        </div>
        <div class="show-resa">
            <select class="form-select" id="idresa" name="idresa">
                <?php
                foreach ($results as $listresa) {
                ?>
                    <option value="<?= $listresa->ID_RESERVATION ?>"><?= 'ID : ' . $listresa->ID_RESERVATION . ' / ' . $listresa->NOM . ' - ' . $listresa->PRENOM . ' Date :' . $listresa->DATES ?></option>
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
require 'ZE-footer.php';
?>