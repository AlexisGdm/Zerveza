<div class="container_resa">
    <div class="reservation">
        <h3>RESERVATION</h3>
        <form class="form-resa" method="post" action="../../resa2/index.php">
            <div class="cont1 resa">
                <input type="text" name="lname" placeholder="Nom" size="40" required />
                <br>
                <input type="text" name="fname" placeholder="Prénom" size="40" required />
                <br>
                <input type="tel" name="telephone" placeholder="Numéro de téléphone" size="14" required />
                <br>
                <input type="email" name="email" placeholder="exemple@email.com" size="40" required />
            </div>
            <div class="cont2 resa">
                <input type="datetime-local" name="date" required />
                <br>
                <input type="number" name="number-person" min="1" placeholder="Nombre de personnes" size="15" required />
                <br>
                <textarea type="text" name="message" placeholder="Message" rows="4" cols=40></textarea>
                <br>
            </div>
            <div class="submit-resa">
                <input type="submit" name="submit-form-resa" class="reserver" value="Réserver" />
            </div>
        </form>
    </div>
</div>

<?php
// validation form // validation du formulaire
if (isset($_POST['submit-form-resa'])) {
    $lname = $_POST['lname'];
    $fname = $_POST['fname'];
    $tel = $_POST['telephone'];
    $mail = $_POST['email'];
    $date = $_POST['date'];
    $numberperson = $_POST['number-person'];
    $message = $_POST['message'];
    $patternmail = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";
    $headers = "Content-Type: text/plain; charset=utf-8\r\n";
    if (!preg_match("/^[a-zA-z]*$/", $lname)) {
        echo "<p class='error-mailto-contact'>Erreur pour le nom : Seuls les lettres et espaces sont autorisés.</p>";
        echo "<p class='error-mailto-contact'>Votre message n'a pas été envoyé...</p>";
    } else if (!preg_match("/^[a-zA-z]*$/", $fname)) {
        echo "<p class='error-mailto-contact'>Erreur pour le prénom : Seuls les lettres et espaces sont autorisés.</p>";
        echo "<p class='error-mailto-contact'>Votre message n'a pas été envoyé...</p>";
    } else if (!preg_match("/^[0-9]{3}-[0-9]{4}-[0-9]{4}$/", $tel)) {
        echo "<p class='error-mailto-contact'>Erreur pour le prénom : Seuls les lettres et espaces sont autorisés.</p>";
        echo "<p class='error-mailto-contact'>Votre message n'a pas été envoyé...</p>";
    } else if (!preg_match($patternmail, $mail)) {
        echo "<p class='error-mailto-contact'>L'email n'est pas valide.</p>";
        echo "<p class='error-mailto-contact'>Votre message n'a pas été envoyé...</p>";
    } else if (!preg_match($patternmail, $mail)) {
        echo "<p class='error-mailto-contact'>L'email n'est pas valide.</p>";
        echo "<p class='error-mailto-contact'>Votre message n'a pas été envoyé...</p>";
    } else if (!preg_match($patternmail, $mail)) {
        echo "<p class='error-mailto-contact'>L'email n'est pas valide.</p>";
        echo "<p class='error-mailto-contact'>Votre message n'a pas été envoyé...</p>";
    } else if (!preg_match("/^[a-zA-z]*$/", $message)) {
        echo "<p class='error-mailto-contact'>Erreur pour le message : Seuls les lettres et espaces sont autorisés.</p>";
        echo "<p class='error-mailto-contact'>Votre message n'a pas été envoyé...</p>";
    } else if (mail($mail, $sujet, $message, $headers)) {
        echo "<p class='ok-mailto-contact'>Merci, votre message a bien été envoyé.</p>";
    }
}
