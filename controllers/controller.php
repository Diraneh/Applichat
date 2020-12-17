

<?php

require('Models/model.php');


function homeView(){
    $msg = new messages();
    $result = $msg->message();


 require('views/message.php');
}



