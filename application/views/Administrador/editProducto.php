<form method="post" action="<?php echo base_url('index.php/producto/update/' . $producto[0]['id']); ?>">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">nombre</label>
                <div class="col-md-9">
                    <input type="text" name="nombre" class="form-control" value="<?php echo $producto[0]['nombre']; ?>">
                </div>
            </div>
        </div>
        <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">valor</label>
                <div class="col-md-9">
                    <input type="number" name="valor" class="form-control" value="<?php echo $producto[0]['valor']; ?>">
                </div>
            </div>
        </div>
                     
        
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">unidad</label>
                <div class="col-md-9">
                    <input type="text" name="unidad" class="form-control" value="<?php echo $producto[0]['unidad']; ?>">
                </div>
            </div>
        </div>
    
        <div class="col-md-8 col-md-offset-2 pull-right">
        <input type="submit" name="editar" class="btn">
    </div>
    </div>

</form>