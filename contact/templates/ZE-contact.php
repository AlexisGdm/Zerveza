<div class="container-contact">
    <h3 class="title-contact">CONTACT</h3>
    <p class="txt-contact">Vous souhaitez plus d'informations ? Nos équipes vous répondent !</p>
    <div class="contact-div">
        <form class="form-contact" method="post" action="//Zerveza/contact/index.php">
            <div class="cont1 contact">
                <p class="label-form-contact">Votre nom</p>
                <input type="text" name="lname" placeholder="Nom" size="40" required />
                <p class="label-form-contact">Votre prénom</p>
                <input type="text" name="fname" placeholder="Prénom" size="20" required />
                <p class="label-form-contact">Votre mail</p>
                <input type="email" name="email" placeholder="exemple@email.com" size="40" required />
            </div>
            <div class="cont2 contact">
                <p class="label-form-contact">L'objet de votre message</p>
                <input type="text" name="sujet" placeholder="Sujet" size="25" required />
                <p class="label-form-contact">Votre message</p>
                <textarea type="text" name="message" placeholder="Message" rows="5" cols=40></textarea>
            </div>
            <div class="submit-contact">
                <input type="submit" class="send-contact" name="submit-form-contact" value="Envoyer" />
            </div>
        </form>
    </div>
</div>