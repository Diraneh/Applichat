
    <?php

    session_start();
    $_SESSION['User']="User";

include("connection.php");


if ( isset($_GET['action']) && !empty($_GET['User'])  && !empty($_GET['Password'])){

 
 $msg="";
  
  $Selection = $pdo->prepare(' SELECT * FROM Identifient WHERE USER=:USER and PASSWORD=:PASSWORD ');
  $Selection->bindParam(':USER', $_GET['User'],
  PDO::PARAM_STR);
  $Selection->bindParam(':PASSWORD', $_GET['Password'],
  PDO::PARAM_STR);
  $estok = $Selection->execute();
  $count = $Selection->rowCount();
  $row   = $Selection->fetch(PDO::FETCH_ASSOC);
  if($count == 1 && !empty($row)) {
    /******************** Your code ***********************/
    
    header('location:index.php');
   
  } 
  
}
  


  
  




?>



    </form>