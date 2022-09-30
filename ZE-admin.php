<?php
include("html.html");
require_once "src/config/config.php";
require_once "src/config/database.php";
$login = "";
$password = "";
if (isset ($_POST["login"]) || ($_POST  ["login"] != ""))
{
    $login = $_POST["login"];
}

if (isset ($_POST["password"]) || ($_POST  ["password"] != ""))
{
    $password = $_POST["password"];
}
else{
    header('Location: ZE-accueil.php');
}

$db=connectDb();
$sql = $db->prepare("SELECT * FROM admin WHERE LOGIN_ADMIN = :login AND PASS_ADMIN = :password");
$sql->bindParam('login', $login, PDO::PARAM_STR);
$sql->bindParam('password', $password, PDO::PARAM_STR);
$sql->execute();
$results = $sql->fetch();
?>
    <?php
    if ($results) {
        include('ZE-header-admin.php');
        ?>
        <div class="mb-3">
            <p>Les Coordonnées admin saisi sont correct</p>
        </div>
    <?php
    } if (!$results) {
        include('ZE-header.php');
        header( "refresh:3;url=ZE-Accueil.php" );
    ?>
        <div class="mb-3">
            <p>Attention : Les Coordonnées admin saisi sont érronées</p>
        </div>
    <?php
    } 
    ?>
<?php
include("ZE-footer.php");
?>