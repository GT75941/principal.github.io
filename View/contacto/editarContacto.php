<?php
require_once '../../Layout/Layout.php';
Layout::menu(); 
$url = "../../Controller/ContactoController.php?";
$url2 = "Contacto.php";?>
<h1>EDITAR CONTACTO
    <a href="<?php echo $url2?>" class="btn btn-info btn-lg">
        <span class="glyphicon glyphicon-hand-left"></span> Volver 
    </a>
</h1>
<form id="editarForm" class="form-horizontal" method="get" action="<?php echo $url?>">
    <div class="form-group">
        <label class="control-label col-sm-2" for="codigo">Codigo:</label>
        <div class="col-sm-10">
            <input type="text" value="<?php echo $_REQUEST['cod']?>" class="form-control" disabled >
            <input class="hidden-sm"type="text" value="<?php echo $_REQUEST['cod']?>" class="form-control" hidden name="cod" >
            <input class="hidden-sm"type="text" value="Editar" class="form-control" hidden name="Op" >
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="nombres">Nombres:</label>
        <div class="col-sm-10">          
            <input type="text" value="<?php echo $_REQUEST['nom']?>" class="form-control" name="nombre">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="email">Email:</label>
        <div class="col-sm-10">          
            <input type="email" value="<?php echo $_REQUEST['email']?>" class="form-control" name="email">
        </div>
    </div>
    <div class="form-group">        
        <div class="col-sm-offset-2 col-sm-10">            
            <button type="submit" class="btn btn-primary" onclick="return confirm('Estas Seguro?');return false;">Guardar</button>
        </div>
    </div>
       
</form>
<?php Layout::footer(); ?>         

