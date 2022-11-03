<div class="container-resa">
    <h3 class="title-resa">RESERVATION</h3>
    <p class="txt-resa">Vous voulez réservez ? Merci de remplir ce formulaire, à très bientôt !</p>
    <div class="reservation">
        <form class="form-resa" method="post" action="//Zerveza/resa/index.php">
            <div class="cont1 resa">
                <p class="label-form-resa">Votre nom</p>
                <input type="text" name="lname" placeholder="Nom" size="40" required />
                <p class="label-form-resa">Votre prénom</p>
                <input type="text" name="fname" placeholder="Prénom" size="20" required />
                <p class="label-form-resa">Votre numéro de téléphone</p>
                <input type="tel" name="telephone" placeholder="Numéro de téléphone" size="14" required />
                <p class="label-form-resa">Votre mail</p>
                <input type="email" name="email" placeholder="exemple@email.com" size="40" required />
            </div>
            <div class="cont2 resa">
                <p class="label-form-resa">Date souhaitée</p>
                <input type="datetime-local" name="date" required />
                <p class="label-form-resa">Nombre de personnes (15 maximum)</p>
                <input type="number" name="number-person" min="1" max="15" placeholder="Nombre de personnes" size="15" required />
                <p class="label-form-resa">Votre message</p>
                <textarea type="text" name="message" placeholder="Message" rows="5" cols=40></textarea>
            </div>
            <div class="submit-resa">
                <input type="submit" name="submit-form-resa" class="reserv" value="Réserver" />
            </div>
        </form>
    </div>
</div>