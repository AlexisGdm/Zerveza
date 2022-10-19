<?php
$id_resa = '';
$db = connectDb();
$login = new Login;
$login->authorize();
?>
<div class="show-resa-title-beer-second">
    <h4>Voici le détail de la reservation n° : <?= $id_resa ?></h4>
</div>
<div class="show-resa">
    <table>
        <tbody>
            <tr>
                <td class="email"><?= $results->NOM ?></td>
            </tr>
            <tr>
                <td class="email"><?= $results->PRENOM ?></td>
            </tr>
            <tr>
                <td class="telephone"><?= $results->TELEPHONE ?></td>
            </tr>
            <tr>
                <td class="email"><?= $results->EMAIL ?></td>
            </tr>
            <tr>
                <td class="date"><?= $results->DATES ?></td>
            </tr>
            <tr>
                <td class="email"><?= $results->NOMBRE_PERS ?></td>
            </tr>
            <tr>
                <td class="message" colspan="3"><?= $results->MESSAGES ?></td>
            </tr>
        </tbody>
    </table>
</div>
<form method="post" action="ZE-admin-resa-3.php?id_resa=<?= $id_resa ?>">
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Supprimer réservation</button>
    </div>
    <div class="mb-3">
        <button type="button"><a href="ZE-admin-resa.php">Retourner a la liste</a></button>
    </div>
</form>
</div>