function AfficheMessage(){
    // 1. Elle doit créer une requête AJAX pour se connecter au serveur, et notamment au fichier handler.php
    const requeteAjax = new XMLHttpRequest();
    
      
    requeteAjax.open("GET", "Models/model.php");
  
    // 2. Quand elle reçoit les données, il faut qu'elle les traite (en exploitant le JSON) et il faut qu'elle affiche ces données au format HTML
    requeteAjax.onload = function(){
      const resultat = JSON.parse(requeteAjax.responseText);
      const html = resultat.reverse().map(function(result){
        return `
          <div class="message">
            <span class="date">${result.created_at.substring(11, 16)}</span>
            <span class="msg">${result.msg}</span> : 
            
          </div>
        `
      }).join('');
  
      const messages = document.getElementById('chat_datta');
      var contenuElt = document.createElement("div");
        contenuElt.classList="col-6 col-md-6 col-lg-6";

            messages.innerHTML = requeteAjax;
      messages.style="margin-left:50%";
      messages.append(contenuElt);
    }
  
    // 3. On envoie la requête
    requeteAjax.send();
  }
