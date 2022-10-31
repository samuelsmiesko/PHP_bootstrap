<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="stavebná firma, stavba, stavebníctvo">
    <meta name="description" content="webstránka per stavebnú firmu">
    <meta name="author" content="Smieško">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/css/styles.css">
    
    <title>Ing.Marcel Smieško-DREVOSTAVBA</title>
</head>
<body>
  
    <div class="container-fluid topdiv p-3">
        <span>
          <img class ="logofirm" src="css/images/house.gif" alt="logo" height="70">
        </span>
        <span>
          <img class="truck" src="css/images/wolf.gif"  alt="logo" height="80"> 
        </span>
    </div>
    <div class="navigationbar">
      <div class="container">
        <div class="row">
          <div class="m-1">
            <span><a href="#">Ing.Marcel Smieško-DREVOSTAVBA</a></span>
          </div>
          <div class="linemenu">
              <span class="m-1"><a href="kontakt.php">Kontakt</a></span>
              <span class="m-1"><a href="galeria.php">Galéria</a></span>
              <span class="m-1"><a href="about.php">O nás</a></span>
          </div>
          <div onclick = "myFunction()" class="dropmenu">
            <div class="dropline"></div>
            <div class="dropline"></div>
            <div class="dropline"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="dropdown">
      <div class="p-2"><a href="kontakt.php">Kontakt</a></div>
      <div class="p-2"><a href="galeria.php">Galéria</a></div>
      <div class="p-2"><a href="about.php">O nás</a></div>
    </div>
    <script>
      const photos = ["van", "dozer", "forklift"];
      async function pickimage(){
        let pos = $(".truck").css("margin-left");
        let part = parseInt(pos.replace('px',''))
        for (let i = 0; i < photos.length; i++) {
          console.log(i)
          console.log(screen.width/part)
          console.log(screen.width)
          console.log(photos[i])
          const element = document.querySelector(".truck");
          console.log('css/images/'+photos[i]+'.gif')
          element.attributes[1].value = 'css/images/'+photos[i]+'.gif';
          await new Promise(res => { setTimeout(res, 2000); });
          if(i==2){
            i = -1;
          }
        }
          
      }pickimage()

      

      function myFunction() {
        var attr = $(".dropdown").css("display");
        console.log(attr)
        if(attr==='none'){
          $(".dropdown").css("display", "block");
          console.log('block')
          
        }else if(attr==='block'){
          $(".dropdown").css("display", "none");
          console.log('none')
        }
      }
      
    </script>