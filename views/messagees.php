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

<body style="background-color:blue">
  <section class="msger">

    <header class="msger-header">

      <div class="msger-header-title">


        <button type="button" class="btn btn-info" style="color:brown;margin-left:20%">
          <a href="deconnexion.php">Deconnection</a></button>
      </div>
      <div class="msger-header-options">
        <span><i class="fas fa-cog"></i></span>
      </div>
    </header>

    <main class="msger-chat">
      <div class="msg left-msg">
        <div class="msg-img" style="background-image: url(https://image.flaticon.com/icons/svg/145/145847.svg)"></div>

        <div class="msg-bubble">
          <div class="msg-text">
            <?php foreach($question as $re ) {  ?>
              <span style="color:brown; "><?php echo $re['nom']; ?></span>
            <div id="chat_data">
             
              <span style="color:brown"><?php echo $re['msg']; ?></span>
              <span style="float:right" ;><?php echo $re['date']; ?></span>
            </div>

            <?php } ?>







          </div>
        </div>
      </div>

      <div class="msg right-msg">
        <div class="msg-img" style="background-image: url(https://image.flaticon.com/icons/svg/145/145867.svg)"></div>

        <div class="msg-bubble">
          <div class="msg-text">
             
            <?php foreach($results as $ree ) {  ?>
              <span style="color:brown; "><?php echo $ree['nom']; ?></span>
            <div id="chat_datta">

              
              <span style="color:brown"><?php echo $ree['msg']; ?></span>
              <span style="float:right" ;><?php echo $ree['date']; ?></span>
            </div>

            <?php } ?>







          </div>


        </div>
      </div>
    </main>

    <form class="msger-inputarea">

      <input type="text" class="msger-input" name="message" id="textee" placeholder="Entrez votre texte">
      <button type="submit" id="valide" class="msger-send-btn">Send</button>
    </form>
    <div id="reponsee"></div>
    <script type="text/javascript" src="script.js"></script>
    <script type="text/javascript" src="AfficheMessagees.js"></script>
    <script type="text/javascript" src="AfficheMessage.js"></script>
  </section>
</body>

</html>