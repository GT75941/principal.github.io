<?php
require_once '../../Layout/Layout.php';
//Llamamos al menu
Layout::menu();
//Solo el contenido que cambiara ira aqui
?>
<div class="page-header">
    <h1>Bienvenido al Dashboard</h1>
</div>
<p class="lead">Modulo de Titulacion</p>
<p>Resultado <a href="#">Todo Ok</a> si o si.</p>  
<?php
//Llamamos al footer y se cierra la pagina
Layout::footer();
?>
