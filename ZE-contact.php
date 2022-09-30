<?php
include("html.html");
?>
<script src="./src/js/ZE-contact.js"></script>
<link rel="stylesheet" href="./src/css/ZE-contact.css" />
<?php
include('ZE-header.php');
?>
<main>
    <div class="contact">
        <div>
            <h3>CONTACT</h3>
        </div>
        <br>
            <form method="post" action="ZE-contact.php">
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

        $nom=$_POST["Nom"];
        $mail=$_POST["Email"];
        $sujet=$_POST["Sujet"];
        $message=$_POST["Message"];

        $headers = "Content-Type: text/plain; charset=utf-8\r\n";
        
        if(mail($mail, $sujet, $message, $headers)){
            
            echo "<p style='color:green; font-size:20px; border: 1px black solid; width:20%; text-align:center; margin-left:650px'>Votre message  bien été envoyé, merci. !!!</p>";
        
        }else{
        
            echo "<p style='color:red; font-size:20px; border: 1px black solid; width:20%; text-align:center; margin-left:650px'>Votre message n'a pas été envoyé !!!</p>";
        
        }
        }
    
?>
<?php
include("ZE-footer.php");
?>