<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Salon prive</title>
   
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="CSS/index.css" media="all" />
</head>

<body style=" background-image: url(images/about-us.jpg);">
<section class="msger">
    
  <header class="msger-header">
  
    <div class="msger-header-title">

    
      <button type="button" class="btn btn-info" style="margin-left:20%">
        <a  href="deconnexion.php">Deconnection</a></button>
    </div>
    <div class="msger-header-options">
      <span><i class="fas fa-cog"></i></span>
    </div>
  </header>

  <main class="msger-chat">
    <div class="msg left-msg">
      <div
       class="msg-img"
       style="background-image: url(https://image.flaticon.com/icons/svg/327/327779.svg)"
      ></div>

      <div class="msg-bubble">
          
        <div class="msg-info">
         
        </div>
        
                
               
          
       
        </div>
      </div>
    </div>

    <div class="msg right-msg">
      <div
       class="msg-img"
       style="background-image: url(https://image.flaticon.com/icons/svg/145/145867.svg)"
      ></div>

      <div class="msg-bubble">
       

        <div class="msg-text">
        <?php foreach($question as $ree ) {  ?>
            <div id="chat_datta">
                    
                    <span  style="color:brown; "><?php echo $ree['nom']; ?></span> 
                 <span  style="color:brown; "><?php echo $ree['msg']; ?></span> 
                 <span style="float:right";><?php echo $ree['date']; ?></span> 
                </div> 

              <?php } ?>
        </div>
      </div>
    </div>
  </main>

  <form class="msger-inputarea">
  
    <input type="text" class="msger-input" name="message" id="texte" placeholder="Entrez votre texte">
    <button type="submit"  id="valid" class="msger-send-btn">Send</button>
  </form>
  <div id="reponse"></div>
  <script type="text/javascript" src="scriptt.js"></script>
        <script type="text/javascript" src="AfficheMessagees.js"></script>
</section>
</body>

</html>