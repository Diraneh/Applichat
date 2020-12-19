<?php
session_start();

require('controllers/controller.php');


if(isset($_SESSION['User'])){


    echo homeViews();
  


}
else {
    header('location:login.php');
}
?>
