<?php
$login = new Login;
$login->authorize();
?>

<div class="remove-beer mb-3">
    <h4>Supression d'une bière</h4>
</div>
<div class="remove-beer">
    <form method="GET" action="//Zerveza/admin-remove/">

        <!-- SELECT TYPE -->
        <div class="mb-3">
            <label for="genreselect" class="form-labeladmin">Selectionne un type </label>
            <select onchange="this.form.submit()" class="form-select" id="choix" name="choix">
                <?php
                foreach ($results as $catbeer) {
                ?>
                    <option <?php if (isset($_GET['choix']) && ($catbeer->TYPE_beer == $_GET['choix'])) {
                                echo 'selected';
                            } ?> value="<?= $catbeer->TYPE_beer ?>"> <?= $catbeer->TYPE_beer ?></option>
                <?php
                }
                ?>
            </select>
        </div>
    </form>
    <!-- SELECT beer -->
    <form method="GET" action="//Zerveza/admin-remove-2">
        <div class="mb-3">
            <label for="genreselect2" class="form-labeladmin">Selectionne une bière</label>
            <select class="form-select" id="choix2" name="choix2">
                <?php
                foreach ($results2 as $catbeer2) {
                ?>
                    <option value="<?= $catbeer2->ID_beer ?>"> <?= $catbeer2->NAME_beer ?></option>
                <?php
                }
                ?>
            </select>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">SUPPRIMER</button>
        </div>
        <div class="mb-3">
            <button type="button"><a href="//Zerveza/admin-remove">Annuler</a></button>
        </div>
    </form>
</div>