<?php
session_start();
require_once '../../util/Sesion.php';
require_once '../../Layout/Layout.php';
if(Session::NoExisteSesion("lista") ) {
    header("location: ../../Controller/ContactoController.php?Op=Listar");
    return;
}
$Lista= Session::getSesion("lista");
Session::eliminarSesion("lista");
Layout::menu();
//Solo el contenido que cambiara ira aqui
?>
<div class="page-header">
    <h1>CONTACTO
        <a href="<?php echo "../../View/contacto/nuevoContacto.php";?>" class="btn btn-info btn-lg">
            <span class="glyphicon glyphicon-search"></span> Agregar 
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
                        <a href="<?php echo $url.$row['codpersona']?>&Op=Ver" title="Ver">
                            <span class="glyphicon glyphicon-search"></span> 
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo $url.$row['codpersona']?>&Op=Recuperar" title="Editar">
                            <span class="glyphicon glyphicon-pencil"></span> 
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo $url.$row['codpersona']?>&Op=Eliminar" title="Eliminar"
                           onclick="return confirm('Se eliminara este registro, ¿Estas Seguro?');">
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
?>



