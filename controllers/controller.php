

<?php

require('Models/model.php');


function homeView(){
    $msg = new messages();
    $result = $msg->message();


 require('views/message.php');
}




function homeViews(){
    $mgs= new messages();
    $question = $mgs->reponser();


 require('views/messagees.php');
}



