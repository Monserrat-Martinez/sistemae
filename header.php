<?php  
echo <<<_INIT
   <!DOCTYPE html>
   <html>
      <head>
         <!-- Required meta tags -->
         <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">    
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.0/css/bulma.min.css">
         <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
         <script src="node_modules\axios\dist\axios.min.js"></script>
         <script src= "node_modules\bulma\css\bulma.min.css"></script>
_INIT;

echo <<<_MAIN
         <title></title>
      </head>

      <body>
      <nav class="navbar" role="navigation" aria-label="main navigation" >
      <div class="navbar-brand">
         <a class="navbar-item" href="https://bulma.io">
            <img src="descarga.jpg" width="112" height="28">
         </a>

         <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
         </a>
      </div>

      <div id="navbarBasicExample" class="navbar-menu">
         <div class="navbar-start">
            <a class="navbar-item" href='index2.php'>
               Inicio
            </a>
            <a class="navbar-item" href='consultar.php'>
               Insertar calificaciones
            </a>


            <div class="navbar-dropdown">
               <a class="navbar-item" href='social.php'>
                  Social
               </a>
               <hr class="navbar-divider">
               
            </div>
         </div>

         <div class="navbar-end>
            <div class="navbar-item">
            <div class="buttons">
               
            </div>
            </div>
         </div>
      </div>
</nav>
         <div data-role="page">
            <div data-role="header">
               <div class="centro">
         
               </div>
            </div>
            <div data-role='content'>
            
_MAIN;
?>