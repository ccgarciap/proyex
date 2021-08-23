<form method="post" action="<?php echo base_url('index.php/usuario/store'); ?>">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">nombre</label>
                <div class="col-md-9">
                    <input type="text" name="nombre" class="form-control">
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">Drogueria</label>
                <div class="col-md-9">
                <select name="id_drogueria" class="form-control">
                <option>no aplica</option>
                <?php for ($i = 0; $i < COUNT($drogueria); $i++) {
                               
                    ?>
                               
                        <option value="<?php echo $drogueria[$i]['id']?>"> <?php echo $drogueria[$i]['nombre'] ?> </option>
                 <?php } ?>
                </select>
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">telefono</label>
                <div class="col-md-9">
                    <input type="tel" name="telefono" class="form-control">
                </div>
            </div>
        </div>   
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">rol</label>
                <div class="col-md-9">
                <select name="tipo_usuario" class="form-control">
                        <option value="1">Administrador</option>
                        <option value="2">vendedor</option>
                        <option value="3">Asociado</option>
                 </select> 
                </div>
            </div>
        </div>
         <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">correo</label>
                <div class="col-md-9">
                    <input type="email" name="correo" class="form-control">
                </div>
            </div>
        </div>   

        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">clave</label>
                <div class="col-md-9">
                    <input type="text" name="clave" class="form-control">
                </div>
            </div>
        </div>  
        
        <div class="col-md-8 col-md-offset-2 pull-right">
            <input type="submit" name="create" class="btn">
        </div>
    </div>

</form>