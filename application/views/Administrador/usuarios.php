<h1>hola mis usuarios</h1>

<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
   
    <style type="text/css">
        ::selection {
            background-color: #E13300;
            color: white;
        }

        ::-moz-selection {
            background-color: #E13300;
            color: white;
        }

        body {
            background-color: #fff;
            margin: 40px;
            font: 13px/20px normal Helvetica, Arial, sans-serif;
            color: #4F5155;
        }

        a {
            color: #003399;
            background-color: transparent;
            font-weight: normal;
        }

        h1 {
            color: #444;
            background-color: transparent;
            border-bottom: 1px solid #D0D0D0;
            font-size: 19px;
            font-weight: normal;
            margin: 0 0 14px 0;
            padding: 14px 15px 10px 15px;
        }

        code {
            font-family: Consolas, Monaco, Courier New, Courier, monospace;
            font-size: 12px;
            background-color: #f9f9f9;
            border: 1px solid #D0D0D0;
            color: #002166;
            display: block;
            margin: 14px 0 14px 0;
            padding: 12px 10px 12px 10px;
        }

        #body {
            margin: 0 15px 0 15px;
        }

        p.footer {
            text-align: right;
            font-size: 11px;
            border-top: 1px solid #D0D0D0;
            line-height: 32px;
            padding: 0 10px 0 10px;
            margin: 20px 0 0 0;
        }

        #container {
            margin: 10px;
            border: 1px solid #D0D0D0;
            box-shadow: 0 0 8px #D0D0D0;
        }
    </style>
</head>

<body>

    <div id="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Usuarios CRUD
                    <div class="pull-right">
                        <a class="btn btn-primary" href="<?= base_url('index.php/usuario/create') ?>"><button> Crear Usuario</button></a>
                    </div>
                </h2>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>nombre</th>
                        <th>nombreDrogueria</th>
                        <th>telefono</th>
                        <th>rol</th>
                        <th>correo</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php for ($i = 0; $i < COUNT($usuario); $i++) {
                    ?>
                        <tr>
                            
                            <td><?php echo $usuario[$i]['nombre'] ?></td>
                            <td><?php echo $usuario[$i]['nombreDrogueria'] ?></td>
                            <td><?php echo $usuario[$i]['telefono'] ?></td>
                            <td><?php echo $usuario[$i]['rol'] ?></td>
                            <td><?php echo $usuario[$i]['correo'] ?></td>
                            
                            <td>
                                <form method="UPDATE" action="<?php echo base_url('index.php/usuario/edit/' . $usuario[$i]['id']); ?>">
                                    <a class="btn btn-info btn-xs" href="<?php echo base_url('index.php/usuario/edit/' . $usuario[$i]['id']) ?>"><i class="glyphicon glyphicon-pencil"></i></a>
                                    <button type="submit" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-remove"></i>Editar</button>
                                </form>
                            </td>
                            <td>
                                <form method="DELETE" action="<?php echo base_url('index.php/usuario/delete/' . $usuario[$i]['id']); ?>">
                                    <a class="btn btn-info btn-xs" href="<?php echo base_url('index.php/usuario/edit/' . $usuario[$i]['id']) ?>"><i class="glyphicon glyphicon-pencil"></i></a>
                                    <button type="submit" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-remove"></i>Eliminar</button>
                                </form>
                            </td>

                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>



    </div>

</body>

</html>