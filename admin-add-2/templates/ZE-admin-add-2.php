<?php
$login = new Login;
$login->authorize();
$db = connectDb();
?>
<div>
    <h2>Bière <?= $_POST['NAME_beer'] ?> ajoutée avec succès</h2>
</div>