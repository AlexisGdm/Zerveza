<!-- form contact // formulaire contact -->
<div class="contact">
    <div>
        <h3>CONTACT</h3>
        <p>Vous souhaitez plus d'informations ? Nos équipes vous répondent !</p>
    </div>
    <br>
    <form class="form-contact" method="post" action="//Zerveza/contact/index.php">
        <div id="contact">
            <input type="text" name="lname" placeholder="Nom" size="20" required />
            <br>
            <input type="text" name="fname" placeholder="Prénom" size="20" required />
            <br>
            <input type="email" name="email" placeholder="exemple@email.com" size="25" required />
            <br>
            <input type="text" name="sujet" placeholder="Sujet" size="25" required />
            <br>
            <textarea type="text" name="message" placeholder="Message" rows="5" cols="40" required></textarea>
            <br>
            <div class="bouton">
                <input type="submit" name="submit-form-contact" class="envoyer" value="Envoyer" />
            </div>
        </div>
    </form>
</div>