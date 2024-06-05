<?php
require_once '../../Layout/Layout.php';
Layout::menu(); $url = "../../Controller/ContactoController.php?Op=Guardar";?>
<h1>NUEVO CONTACTO</h1>
<form class="form-horizontal" method="post" action="<?php echo $url?>">
    <div class="form-group">
        <label class="control-label col-sm-2" for="codigo">Codigo:</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="codigo" placeholder="Ingrese el Codigo">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="nombres">Nombres:</label>
        <div class="col-sm-10">          
            <input type="text" class="form-control" name="nombres" placeholder="Ingrese sus Nombres y Apellidos">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="email">Email:</label>
        <div class="col-sm-10">          
            <input type="email" class="form-control" name="email" placeholder="Ingrese un Email Valido">
        </div>
    </div>
    <div class="form-group">        
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </div>
</form>
<?php Layout::footer(); ?>                  