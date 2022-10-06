<?php
include("html.php");
require_once "src/config/config.php";
require_once "src/config/database.php";

require("SimpleAuth.php");
$login = new Login;
$login->authorize();

include('ZE-header-admin.php');
?>
<div class="adminformu">
    <p>Bienvenue sur l'espace administrateur !</p>
</div>

<?php
include("ZE-footer.php");
?>