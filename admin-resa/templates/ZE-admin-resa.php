<div class="show-resa">
    <h4>Voici la liste des réservation en cours !</h4>
</div>
<div class="show-resa">
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
            <button type="submit">Confirmer selection</button>
        </div>
        <div class="mb-3">
            <button type="button"><a href="ZE-admin-resa.php">Annuler</a></button>
        </div>
    </form>
</div>