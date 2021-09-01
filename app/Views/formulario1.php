<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Validacion Formulario1</title>
        <link rel="stylesheet" href="<?=base_url('public/css/bootstrap.min.css')?>">
    </head>
    <body>
        <div class="container mt-2">
            <a href="<?=base_url('/')?>">Inicio</a>
        </div>
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-5 bg-light p-5">
                    <form action="<?=base_url('validarFormulario1')?>" method="POST">
                        <?= csrf_field(); ?>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nombre</label>
                            <input type="text" name="nombre"  class="form-control" value="<?=set_value('nombre')?>">
                            <span class="text-danger"><?= isset($validation) ? display_error($validation, 'nombre'): '' ?></span>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Profesión</label>
                            <input type="text" name="profesion" class="form-control" value="<?=set_value('profesion')?>">
                            <span class="text-danger"><?= isset($validation) ? display_error($validation, 'profesion'): '' ?></span>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Ubicación</label>
                            <input type="text" name="ubicacion" class="form-control" value="<?=set_value('ubicacion')?>">
                            <span class="text-danger"><?= isset($validation) ? display_error($validation, 'ubicacion'): '' ?></span>
                        </div>
                        <button type="submit" class="btn btn-primary">Validar Formulario</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>