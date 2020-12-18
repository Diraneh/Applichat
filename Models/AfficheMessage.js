


   function AfficheMessage(){
    // 1. Elle doit créer une requête AJAX pour se connecter au serveur, et notamment au fichier handler.php
    const requeteAjax = new XMLHttpRequest();
    requeteAjax.open("GET", "Modals/model.php");
  
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
  
      const messages = document.querySelector('chat_data');
  
      messages.innerHTML = html;
      messages.scrollTop = messages.scrollHeight;
    }
  
    // 3. On envoie la requête
    requeteAjax.send();
  }
