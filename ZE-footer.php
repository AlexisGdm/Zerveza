<link rel="stylesheet" href="./src/css/ZE-footer.css" />
<link rel="stylesheet" type="text/css" href="ZE-popup1.css">
<!-- <div class="loginPopup">
  <div id="popupForm" class="formPopup">
    <form method="post" action="ZE-admin.php" class="formContainer">
      <h2 id="admintitle">Administrateur <br></h2>
      <label for="inputLogin" class="form-label"><strong>Identifiant :</strong></label>
      <input type="text" class="form-control col" id="inputLogin" name="login">

      <label for="inputPassword" class="form-label"><strong>Mot de passe :</strong></label>
      <input type="password" class="form-control" id="inputPassword" name="password">

      <button type="submit" class="btn">Se connecter</button>
      <button type="button" class="btn cancel" onclick="closeForm()">Fermer</button>
    </form>
  </div>
</div> -->
<div class="clear"></div>
<div class="footer">
  <div class="footermentions pres mobfoot">
    <a href="ZE-mentionslegales.php">Mentions légales</a>
  </div>
  <div class="sante pres mobfoot">
    <p>L'abus d'alcool est <span onclick="window.location='ZE-admin.php';">dangereux</span> pour la santé.</p>
  </div>
  <div class="iconres pres">
    <a href=""><img class="iconr" src="src\img\icon\facebook-512.webp" alt="facebook"></a>
    <a href=""><img class="iconr" src="src\img\icon\instagram-512.webp" alt="instagram"></a>
    <a href=""><img class="iconr" src="src\img\icon\twitter-512.webp" alt="twitter"></a>
    <a href=""><img class="iconr" src="src\img\icon\ico-tripadvisor.png" alt="tripadvisor"></a>
  </div>
</div>
<div id="container_popup">
  <div class="form-popup" id="popup-Form">
    <div class="form-container">
      <p>Site réservé <br />aux personnes<br />majeures</p><br />
      <p>Êtes-vous<br />majeur ?</p>
      <br />
      <div class="boutons">
        <input type="button" class="btn_oui" onclick="openForm()" value="OUI">
        <br>
        <br>
        <input type="button" class="btn_non" onclick="closeForm()" value="NON">
      </div>
    </div>
  </div>
</div>
<div class="overlay-verify"></div>
</div>
<script src="./src/js/ZE-footer.js"></script>
</body>

</html>