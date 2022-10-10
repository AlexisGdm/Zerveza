<?php
include("html.php");
?>
<script src="./src/js/ZE-resa.js"></script>
<link rel="stylesheet" href="./src/css/ZE-resa.css" />
<?php
include('ZE-header.php');
?>

<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Merci d'entrer votre nom ou votre prénom";
    } else {
        $name = test_input($_POST["name"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
            $nameErr = "Seules les lettres ou espaces sont autorisés";
        }
    }

    if (empty($_POST["email"])) {
        $emailErr = "Merci d'entrer votre email";
    } else {
        $email = test_input($_POST["email"]);
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Format de l'email invalide";
        }
    }

    if (empty($_POST["comment"])) {
        $comment = "";
    } else {
        $comment = test_input($_POST["comment"]);
    }
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<main>
    <div class="container_resa">
        <div class="reservation">
            <h3>RESERVATION</h3>
            <div class="formulaire">
                <form method="post" action="ZE-Resa2.php">
                    <div id="Resa">
                        <input type="text" name="Nom" id="Nom" placeholder="Nom" size="40" required />
                        <br>
                        <input type="text" name="Prenom" id="Prenom" placeholder="Prénom" size="40" required />
                        <br>
                        <input type="tel" name="Telephone" id="Telephone" placeholder="00 00 00 00 00" size="14" required />
                        <br>
                        <input type="email" name="Email" id="Email" placeholder="exemple@email.com" size="40" required />
                        <br>
                        <input type="datetime-local" name="Date_Resa" id="Date_Resa" required />
                        <br>
                        <input type="number" name="Nombre_Pers" min="1" id="Nombre_Pers" placeholder="Nombre de personnes" size="15" required />
                        <br>
                        <textarea type="text" name="Messages" id="Messages" placeholder="Message" rows="5" cols=40></textarea>
                        <br>
                        <div class="btn">
                            <input type="submit" id="formulaire" class="reserver" value="Réserver" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>

<?php
include("ZE-footer.php");
?>