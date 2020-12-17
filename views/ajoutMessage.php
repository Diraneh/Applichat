<?php
require('public/connect.php');

      
//On verifie la méthode du formulaire
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $message = $_POST["message"];
    // //On prépare la requête et ON écrit la requête : on insère dans la colonne message de la table message la variable $message
    $ajouter = $pdo->prepare('INSERT INTO donne(Id,  name, date) VALUES (":",:nom,":")');
  

  $ajouter->bindParam(':name', $_POST['nom'],
                            PDO::PARAM_STR);

    
                            
    $ajouter->execute();
    $ajouter->debugDumpParams();
}
else{
    http_response_code(405);
    echo 'Désolé mais la méthode du formulaire n\'est pas la bonne';
}




?>






