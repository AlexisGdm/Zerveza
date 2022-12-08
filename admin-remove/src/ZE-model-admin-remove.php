<?php
// connection à la BDD
$db = connectDb();
// Ouvre une connexion, exécute une requête et renvoie les résultats sous forme de tableau.
$sqlRequest = 'SELECT DISTINCT TYPE_beer FROM beer ORDER BY TYPE_beer';
$sqlResponse = $db->prepare($sqlRequest);
$sqlResponse->execute();
$results = $sqlResponse->fetchAll(PDO::FETCH_OBJ);
// définit le type de bière par défaut
// afficher le type selon le choix
$TYPE_beer = 'Blonde';
if (isset($_GET['choix'])) {
    $TYPE_beer = $_GET['choix'];
}
// Ouvre une connexion, exécute une requête et renvoie les résultats sous forme de tableau.
$sqlRequest2 = 'SELECT ID_beer, NAME_beer, TYPE_beer, DESC_beer, PHOTO_beer FROM beer WHERE TYPE_beer = :TYPE_beer';
$sqlResponse2 = $db->prepare($sqlRequest2);
$sqlResponse2->bindParam('TYPE_beer', $TYPE_beer, PDO::PARAM_STR);
$sqlResponse2->execute();
$results2 = $sqlResponse2->fetchAll(PDO::FETCH_OBJ);
// deconnection de la BDD
$db = disconnectDb();
