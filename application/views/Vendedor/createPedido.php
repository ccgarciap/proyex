<form method="post" action="<?php echo base_url('index.php/pedido/store'); ?>">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">cantidad</label>
                <div class="col-md-9">
                    <input type="number" name="cantidad" class="form-control">
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
                <label class="col-md-3">valor_total</label>
                <div class="col-md-9">
                    <input type="number" name="valor_total" class="form-control">
                </div>
            </div>
        </div>   
               <div class="col-md-8 col-md-offset-2 pull-right">
            <input type="submit" name="create" class="btn">
        </div>
    </div>

</form>