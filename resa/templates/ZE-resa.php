<div class="container_resa">
    <div class="reservation">
        <h3>RESERVATION</h3>
        <form class="form-resa" method="post" action="../../resa2/index.php">
            <div class="cont1 resa">
                <input type="text" name="lname" placeholder="Nom" size="40" required />
                <br>
                <input type="text" name="fname" placeholder="Prénom" size="40" required />
                <br>
                <input type="tel" name="telephone" placeholder="Numéro de téléphone" size="14" required />
                <br>
                <input type="email" name="email" placeholder="exemple@email.com" size="40" required />
            </div>
            <div class="cont2 resa">
                <input type="datetime-local" name="date" required />
                <br>
                <input type="number" name="number-person" min="1" placeholder="Nombre de personnes" size="15" required />
                <br>
                <textarea type="text" name="message" placeholder="Message" rows="4" cols=40></textarea>
                <br>
            </div>
            <div class="btn resa">
                <input type="submit" class="reserver" value="Réserver" />
            </div>
        </form>
    </div>
</div>