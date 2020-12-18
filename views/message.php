    <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Salon prive</title>
    <meta http-equiv="refresh" content="5">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="CSS/index.css" media="all" />
</head>

<body style=" background-image: url(images/about-us.jpg);">
<div class="container" >
          <div class="row">
    <div id="container">
        <div id="chat_box" style="padding:10px">
        <div class="input-group-append">
                
                <button type="button" class="btn btn-info" style="margin-left:1000px">
                    <a  href="deconnexion.php">Deconnection</a></button>
            </div>  
        <?php foreach($result as $re ) {  ?>
            <div id="chat_data">
           <?php echo $re['nom']; ?>
                 <span  style="color:brown; margin-left:300px"><?php echo $re['msg']; ?></span> 
                 <span style="float:right";><?php echo $re['date']; ?></span> 
                </div> 

              <?php } ?>
                   
        </div>
       
        <form method="POST">
                <div class="input-group">
                <input type="text" class="input-group-text"  name="message" id="texte" placeholder="Entrez votre texte">
                  
                    <div class="input-group-append">
                        <span class="form-control" id="valid">Envoyer
                           
                        </span>
                    </div>
                   
                    
                </div>
                </form>
                <div id="reponse"></div>
            </div>
        <script type="text/javascript" src="script.js"></script>
        <script type="text/javascript" src="AfficheMessage.js"></script>
        

        
       
    </div>
</body>

</html>