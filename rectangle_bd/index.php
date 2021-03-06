<?php
//Helpers
require_once("Validator.php");
//Model=> Diagramme de Classe
require_once("Figure.php");
require_once("Rectangle.php");
require_once("Carre.php");
//Acces BD
require_once("CarreManager.php");
require_once("RectangleManager.php");

$errors=[];
$resultat=[];
$longueur="";
$largeur="";
//Ouvrir session_start()
session_start();
if(!isset($_SESSION['id'])){
 $_SESSION['id']=0;
}
?>





<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>


          <div class="container mt-1">

          <nav class="navbar navbar-expand-sm navbar-dark bg-primary">
              <a class="navbar-brand" href="#">Gestion Figure</a>
              <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                  aria-expanded="false" aria-label="Toggle navigation"></button>
              <div class="collapse navbar-collapse" id="collapsibleNavId">
                  <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                      <li class="nav-item active">
                          <a class="nav-link" href="index.php?url=rectangle">Rectangle <span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="index.php?url=carre">Carre</a>
                      </li>
                      
                  </ul>
                 
              </div>
          </nav>

          <?php
          //Routage
            if(isset($_GET['url'])){
                $url=$_GET['url'];
                if($url==="rectangle"){
                    require_once("./viewRectangle.php")  ; 
                }else{
                    require_once("./viewCarre.php")  ;
                }

            }else{
                require_once("./viewRectangle.php")  ;
            }

                

          ?>
          
          </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>