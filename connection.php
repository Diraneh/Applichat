

  <?php



$dsn = 'mysql:host=localhost;dbname=authentification;port=3308;charset=utf8';

try {

$pdo = new PDO($dsn, 'root' , '');

}
 catch (PDOException $exception) {

 exit('Erreur de connexion à la base de données');

}

?>

