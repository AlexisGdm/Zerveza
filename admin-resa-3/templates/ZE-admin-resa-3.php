<?php
$login = new Login;
$login->authorize();
$db = connectDb();
?>
<div class="show-resa-title-beer-second">
    <h4>Reservation n° : <?= $id_resa ?> bien supprimée</h4>
</div>