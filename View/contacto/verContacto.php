<?php
require_once '../../Layout/Layout.php';
Layout::menu(); $url = "Contacto.php";?>
<h1>VER CONTACTO
    <a href="<?php echo $url?>" class="btn btn-info btn-lg">
        <span class="glyphicon glyphicon-"></span> Volver 
    </a>hand-left
</h1>
<form class="form-horizontal" method="post" action="">
    <div class="form-group">
        <label class="control-label col-sm-2" for="codigo">Codigo:</label>
        <div class="col-sm-10">
            <input type="text" value="<?php echo $_REQUEST['cod']?>" class="form-control" disabled>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="nombres">Nombres:</label>
        <div class="col-sm-10">          
            <input type="text" value="<?php echo $_REQUEST['nom']?>" class="form-control" disabled>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="email">Email:</label>
        <div class="col-sm-10">          
            <input type="email" value="<?php echo $_REQUEST['email']?>" class="form-control" disabled>
        </div>
    </div>
</form>
<?php Layout::footer(); ?>         

