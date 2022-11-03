<?php
$login = new Login;
$login->authorize();
?>
<div class="add-beer">
    <h4>Saisie d'une nouvelle bière !</h4>
</div>
<div class="add-beer">
    <form method="get" action="//Zerveza/admin-add-2">
        <div class="mb-3">
            <label for="title-beer-second" class="form-label">Nom :</label>
            <input type="text" class="form-control" id="NAME_beer" name="NAME_beer" required>
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
            <input type="text" class="form-control" id="PHOTO_beer" name="PHOTO_beer" required>
        </div>

        <div class="mb-3">
            <label for="resume" class="form-label">Résumé :</label>
            <textarea type="text" name="Message" id="Message" rows="6" cols=35 required></textarea>
        </div>

        <div class="mb-3">
            <button type="submit" class="btn btn-primary">CREER</button>
        </div>
    </form>
</div>