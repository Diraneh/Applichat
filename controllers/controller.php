

<?php
require('Models/model.php');


function homeView(){
    $msg = new messages();
    $result = $msg->message();


 require('views/message.php');
}


function addmessage(){
    $ajout = new messages();
    $res = $ajout->ajoutmessage();


 require('views/message.php');
}
