<?php
require('public/connect.php');

class messages extends Databases{
public function message(){
    
  $result =$this->connect()->prepare("SELECT * FROM donne ORDER BY Id");
  $result->execute(); 
    $result = $result->fetchALL(PDO::FETCH_ASSOC); 
     
    return $result;
    
}



public function ajoutmessage(){

  if(isset($_POST['action']) && $_POST['action']=="ajouter" && !empty($_POST['messages']) && !empty($_POST['nom'])) {
  $ajouter = $this->connect()->prepare('INSERT INTO donne(Id, msg name, date) VALUES (":",messages,:nom,":")');
  

  $ajouter->bindParam(':name', $_POST['nom'],
   PDO::PARAM_STR);

   $ajouter->bindParam(':msg', $_POST['messages'],
    PDO::PARAM_STR);
                                   
    $ajouter->execute();

    
     
    return $ajouter;

}


}
}





?>













