<?php
require('public/connect.php');

class messages extends Databases{
public function message(){
    
  $result =$this->connect()->prepare("SELECT nom, msg, date FROM donne ORDER by date ");
  $result->execute(); 
    $result = $result->fetchALL(PDO::FETCH_ASSOC); 
    
    return $result;
    
}


public function reponser(){
    
  $results =$this->connect()->prepare("SELECT nom, msg, date FROM reponse ORDER by date ");
  $results->execute(); 
    $results = $results->fetchALL(PDO::FETCH_ASSOC); 
    
    return $results;
    
}

}

?>













