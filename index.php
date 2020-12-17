<?php
session_start();
if(!isset($_SESSION['User']))
require('controllers/controller.php');
echo homeView();
?>