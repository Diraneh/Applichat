<?php
require('public/connect.php');

class messages extends Databases{
public function message(){
    
  $result =$this->connect()->prepare("SELECT * FROM donne ORDER BY Id");
  $result->execute(); 
    $result = $result->fetchALL(PDO::FETCH_ASSOC); 
     
    return $result;
    
}

}

?>













