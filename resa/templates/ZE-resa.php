<div class="container_resa">
    <h3 id="title-resa">RESERVATION</h3>
    <div class="reservation">
        <form class="form-resa" method="post" action="//Zerveza/resa/index.php">
            <div class="cont1 resa">
                <p>Votre nom</p>
                <input type="text" name="lname" placeholder="Nom" size="40" required />
                <p>Votre prénom</p>
                <input type="text" name="fname" placeholder="Prénom" size="20" required />
                <p>Votre numéro de téléphone</p>
                <input type="tel" name="telephone" placeholder="Numéro de téléphone" size="14" required />
                <p>Votre mail</p>
                <input type="email" name="email" placeholder="exemple@email.com" size="40" required />
            </div>
            <div class="cont2 resa">
                <p>Date souhaitée</p>
                <input type="datetime-local" name="date" required />
                <p>Nombre de personnes</p>
                <input type="number" name="number-person" min="1" placeholder="Nombre de personnes" size="15" required />
                <p>Votre message</p>
                <textarea type="text" name="message" placeholder="Message" rows="4" cols=40></textarea>

            </div>
            <div class="submit-resa">
                <input type="submit" name="submit-form-resa" class="reserv" value="Réserver" />
            </div>
        </form>
    </div>
</div>