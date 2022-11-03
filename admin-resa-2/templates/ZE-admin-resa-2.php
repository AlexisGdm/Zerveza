<?php
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
                <td class="email">ID <?= $results->Id_reservation ?></td>
            </tr>
            <tr>
                <td class="email"><?= $results->Last_name ?></td>
            </tr>
            <tr>
                <td class="email"><?= $results->First_name ?></td>
            </tr>
            <tr>
                <td class="telephone"><?= $results->Telephone ?></td>
            </tr>
            <tr>
                <td class="email"><?= $results->Email ?></td>
            </tr>
            <tr>
                <td class="date"><?= $results->Dates ?></td>
            </tr>
            <tr>
                <td class="email"><?= $results->Number_persons ?> personnes</td>
            </tr>
            <tr>
                <td class="message" colspan="3"><?= $results->Messages ?></td>
            </tr>
        </tbody>
    </table>
</div>
<form method="post" action="//Zerveza/admin-resa-3/index.php?id_resa=<?= $id_resa ?>">
    <div class="mb-3">
        <button type="submit">Supprimer réservation</button>
    </div>
    <div class="mb-3">
        <button type="button"><a href="//Zerveza/admin-resa">Retourner a la liste</a></button>
    </div>
</form>
</div>