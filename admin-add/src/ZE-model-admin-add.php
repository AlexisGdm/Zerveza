<!-- model admin-add -->
<?php
// if(isset($_GET['submit-admin-add'])) {
//     $img_name  = $_FILES['photo-beer']['name'];
//     $tmp_img_name = $_FILES['photo-beer']['tmp_name'];
//     $folder = '//Zerveza/assets/images/' . $img_name;
//     move_uploaded_file($tmp_img_name ,$folder.$img_name);
//     $NAME_beer = $_GET['NAME_beer'];
//     $TYPE_beer = $_GET['choice'];
//     $DESC_beer = $_GET['txt-beer'];
//     $PHOTO_beer = $_GET["photo-beer"];
//     $db = connectDb();
//     $sqlRequest2 = "INSERT INTO beer (NAME_beer, TYPE_beer, DESC_beer, PHOTO_beer) VALUES (:NAME_beer, :choice, :txt-beer, :photo-beer)";
//     $sql = $db->prepare($sqlRequest2);
//     $sql->bindParam('NAME_beer', $NAME_beer, PDO::PARAM_STR);
//     $sql->bindParam('TYPE_beer', $TYPE_beer, PDO::PARAM_STR);
//     $sql->bindParam('DESC_beer', $DESC_beer, PDO::PARAM_STR);
//     $sql->bindParam('PHOTO_beer', $PHOTO_beer, PDO::PARAM_STR);
//     $sql->execute();
//     $db = disconnectDb();
//     echo "Bière $NAME_beer ajoutée avec succès";
// }