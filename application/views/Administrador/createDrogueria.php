<form method="post" action="<?php echo base_url('index.php/drogueria/store'); ?>">
    <div class="row">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">nombre</label>
                <div class="col-md-9">
                    <input type="text" name="nombre" class="form-control">
                </div>
            </div>
        </div>
        <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">direccion</label>
                <div class="col-md-9">
                    <input type="text" name="direccion" class="form-control">
                </div>
            </div>
            <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">telefono</label>
                <div class="col-md-9">
                    <input type="tel" name="telefono" class="form-control">
                </div>
            </div>
        <div class="col-md-8 col-md-offset-2 pull-right">
            <input type="submit" name="create" class="btn">
        </div>
    </div>

</form>