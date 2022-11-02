<?php
// model contact
// validation form // validation du formulaire
if (isset($_POST['submit-form-contact'])) {
    $Mail = $_POST["email"];
    $Sujet = $_POST["sujet"];
    $Message = $_POST["message"];
    $PatternMail = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";
    $AllLettersReg = $_POST["lname"] . $_POST["fname"] . $Sujet . $Message;
    $Header = "Content-Type: text/plain; charset=utf-8\r\n";
    if (!preg_match("/^[a-zA-z]*$/", $AllLettersReg)) {
        echo "<p class='error-mailto-contact'>Seuls les lettres et espaces sont autorisés.</p>";
        echo "<p class='error-mailto-contact'>Votre message n'a pas été envoyé...</p>";
    } else if (!preg_match($PatternMail, $Mail)) {
        echo "<p class='error-mailto-contact'>L'email n'est pas valide.</p>";
        echo "<p class='error-mailto-contact'>Votre message n'a pas été envoyé...</p>";
    } else if (mail($Mail, $Sujet, $Message, $Header)) {
        echo "<p class='ok-mailto-contact'>Merci, votre message a bien été envoyé.</p>";
    }
}
