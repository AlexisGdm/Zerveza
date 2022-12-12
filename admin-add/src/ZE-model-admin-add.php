<!-- model admin-add -->
<?php
if(!empty($_FILES)){
    $img_name  = $_FILES['photo-beer']['name'];
    $tmp_img_name = $_FILES['photo-beer']['tmp_name'];
    $folder = '../assets/img/beer/';
    move_uploaded_file($tmp_img_name, $folder.$img_name);
}

if (!empty($_POST['NAME_beer']) && !empty($_POST['NAME_beer']) && !empty($_POST['choice']) && !empty($_POST['txt-beer']) && !empty($_FILES['photo-beer'])) {

$NAME_beer = $_POST['NAME_beer'];
$TYPE_beer = $_POST['choice'];
$DESC_beer = $_POST['txt-beer'];
$PHOTO_beer = $_FILES['photo-beer']['name'];

$sql2 = "INSERT INTO beer (NAME_beer, TYPE_beer, DESC_beer, PHOTO_beer) VALUES ('$NAME_beer', '$TYPE_beer', '$DESC_beer', '$PHOTO_beer')";
$sql = $db->prepare($sql2);
$sql->bindParam('NAME_beer', $NAME_beer, PDO::PARAM_STR);
$sql->bindParam('TYPE_beer', $TYPE_beer, PDO::PARAM_STR);
$sql->bindParam('DESC_beer', $DESC_beer, PDO::PARAM_STR);
$sql->bindParam('PHOTO_beer', $PHOTO_beer, PDO::PARAM_STR);
$sql->execute();
$db=disconnectDb();

echo "<p class='ok-mailto-contact'>La bière a bien été ajoutée.</p>";
}
?>