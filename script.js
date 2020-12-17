//on defini ce qui va se passer quand nous allons cliquer sur le bouton ayant l'id valid
document.getElementById("valid").addEventListener("click", function(e){
    e.preventDefault();
    ajoutMessage();
})

//On crée la fonction ajourMessage
function ajoutMessage(){
   let message = document.getElementById("texte").value

   let nom = document.getElementById("text").value

   //on va vérifier si il y a une valeur et en fonction de la réponse on va faire qqch
   if(message != ""){
       let xmlhttp = new XMLHttpRequest();
       xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("reponse").innerHTML="Votre message a bien été ajouté"
            document.getElementById("texte").value = ""
        }
        else{
            document.getElementById("reponse").innerHTML="Votre message n'a pas pu être ajouté" 
        }
       }

       if(nom != ""){
        let xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
         if (this.readyState == 4 && this.status == 200) {
             document.getElementById("reponse").innerHTML="Votre message a bien été ajouté"
             document.getElementById("text").value = ""
         }
         else{
             document.getElementById("reponse").innerHTML="Votre message n'a pas pu être ajouté" 
         }
        }
     
    
       //On ouvrir notre requête
       xmlhttp.open("POST", "views/ajoutMessage.php?message="+message+"&nom="+nom);
       

       //on envoi la requête
       xmlhttp.send();

   }
  


   }
}