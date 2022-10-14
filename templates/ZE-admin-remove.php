<?php
require_once "../src/connectdb.php";

$db = connectDb();
require("ZE-admin-auth.php");
$login = new Login;
$login->authorize();
require('../src/ZE-back-admin-remove.php');
require("head.php");
require('ZE-header-admin.php');
?>

<div class="remove-beer mb-3">
    <h4>Supression d'une bière</h4>
</div>
<div class="remove-beer">
    <form method="GET" action="ZE-admin-remove.php">

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
    <form method="POST" action="ZE-admin-remove-2.php">
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
            <button type="button"><a href="ZE-admin-remove.php">Annuler</a></button>
        </div>
    </form>
</div>
<?php
require 'ZE-footer.php';
?>