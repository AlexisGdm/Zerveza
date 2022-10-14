<?php
require("head.php");
require_once "../src/connectdb.php";
require("ZE-admin-auth.php");
$login = new Login;
$login->authorize();

require('ZE-header-admin.php');
?>
<div class="adminform">
    <p>Bienvenue sur l'espace administrateur !</p>
</div>

<?php
require("ZE-footer.php");
?>