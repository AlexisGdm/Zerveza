<?php
require_once "../src/connectdb.php";
require("ZE-admin-auth.php");
$login = new Login;
$login->authorize();
$db = connectDb();
require("../src/ZE-back-admin-resa-3.php");
require("head.php");
require('ZE-header-admin.php');
?>
<div class="show-resa-title-beer-second">
    <h4>Reservation n° : <?= $id_resa ?> bien supprimée</h4>
</div>
<?php
header("refresh:3;url=ZE-admin-resa.php");
require 'ZE-footer.php';
?>