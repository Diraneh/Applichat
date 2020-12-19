//on defini ce qui va se passer quand nous allons cliquer sur le bouton ayant l'id valid
document.getElementById("valide").addEventListener("click", function(e){
    e.preventDefault();
    ajoutMessage();
  
})

//On crée la fonction ajourMessage
function ajoutMessage(){
   let message = document.getElementById("textee").value

   

   //on va vérifier si il y a une valeur et en fonction de la réponse on va faire qqch
   if(message != ""){
       let xmlhttp = new XMLHttpRequest();
       xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("reponsee").innerHTML="Votre message a bien été ajouté"
            document.getElementById("textee").value = ""
            
        }
        else{
            document.getElementById("reponsee").innerHTML="Votre message n'a pas pu être ajouté" 
        }
       }

     //  var interval = window.setInterval(xmlhttp, 1000);
       //On ouvrir notre requête
       xmlhttp.open("POST", "views/ajoutMessage.php?message="+message);
       

       //on envoi la requête
       xmlhttp.send();
       

   }
   


   }

 
