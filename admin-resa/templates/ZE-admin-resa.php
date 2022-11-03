<div class="show-resa">
    <h4>Voici la liste des réservation en cours !</h4>
</div>
<div class="show-resa">
    <form method="post" action="//Zerveza/admin-resa-2/index.php">
        <div>
            <label for="ID" class="form-label">Selectionne une reservation :</label>
        </div>
        <div class="show-resa">
            <select class="form-select" id="id_resa" name="id_resa">
                <?php
                foreach ($results as $listresa) {
                ?>
                    <option value="<?= $listresa->Id_reservation ?>"><?= 'ID : ' . $listresa->Id_reservation . ' / ' . $listresa->Last_name . ' - ' . $listresa->First_name . ' Date :' . $listresa->Dates ?></option>
                <?php
                }
                ?>
            </select>
        </div>
        <div>
            <button type="submit">Confirmer selection</button>
        </div>
    </form>
</div>