<?php
session_start();
require_once '../Model/ContactoModel.php';
require_once '../util/Sesion.php';
try {
    //recuperamos la operacion
    $Op = $_REQUEST["Op"];
    $model = new ContactoModel();
    switch ($Op) {
        case 'Listar':
            $Lista = $model->listar();
            Session::setSesion("lista", $Lista);
            $target = "../View/contacto/Contacto.php";
            break;
        case 'Guardar':                                                                
            $model->setCod($_REQUEST["codigo"]);
            $model->setNombres($_REQUEST["nombres"]);
            $model->setEmail($_REQUEST["email"]);
            $model->insertar();
            $target = "ContactoController.php?Op=Listar";      
            break;
        case 'Ver':
            $id = $_REQUEST["id"];
            $Contacto=$model->recuperarUnContacto($id);
            $Cod = $Contacto[0];
            $Nombre = $Contacto[1];
            $Email = $Contacto[2];
            $target = "../View/contacto/verContacto.php?cod=".$Cod."&nom=".$Nombre."&email=".$Email; 
            break;
        case 'Recuperar':
            $id = $_REQUEST["id"];
            $Contacto=$model->recuperarUnContacto($id);
            $Cod = $Contacto[0];
            $Nombre = $Contacto[1];
            $Email = $Contacto[2];
            $target = "../View/contacto/editarContacto.php?cod=".$Cod."&nom=".$Nombre."&email=".$Email; 
            break;
        case 'Editar':
            $model->setCod($_REQUEST["cod"]);
            $model->setNombres($_REQUEST["nombre"]);
            $model->setEmail($_REQUEST["email"]);
            $model->editar();
            $target = "ContactoController.php?Op=Listar"; 
            break;
        case 'Eliminar':
            $model->setCod($_REQUEST["id"]);
            $model->eliminar();
            $target = "ContactoController.php?Op=Listar"; 
            break;
        default :
            Session::setSesion("mensajeErr", "Operacion Desconocida");
            $target = "../View/contacto/Contacto.php";    
            break;
    }
    
} catch (Exception $e) {
    Session::setSesion("mensajeErr", $e->getMessage());
}
//Redireccionamos 
header("location: $target");
