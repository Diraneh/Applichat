

<?php

require('Models/model.php');


function homeView(){
    $msg = new messages();
    $result = $msg->message();
    $mgs= new messages();
    $question = $mgs->reponser();

 require('views/message.php');
}







function homeViews(){
    $mgs= new messages();
    $msg = new messages();
    $results = $msg->message();
    $question = $mgs->reponser();


 require('views/messagees.php');
}



