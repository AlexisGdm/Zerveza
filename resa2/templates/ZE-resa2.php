<?php
require_once("../sql/connectdb.php");

$lname = $_POST['lname'];
$fname = $_POST['fname'];
$tel = $_POST['telephone'];
$mail = $_POST['email'];
$date = $_POST['date'];
$numberperson = $_POST['number-person'];
$message = $_POST['message'];
$db = connectDb();
$sqlRequest = "INSERT INTO Reservation (Last_name, First_name, Telephone, Email, Dates, Number_persons, Messages) VALUES ( :Last_name, :First_name, :Telephone, :Email, :Dates, :Number_persons, :Messages)";

$sql = $db->prepare($sqlRequest);
$sql->bindParam('Last_name', $lname, PDO::PARAM_STR);
$sql->bindParam('First_name', $fname, PDO::PARAM_STR);
$sql->bindParam('Telephone', $tel, PDO::PARAM_STR);
$sql->bindParam('Email', $mail, PDO::PARAM_STR);
$sql->bindParam('Dates', $date, PDO::PARAM_STR);
$sql->bindParam('Number_persons', $numberperson, PDO::PARAM_STR);
$sql->bindParam('Messages', $message, PDO::PARAM_STR);
$sql->execute();
?>
<div>
    <p class="confirmation-reservation">La réservation de <?= $_POST['fname'] ?> <?= $_POST['lname'] ?> a été ajoutée avec succès.</p>
</div>
<script>
    setTimeout(function() {
        window.location.href = '//Zerveza/resa';
    }, 5000);
</script>
<?php

// email confirmation for reservation // confirmation de mail pour la reservation
if (isset($_POST['email'])) {
    $lname = $_POST["lname"];
    $mail = $_POST["email"];
    $fname = $_POST["fname"];
    $date = $_POST["date"];
    $newdate = explode("-", $date);
    $newdate1 = $newdate[0];
    $newdate2 = $newdate[1];
    $newdate3 = $newdate[2];
    $newdate4 = explode("T", $newdate3);
    $newdate5 = $newdate4[0];
    $newdate6 = $newdate4[1];
    $numberperson = $_POST["number-person"];
    $sujet = "Confirmation reservation - Zerveza";
    $message = "Bonjour" . " " . $fname . " " . $lname . ", nous vous confirmons votre réservation du " . $newdate5 . "-" . $newdate2 . "-" . $newdate1 . " à " . $newdate6 . " pour " . $numberperson . " personnes.\n\n Merci de votre confiance et à très bientôt.\n\n L'équipe Zerveza.";
    $headers = "Content-Type: text/plain; charset=utf-8\r\n";
    // if mail send echo ok if message connot be sent echo error // si le message est envoyé echo ok si le message ne peut pas être envoyé echo erreur
    if (mail($mail, $sujet, $message, $headers)) {
        echo "<p id='ok-mailto-resa2'>Vous avez reçu un mail de confirmation.</p> ";
    } else {
        echo "<p id='error-mailto-resa2'>Désolé, l'email n'a pas pu être envoyé...</p>";
    }
}
?>