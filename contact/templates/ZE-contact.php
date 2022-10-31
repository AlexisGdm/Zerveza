<!-- form contact // formulaire contact -->
<div class="contact">
    <div>
        <h3>CONTACT</h3>
    </div>
    <br>
    <form class="form-contact" method="post" action="//Zerveza/contact/index.php">
        <div id="contact">
            <input type="text" name="lname" id="Nom" placeholder="Nom" size="20" required />
            <br>
            <input type="text" name="fname" id="Prenom" placeholder="Prénom" size="20" required />
            <br>
            <input type="email" name="email" id="Email" placeholder="exemple@email.com" size="25" required />
            <br>
            <input type="text" name="sujet" id="Sujet" placeholder="Sujet" size="25" required />
            <br>
            <textarea type="text" name="message" id="Message" placeholder="Message" rows="5" cols="40" required></textarea>
            <br>
            <div class="bouton">
                <input type="submit" name="submit-form-contact" class="envoyer" id="formulaire" value="Envoyer" />
            </div>
        </div>
    </form>
</div>