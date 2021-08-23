<form method="post" action="<?php echo base_url('index.php/login/validarUsuario'); ?>">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">correo</label>
                <div class="col-md-9">
                    <input type="email" name="email" class="form-control">
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">clave</label>
                <div class="col-md-9">
                    <input type="password" name="password" class="form-control">
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2 pull-right">
            <input type="submit" class="btn">
        </div>
    </div>

</form>
