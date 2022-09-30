<link rel="stylesheet" href="./src/css/ZE-header.css" />
<nav class="containerheader">
    <div class="logoheader">
        <h4><a href="ZE-accueil.php"><img class="logoimg" src="src\img\icon\logo.png" alt="logo"></a></h4>
    </div>
    <div id="sous-Admin" style="display:none;">
        <form method="post" action="ZE-admin.php">
            <div class="mb-3">
                <label for="inputLogin" class="form-label">Login :</label>
                <input type="text" class="form-control col" id="inputLogin" name="login">
            </div>
            <div class="mb-3">
                <label for="inputPassword" class="form-label">Password :</label>
                <input type="password" class="form-control" id="inputPassword" name="password">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Entrer</button>
            </div>
        </form>
    </div>
    <ul class="nav-links">
        <a id="laccueil" href="ZE-accueil.php">Accueil</a>
        <a id="lmenu" href="ZE-Menu-beer.php">Menu</a>
        <a id="lresa" href="ZE-resa.php">Réservation</a>
        <a id="lcontact" href="ZE-contact.php">Contact</a>
        <a id="ltrouver" href="ZE-trouver.php">Nous trouver</a>
    </ul>
    <div class="burger">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
    </div>

</nav>
<link href="https://fr.allfont.net/allfont.css?fonts=comic-sans-ms" rel="stylesheet" type="text/css" />
<script src="./src/js/main_header_a.js"></script>