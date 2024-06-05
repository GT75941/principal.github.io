<?php
session_start();
require_once '../../util/Sesion.php';
require_once '../../Layout/Layout.php';
//En el caso de actualizar la pagina web entonces llamaremos nuevamente 
//al Controlador para de esta manera tener actualizada la lista
if(Session::NoExisteSesion("lista") ) {
//    header("location: ../../Controller/ContactoController.php?Op=Listar");
//    return;
}
$Lista= Session::getSesion("lista");
Session::eliminarSesion("lista");
Layout::menu();
//Solo el contenido que cambiara ira aqui
?>
<div class="page-header">
    <h1>CONTACTO
        <a href="<?php echo "../../View/contacto/nuevoContacto.php";?>" class="btn btn-info btn-lg">
            <span class="glyphicon glyphicon-plus"></span> Agregar 
        </a>
    </h1>     
</div>
<table class="table table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>Codigo</th>
            <th>Nombres</th>
            <th>Email</th>
            <th>Operaciones</th>
        </tr>
    </thead>
    <tbody>
        <?php  
        $i = 1;
        $url = "../../Controller/ContactoController.php?id=";
        foreach ($Lista as $row ) { 
        ?>
        <tr>
            <td><?php echo $i?></td>
            <td><?php echo $row['codpersona']?></td>
            <td><?php echo $row['nombres']?></td>
            <td><?php echo $row['email']?></td>
            <td>
                <ul class="nav nav-pills">
                    <li>
                        <a href="<?php echo $url.$row['codpersona']?>&Op=Ver" title="Ver" 
                           data-toggle="modal" data-target="#view_contacto_modal">
                            <span class="glyphicon glyphicon-search"></span> 
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo $url.$row['codpersona']?>&Op=Recuperar" title="Editar">
                            <span class="glyphicon glyphicon-pencil"></span> 
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo $url.$row['codpersona']?>&Op=Eliminar" title="Eliminar">
                            <span class="glyphicon glyphicon-trash"></span> 
                        </a>
                    </li>
                </ul>       
            </td>
        </tr>
        <?php $i++; } ?>
    </tbody>
</table>
<?php
//Llamamos al footer y se cierra la pagina
Layout::footer();
if(Session::existeSesion("contacto") ) {
//    $cod = $_SESSION["contacto"][0];
    $Contacto= Session::getSesion("contacto");
    $cod = $Contacto[0];
    Session::eliminarSesion("contacto");
}
else {
    $cod = '';
}

?>
<!-- Bootstrap Modals -->
<!-- Modal - Add New Record/User -->
<div class="modal fade" id="view_contacto_modal" tabindex="-1" role="dialog" aria-labelledby="basicModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Informacion de Contacto</h4>
            </div>
            <div class="modal-body">

                <div class="form-group">
                    <label for="first_name">Codigo</label>
                    <input type="text" id="codigo" class="form-control" value="<?php  echo $cod?>"/>
                </div>

                <div class="form-group">
                    <label for="last_name">Nombre</label>
                    <input type="text" id="nombre" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" id="email" class="form-control"/>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<!-- // Modal -->



