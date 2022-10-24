<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zerveza</title>
    <link rel="stylesheet" href="../Zerveza/homepage/style/ZE-style.css" />
    <link rel=" stylesheet" href="../Zerveza/footer/style/ZE-popup.css" />
    <link rel="stylesheet" href="../Zerveza/footer/style/ZE-footer.css" />
    <link rel="stylesheet" href="../Zerveza/header/style/ZE-header.css" />
    <link rel="stylesheet" href="../Zerveza/resa/style/ZE-resa.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
</head>

<body>
    <div class="container">
        <?php
        $db = connectDb();
        $login = new Login;
        $login->authorize();
        ?>
        <div class="show-resa">
            <h4>Voici la liste des réservation en cours !</h4>
        </div>
        <div class="show-resa">
            <!-- SELECT GENRE -->
            <form method="post" action="ZE-admin-resa-2.php">
                <div class="mb-3">
                    <label for="ID" class="form-label">Selectionne une reservation :</label>
                </div>
                <div class="show-resa">
                    <select class="form-select" id="idresa" name="idresa">
                        <?php
                        foreach ($results as $listresa) {
                        ?>
                            <option value="<?= $listresa->ID_RESERVATION ?>"><?= 'ID : ' . $listresa->ID_RESERVATION . ' / ' . $listresa->NOM . ' - ' . $listresa->PRENOM . ' Date :' . $listresa->DATES ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Confirmer selection</button>
                </div>
                <div class="mb-3">
                    <button type="button"><a href="ZE-admin-resa.php">Annuler</a></button>
                </div>
            </form>
        </div>