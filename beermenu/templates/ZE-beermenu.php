<div class="menum">
    <div id="nav-links-menubeer">
        <ul class="menum">
            <li id="blanche"><a id="ablanche" class="links" href="?tp=Blanche">Blanche</a></li>
            <li id="blonde"><a id="ablonde" class="links" href="?tp=Blonde">Blonde</a></li>
            <li id="ambree"><a id="aambree" class="links" href="?tp=Ambrée">Ambrée</a></li>
            <li id="brune"><a id="abrune" class="links" href="?tp=Brune">Brune</a></li>
            <li id="special"><a id="aspecial" class="links" href="?tp=Spéciale">Spéciale</a></li>
        </ul>
    </div>
</div>
<div class="menu-web">
    <article id="sous-blanche">
        <?php
        var_dump($_GET);
        showBeer($_GET["tp"]);
        ?>
    </article>
</div>