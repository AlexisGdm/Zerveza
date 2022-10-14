<?php
require "../src/connectdb.php";
require("ZE-admin-auth.php");
$login = new Login;
$login->authorize();
$db = connectDb();
require("../src/ZE-back-admin-add-2.php");
require("head.php");
require('ZE-header-admin.php');
?>
<div>
    <h2>Bière <?= $_POST['NAME_beer'] ?> ajoutée avec succès</h2>
</div>
<?php
require 'ZE-footer.php';
?>