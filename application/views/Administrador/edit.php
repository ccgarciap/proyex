<form method="post" action="<?php echo base_url('index.php/usuario/update/' . $usuario[0]['id']); ?>">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">nombre</label>
                <div class="col-md-9">
                    <input type="text" name="nombre" class="form-control" value="<?php echo $usuario[0]['nombre']; ?>">
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">Drogueria</label>
                <div class="col-md-9">
                    <select name="id_drogueria" class="form-control">
                        <?php if ($usuario[0]['nombreDrogueria']) { ?>
                            <option value="<?php echo $usuario[0]['id_drogueria_id'] ?>" selected><?php echo $usuario[0]['nombreDrogueria'] ?></option>
                        <?php
                        }
                        ?>
                        <option>no aplica</option>
                        <?php for ($i = 0; $i < COUNT($drogueria); $i++) {

                        ?>

                            <option value="<?php echo $drogueria[$i]['id'] ?>"> <?php echo $drogueria[$i]['nombre'] ?> </option>
                        <?php } ?>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-8 col-md-offset-2">
        <div class="form-group">
            <label class="col-md-3">telefono</label>
            <div class="col-md-9">
                <input type="tel" name="telefono" class="form-control" value="<?php echo $usuario[0]['telefono']; ?>">
            </div>
        </div>
    </div>
    <div class="col-md-8 col-md-offset-2">
        <div class="form-group">
            <label class="col-md-3">rol</label>
            <div class="col-md-9">
                <select name="tipo_usuario" class="form-control">
                    <?php if ($usuario[0]['tipo_usuario'] == '1') { ?>

                        <option value="1" selected>Administrador</option>
                        <option value="2">vendedor</option>
                        <option value="3">Asociado</option>
                    <?php
                    }
                    if ($usuario[0]['tipo_usuario'] == '2') { ?>

                        <option value="2" selected>vendedor</option>
                        <option value="1">Administrador</option>
                        <option value="3">Asociado</option>
                    <?php
                    } else {
                    ?>
                        <option value="3" selected>Asociado</option>
                        <option value="1">Administrador</option>
                        <option value="2">vendedor</option>
                        
                    <?php
                    }
                    ?>
                </select>
            </div>
        </div>
    </div>
    <div class="col-md-8 col-md-offset-2">
        <div class="form-group">
            <label class="col-md-3">correo</label>
            <div class="col-md-9">
                <input type="email" name="correo" class="form-control" value="<?php echo $usuario[0]['correo']; ?>">
            </div>
        </div>
    </div>
    <div class="col-md-8 col-md-offset-2">
        <div class="form-group">
            <label class="col-md-3">clave</label>
            <div class="col-md-9">
                <input type="text" name="clave" class="form-control" value="<?php echo $usuario[0]['clave']; ?>">
            </div>
        </div>
    </div>
    
    <div class="col-md-8 col-md-offset-2 pull-right">
        <input type="submit" name="editar" class="btn">
    </div>
    </div>

</form>