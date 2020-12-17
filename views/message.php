<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Salon prive</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="CSS/index.css" media="all" />
</head>

<body>
   
    <div id="container">
        <div id="chat_box">
        <?php foreach($result as $re ) {  ?>
            <div id="chat_data">
           
                 <td style="color:green;"><?php echo $re['name']; ?>  </td> 
                 <span style="color:brown;"><?php echo $re['msg']; ?></span> 
                 <span style="float:right;"><?php echo $re['date']; ?></span> 
                </div> 

              <?php } ?>
                   
        </div>
       
        <form method="POST" >
            <input type="text" name="nom" id="texte" placeholder="Enter Name: " />
            <input type="text" name="messages" id="texte" placeholder="Entre  votre message " />
           
            <button type="submit" classe="btn" id="valid" name="action"  value="ajouter">Envoyer</button>
           

        </form>
        <div id="response"></div>
        <script type="text/javascript" src="script.js"></script>
       
    </div>
</body>

</html>