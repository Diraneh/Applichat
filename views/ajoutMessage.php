

<?php
require_once('public/connect.php');


//On verifie la méthode du formulaire
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $message = $_GET["message"];
    //ON écrit la requête : on insère dans la colonne message de la table message la variable $message
    $sql = 'INSERT INTO donne(Id, msg, name, date) VALUES (":",messages,:nom,":")';
    
    //On prépare la requête
    $add = $db->prepare($sql);
    //On injecte les valeurs
    $add->bindValue(':msg', $messages, PDO::PARAM_STR);
    $add->bindValue(':name', $nom, PDO::PARAM_STR);
    $add->execute();
    $add->debugDumpParams();
}
else{
    http_response_code(405);
    echo 'Désolé mais la méthode du formulaire n\'est pas la bonne';
}




?>



