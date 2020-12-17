

<?php
require_once('connect.php');



//On verifie la méthode du formulaire
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $message = $_GET["message"];
    $nom = $_GET["nom"];
    //ON écrit la requête : on insère dans la colonne message de la table message la variable $message
    $sql = 'INSERT INTO donne(Id, msg, name, date)  VALUES (":", :message,:nom,":")';
    
    //On prépare la requête
    $add = $db->prepare($sql);
    //On injecte les valeurs
    $add->bindValue(':message', $message, PDO::PARAM_STR);
    $add->bindValue(':nom', $nom, PDO::PARAM_STR);
    $add->execute();
    $add->debugDumpParams();
}
else{
    http_response_code(405);
    echo 'Désolé mais la méthode du formulaire n\'est pas la bonne';
}




?>





