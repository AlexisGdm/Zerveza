<?php
include("html.html");
?>
<script src="./src/js/menu.js"></script>
<?php
include('ZE-header.php');
require_once "src/config/config.php";
require_once "src/config/database.php";
?>
<div class="menum">
    <div id="nav-links">
        <ul class="menum">
            <li id="blanche"><a id="ablanche" class="links" href="#sous-blanche" onclick="sblanche()">Blanche</a></li>
            <li id="blonde"><a id="ablonde" class="links" href="#sous-blonde" onclick="sblonde()">Blonde</a></li>
            <li id="ambree"><a id="aambree" class="links" href="#sous-ambree" onclick="sambree()">Ambrée</a></li>
            <li id="brune"><a id="abrune" class="links" href="#sous-brune" onclick="sbrune()">Brune</a></li>
            <li id="special"><a id="aspecial" class="links" href="#sous-special" onclick="sspeciale()">Spéciale</a></li>
        </ul>
    </div>
</div>
<div class="menu-web">
    <article id="sous-blanche">
        <?php
        $db = connectDb();
        $sqlRequest1 = 'SELECT * FROM biere WHERE TYPE_BIERE = "Blanche"';
        $sqlResponse = $db->prepare($sqlRequest1);
        $sqlResponse->execute();
        $results = $sqlResponse->fetchAll(PDO::FETCH_OBJ);
        $db = disconnectDb();
        foreach ($results as $biere) {
        ?>
            <table>
                <tbody>
                    <tr>
                        <td class="img_biere" ><img src="src/img/biere/<?= $biere->PHOTO_BIERE ?>" alt="Affiche de la biere<?= $biere->NOM_BIERE ?>"></td>
                        <td class="nom_biere" ><?= $biere->NOM_BIERE ?></td>
                        </tr>
                    <tr>
                        <td class="desc_biere" colspan="2"><?= $biere->DESC_BIERE ?></td>
                </tbody>
            </table>
        <?php
        }
        ?>
    </article>
    <article id="sous-blonde">
        <?php
        $db = connectDb();
        $sqlRequest2 = 'SELECT * FROM biere WHERE TYPE_BIERE = "Blonde"';
        $sqlResponse = $db->prepare($sqlRequest2);
        $sqlResponse->execute();
        $results = $sqlResponse->fetchAll(PDO::FETCH_OBJ);
        $db = disconnectDb();
        foreach ($results as $biere) {
        ?>
            <table>
                <tbody>
                        <td class="img_biere"><img src="src/img/biere/<?= $biere->PHOTO_BIERE ?>" alt="Affiche de la biere<?= $biere->NOM_BIERE ?>"></td>
                        <td class="nom_biere"><?= $biere->NOM_BIERE ?></td>
                    </tr>
                    <tr>
                        <td class="desc_biere" colspan="2"><?= $biere->DESC_BIERE ?></td>
                    </tr>
                </tbody>
            </table>
        <?php
        }
        ?>
    </article>
    <article id="sous-ambree">
        <?php
        $db = connectDb();
        $sqlRequest3 = 'SELECT * FROM biere WHERE TYPE_BIERE = "Ambrée"';
        $sqlResponse = $db->prepare($sqlRequest3);
        $sqlResponse->execute();
        $results = $sqlResponse->fetchAll(PDO::FETCH_OBJ);
        $db = disconnectDb();
        foreach ($results as $biere) {
        ?>
            <table>
                <tbody>
                        <td class="img_biere"><img src="src/img/biere/<?= $biere->PHOTO_BIERE ?>" alt="Affiche de la biere<?= $biere->NOM_BIERE ?>"></td>
                        <td class="nom_biere"><?= $biere->NOM_BIERE ?></td>
                    </tr>
                    <tr>
                        <td class="desc_biere" colspan="2"><?= $biere->DESC_BIERE ?></td>
                    </tr>
                </tbody>
            </table>
        <?php
        }
        ?>
    </article>
    <article id="sous-brune">
        <?php
        $db = connectDb();
        $sqlRequest4 = 'SELECT * FROM biere WHERE TYPE_BIERE = "Brune"';
        $sqlResponse = $db->prepare($sqlRequest4);
        $sqlResponse->execute();
        $results = $sqlResponse->fetchAll(PDO::FETCH_OBJ);
        $db = disconnectDb();
        foreach ($results as $biere) {
        ?>
            <table>
                <tbody>
                        <td class="img_biere"><img src="src/img/biere/<?= $biere->PHOTO_BIERE ?>" alt="Affiche de la biere<?= $biere->NOM_BIERE ?>"></td>
                        <td class="nom_biere"><?= $biere->NOM_BIERE ?></td>
                    </tr>
                    <tr>
                        <td class="desc_biere" colspan="2"><?= $biere->DESC_BIERE ?></td>
                    </tr>
                </tbody>
            </table>
        <?php
        }
        ?>
    </article>
    <article id="sous-speciale">
        <?php
        $db = connectDb();
        $sqlRequest5 = 'SELECT * FROM biere WHERE TYPE_BIERE = "Spéciale"';
        $sqlResponse = $db->prepare($sqlRequest5);
        $sqlResponse->execute();
        $results = $sqlResponse->fetchAll(PDO::FETCH_OBJ);
        $db = disconnectDb();
        foreach ($results as $biere) {
        ?>
            <table>
                <tbody>
                        <td class="img_biere"><img src="src/img/biere/<?= $biere->PHOTO_BIERE ?>" alt="Affiche de la biere<?= $biere->NOM_BIERE ?>"></td>
                        <td class="nom_biere"><?= $biere->NOM_BIERE ?></td>
                    </tr>
                    <tr>
                        <td class="desc_biere" colspan="2"><?= $biere->DESC_BIERE ?></td>
                    </tr>
                </tbody>
            </table>
        <?php
        }
        ?>
    </article>
</div>
<?php
include("ZE-footer.php");
?>