<?php
$login = new Login;
$login->authorize();
$db = connectDb();
?>
<div>
    <h2>Bière <?= $_GET['NAME_beer'] ?> ajoutée avec succès</h2>
</div>