<?php
/**
 * Description of Layout
 *
 * @author BILLPAZ
 */
class Layout {
    static function menu(){
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Pagina de Prueba en Bootstarp">
    <meta name="author" content="Ing. Willian Zamalloa Paro">
    <link rel="icon" href="../../img/favicon.ico">
    
    <title>Mi Template en Bootstrap 3</title>

    <!-- Bootstrap core CSS -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Estilos solo para este template -->
    <link href="../../css/navbar.css" rel="stylesheet">
    
    <!-- Estilos solo para este template -->
    <link href="../../css/main.css" rel="stylesheet">

  </head>

  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Menu Smart</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Proyecto Titulacion</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="../../Controller/ContactoController.php?Op=Listar">Contacto</a></li>
            <li><a href="#contactanos">Contactanos</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Aciones</a></li>
                <li><a href="#">Otras Acciones</a></li>
                <li><a href="../../Controller/ContactoController.php?Op=Listar">Contacto</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Titulo de Links</li>
                <li><a href="#">Link Separado</a></li>
                <li><a href="#">Mas Links</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    
    <div class="container"> <!-- Begin page content -->

<?php
    }
    
    static function footer(){
 ?>
</div><!-- End page content -->
    
    <footer class="footer">
      <div class="container">
          <p class="text-muted">Willian Zamalloa Paro &COPY; Todos los derechos reservados &reg;</p>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../../js/jquery.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    
    
    <!-- <script src="../../js/jquery.min.js"></script>
         <script src="../../js/bootstrap.min.js"></script> -->
  </body>
</html>

<?php
    }
}
?>