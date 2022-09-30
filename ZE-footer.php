<link rel="stylesheet" href="./src/css/ZE-footer.css" />
<link rel="stylesheet" type="text/css" href="ZE-popup1.css">

<div class="footer">
  <div class="footermentions pres mobfoot">
    <a href="ZE-mentionslegales.php">Mentions légales</a>
  </div>
  <div class="sante pres mobfoot">
    <p>L'abus d'alcool est <span onclick="menuDeroulant('sous-Admin');">dangereux</span> pour la santé.</p>
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
<script>
  jQuery(document).ready(function($) {

    if (sessionStorage.getItem('advertOnce') !== 'true') {
      $('#container_popup').show();
    } else {
      $('#container_popup').hide();
      $('.overlay-verify').hide();
    };

    $('.btn_oui').click(function() {
      sessionStorage.setItem('advertOnce', 'true');
      $('#container_popup').hide();
      $('.overlay-verify').hide();
    });

    $('.btn_non').click(function() {
      window.location.href = 'src/img/background/giphy.gif';

    });
  });
</script>
</body>

</html>