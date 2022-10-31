<?php
// model contact
// validation form // validation du formulaire
if (isset($_POST['submit-form-contact'])) {
    $lname = $_POST["lname"];
    $fname = $_POST["fname"];
    $mail = $_POST["email"];
    $sujet = $_POST["sujet"];
    $message = $_POST["message"];
    $patternmail = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";
    $headers = "Content-Type: text/plain; charset=utf-8\r\n";
    if (!preg_match("/^[a-zA-z]*$/", $lname)) {
        echo "<p class='error-mailto-contact'>Erreur pour le nom : Seuls les lettres et espaces sont autorisés.</p>";
        echo "<p class='error-mailto-contact'>Votre message n'a pas été envoyé...</p>";
    } else if (!preg_match("/^[a-zA-z]*$/", $fname)) {
        echo "<p class='error-mailto-contact'>Erreur pour le prénom : Seuls les lettres et espaces sont autorisés.</p>";
        echo "<p class='error-mailto-contact'>Votre message n'a pas été envoyé...</p>";
    } else if (!preg_match($patternmail, $mail)) {
        echo "<p class='error-mailto-contact'>L'email n'est pas valide.</p>";
        echo "<p class='error-mailto-contact'>Votre message n'a pas été envoyé...</p>";
    } else if (!preg_match("/^[a-zA-z]*$/", $sujet)) {
        echo "<p class='error-mailto-contact'>Erreur pour le sujet : Seuls les lettres et espaces sont autorisés.</p>";
        echo "<p class='error-mailto-contact'>Votre message n'a pas été envoyé...</p>";
    } else if (!preg_match("/^[a-zA-z]*$/", $message)) {
        echo "<p class='error-mailto-contact'>Erreur pour le message : Seuls les lettres et espaces sont autorisés.</p>";
        echo "<p class='error-mailto-contact'>Votre message n'a pas été envoyé...</p>";
    } else if (mail($mail, $sujet, $message, $headers)) {
        echo "<p class='ok-mailto-contact'>Merci, votre message a bien été envoyé.</p>";
    }
}
