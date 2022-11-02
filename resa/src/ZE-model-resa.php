<?php
// model resa
// validation form // validation du formulaire
if (isset($_POST['submit-form-resa'])) {
    $Lname = $_POST['lname'];
    $Fname = $_POST['fname'];
    $Tel = $_POST['telephone'];
    $Mail = $_POST['email'];
    $Date = $_POST['date'];
    $NumberPerson = $_POST['number-person'];
    $Message = $_POST['message'];
    $PatternMail = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";
    $AllLettersReg = $_POST["lname"] . $_POST["fname"] . $Message;
    $Headers = "Content-Type: text/plain; charset=utf-8\r\n";
    if (!preg_match("/^[a-zA-z]*$/", $AllLettersReg)) {
        echo "<p class='error-mailto-resa'> Seuls les lettres et espaces sont autorisés.</p>";
    } else if (!preg_match("/^(?:(?:\+|00)33[\s.-]{0,3}(?:\(0\)[\s.-]{0,3})?|0)[1-9](?:(?:[\s.-]?\d{2}){4}|\d{2}(?:[\s.-]?\d{3}){2})$/", $Tel)) {
        echo "<p class='error-mailto-resa'>Numéro de téléphone invalide.</p>";
    } else if (!preg_match($PatternMail, $Mail)) {
        echo "<p class='error-mailto-resa'>L'email n'est pas valide.</p>";
    } else if (!preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])T(2[0-3]|[01][0-9]):[0-5][0-9]$/", $Date)) {
        echo "<p class='error-mailto-resa'>Le format de la date n'est pas valide.</p>";
    } else if (!preg_match("/^([0]?[1-9]|1[0-5])$/", $NumberPerson)) {
        echo "<p class='error-mailto-resa'>Désolé, 15 personnes max.</p>";
    } else {
        $db = connectDb();
        $sqlRequest = "INSERT INTO Reservation (Last_name, First_name, Telephone, Email, Dates, Number_persons, Messages) VALUES ( :Last_name, :First_name, :Telephone, :Email, :Dates, :Number_persons, :Messages)";
        echo "<p class='ok-mailto-resa'>La réservation de  $Lname $Fname a été ajoutée avec succès.</p>";
        $sql = $db->prepare($sqlRequest);
        $sql->bindParam('Last_name', $Lname, PDO::PARAM_STR);
        $sql->bindParam('First_name', $Fname, PDO::PARAM_STR);
        $sql->bindParam('Telephone', $Tel, PDO::PARAM_STR);
        $sql->bindParam('Email', $Mail, PDO::PARAM_STR);
        $sql->bindParam('Dates', $Date, PDO::PARAM_STR);
        $sql->bindParam('Number_persons', $NumberPerson, PDO::PARAM_STR);
        $sql->bindParam('Messages', $messageMail, PDO::PARAM_STR);
        $sql->execute();
        $newdate = explode("-", $Date);
        $newdate1 = $newdate[0];
        $newdate2 = $newdate[1];
        $newdate3 = $newdate[2];
        $newdate4 = explode("T", $newdate3);
        $newdate5 = $newdate4[0];
        $newdate6 = $newdate4[1];
        $sujet = "Confirmation reservation - Zerveza";
        $messageMail = "Bonjour" . " " . $Fname . " " . $Lname . ", nous vous confirmons votre réservation du " . $newdate5 . "-" . $newdate2 . "-" . $newdate1 . " à " . $newdate6 . " pour " . $NumberPerson . " personnes.\n\n Merci de votre confiance et à très bientôt.\n\n L'équipe Zerveza.";
        $Headers = "Content-Type: text/plain; charset=utf-8\r\n";
        mail($Mail, $sujet, $messageMail, $Headers);
        echo "<p class='ok-mailto-resa'>Vous avez reçu un mail de confirmation.</p> ";
    }
}
