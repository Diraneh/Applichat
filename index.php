<?php
session_start();

require('controllers/controller.php');

if(isset($_SESSION['User'])){
echo homeView();

}
else {
    header('location:login.php');
}
?>
