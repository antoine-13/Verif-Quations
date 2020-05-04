<!DOCTYPE html>
<html>
  <head>
      <title>Accueil</title>
      <meta name="viewport" content="width=device-width,initial-scale=1.0">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  </head>
  <body>


  <header class="">
      <div class="navbar-fixed">
          <nav style="height:150px;" class="nav-wrapper blue">
              <div class="container">
                  <h1 style="margin-left:40%; margin-top:1%; font-size:40px;">Vérif&Quations </h1>
                  <h2 style="margin-left:40%; font-size:30px;">Réussi ton équation !</h2>
                  
                  <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                  <ul class="right hide-on-med-and-down">
                      <!-- Eléments du menu -->
                  </ul>
              </div>
          </nav>
      </div>
  </header>

  <ul class="sidenav" id="mobile-demo">
      <!-- Eléments du menu avec le side-nav -->
  </ul>

  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script>
      $(document).ready(function(){
          $('.sidenav').sidenav();
      });
  </script>

  </body>
</html>
