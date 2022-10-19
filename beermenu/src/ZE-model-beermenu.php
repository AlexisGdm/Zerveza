<?php
function showBeer($typeBeer)
{
    $db = connectDb();
    $sqlRequest = 'SELECT PHOTO_beer, NAME_beer, DESC_beer FROM beer WHERE TYPE_beer ="' . $typeBeer . '"';
    $sqlResponse = $db->prepare($sqlRequest);
    $sqlResponse->execute();
    $results = $sqlResponse->fetchAll(PDO::FETCH_OBJ);
    $db = disconnectDb();
    foreach ($results as $beer) {
?>
        <table class="table-beermenu">
            <tbody>
                <tr>
                    <td rowspan="2" class="img_beer"><img src="././assets/img/beer/<?= $beer->PHOTO_beer ?>" alt="Affiche de la bière<?= $beer->NAME_beer ?>"></td>
                    <td class="NAME_beer"><?= $beer->NAME_beer ?></td>
                </tr>
                <tr>
                    <td class="desc_beer" colspan="2"><?= $beer->DESC_beer ?></td>
                </tr>
            </tbody>
        </table>
<?php
    }
}
