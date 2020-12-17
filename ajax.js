var getHttpRequest = function () {
    var httpRequest = false;
  
    if (window.XMLHttpRequest) { // Mozilla, Safari,...
      httpRequest = new XMLHttpRequest();
      if (httpRequest.overrideMimeType) {
        httpRequest.overrideMimeType('text/xml');
      }
    }
    else if (window.ActiveXObject) { // IE
      try {
        httpRequest = new ActiveXObject("Msxml2.XMLHTTP");
      }
      catch (e) {
        try {
          httpRequest = new ActiveXObject("Microsoft.XMLHTTP");
        }
        catch (e) {}
      }
    }
  
    if (!httpRequest) {
      alert('Abandon :( Impossible de créer une instance XMLHTTP');
      return false;
    }
  
    return httpRequest
  }


  var result= document.getElementById("");
  var links=document.querySelectorAll("");

  for (var i=0; i<links.length; i++) {

    var link=links[i];
    link.addEventListener('click',function(){
        var xhr = getHttpRequest();
        
  xhr.onreadystatechange = function (e) {
      e.preventDefault();
      result.innerHTML='Chargement...';
    if (xhr.readyState === 4) {
      if (xhr.status === 200) {
          // contient le résultat de la page
        result.innerHTML= xhr.responseText
      } else {
          // Le serveur a renvoyé un status d'erreur
      }
    }
  }
  xhr.open('GET', this.getAttribut('href'), true)
  // On envoit un header pour indiquer au serveur que la page est appellée en Ajax
  xhr.setRequestHeader('X-Requested-With', 'xmlhttprequest')
  // On lance la requête
  xhr.send()


    })
  }
