<?php
include("html.html");
?>
<script src="./src/js/ZE-resa.js"></script>
<link rel="stylesheet" href="./src/css/ZE-resa.css" />
<?php
include('ZE-header.php');
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