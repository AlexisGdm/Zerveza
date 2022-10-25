<?php
if (isset($_POST['submit'])) {
    $name = htmlspecialchars(stripslashes(trim($_POST['name'])));
    $subject = htmlspecialchars(stripslashes(trim($_POST['subject'])));
    $email = htmlspecialchars(stripslashes(trim($_POST['email'])));
    $message = htmlspecialchars(stripslashes(trim($_POST['message'])));
    if (!preg_match("/^[A-Za-z .'-]+$/", $name)) {
        $name_error = 'Invalid name';
    }
    if (!preg_match("/^[A-Za-z .'-]+$/", $subject)) {
        $subject_error = 'Invalid subject';
    }
    if (!preg_match("/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/", $email)) {
        $email_error = 'Invalid email';
    }
    if (strlen($message) === 0) {
        $message_error = 'Your message should not be empty';
    }
}
?>

<form class="form-contact" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
    <label for="name">Name:</label><br>
    <input type="text" name="name">
    <p><?php if (isset($name_error)) echo $name_error; ?></p>
    <label for="subject">Subject:</label><br>
    <input type="text" name="subject">
    <p><?php if (isset($subject_error)) echo $subject_error; ?></p>
    <label for="email">Email:</label><br>
    <input type="text" name="email">
    <p><?php if (isset($email_error)) echo $email_error; ?></p>
    <label for="message">Message:</label><br>
    <textarea name="message"></textarea>
    <p><?php if (isset($message_error)) echo $message_error; ?></p>
    <input type="submit" name="submit" value="Submit">
    <?php
    if (isset($_POST['submit']) && !isset($name_error) && !isset($subject_error) && !isset($email_error) && !isset($message_error)) {
        $to = 'youremail@addres.com'; // edit here
        $body = " Name: $name\n E-mail: $email\n Message:\n $message";
        if (mail($to, $subject, $body)) {
            echo '<p style="color: green">Message sent</p>';
        } else {
            echo '<p>Error occurred, please try again later</p>';
        }
    }
    ?>
</form>

<main>
    <div class="contact">
        <div>
            <h3>CONTACT</h3>
        </div>
        <br>
        <form class="form-contact" method="post" action="//Zerveza/contact">
            <div id="contact">
                <input type="text" name="Nom" id="Nom" placeholder="Nom" size="20" required />
                <br>
                <input type="text" name="Prenom" id="Prenom" placeholder="Prénom" size="20" required />
                <br>
                <input type="E_mail" name="Email" id="Email" placeholder="exemple@email.com" size="25" required />
                <br>
                <input type="text" name="Sujet" id="Sujet" placeholder="Sujet" size="25" required />
                <br>
                <textarea type="text" name="Message" id="Message" placeholder="Message" rows="5" cols="40" required></textarea>
                <br>
                <div class="bouton">
                    <input type="submit" class="envoyer" id="formulaire" value="Envoyer" />
                </div>
            </div>
        </form>
    </div>
</main>

<?php
if (isset($_POST['Message'])) {

    $nom = $_POST["Nom"];
    $mail = $_POST["Email"];
    $sujet = $_POST["Sujet"];
    $message = $_POST["Message"];

    $headers = "Content-Type: text/plain; charset=utf-8\r\n";

    if (mail($mail, $sujet, $message, $headers)) {

        echo "<p style='color:green; font-size:20px; border: 1px black solid; width:20%; text-align:center; margin-left:650px'>Votre message  bien été envoyé, merci. !!!</p>";
    } else {

        echo "<p style='color:red; font-size:20px; border: 1px black solid; width:20%; text-align:center; margin-left:650px'>Votre message n'a pas été envoyé !!!</p>";
    }
}
?>