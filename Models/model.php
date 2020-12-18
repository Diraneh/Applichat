<?php
require('public/connect.php');

class messages extends Databases{
public function message(){
    
  $result =$this->connect()->prepare("SELECT msg,date FROM donne ORDER BY Id");
  $result->execute(); 
    $result = $result->fetchALL(PDO::FETCH_ASSOC); 
    echo json_encode($result);
    return $result;
    
}

}

?>













