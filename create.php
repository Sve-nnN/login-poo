<?php
include("database.php");
$clientes = new Database();
if (isset($_POST) && !empty($_POST)) {
    $nombre = $clientes->sanitize($_POST['nombre']);
    $apellido = $clientes->sanitize($_POST['apellido']);
    $usuario = $clientes->sanitize($_POST['usuario']);
    $PNF = $clientes->sanitize($_POST['PNF']);
    $cedula = $clientes->sanitize($_POST['cedula']);
    $password = $clientes->sanitize($_POST['password']);

    $res = $clientes->create($nombre, $apellido, $usuario, $PNF, $cedula, $password);
    if ($res) {
        $message = "Datos insertados con éxito";
        $class = "alert alert-success";
    } else {
        $message = "No se pudieron insertar los datos";
        $class = "alert alert-danger";
    }

?>
<div class="<?php echo $class ?>">
    <?php echo $message; ?>
</div>
<?php
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD con PHP usando Programación Orientada a Objetos</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/custom.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body>
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8">
                        <h2>Agregar <b>Cliente</b></h2>
                    </div>
                    <div class="col-sm-4">
                        <a href="index.php" class="btn btn-info add-new"><i class="fa fa-arrow-left"></i> Regresar</a>
                    </div>
                </div>
            </div>

            <div class="row">
                <form method="post">
                    <div class="col-md-6">
                        <label>Nombre:</label>
                        <input type="text" name="nombre" id="nombre" class='form-control' maxlength="100" required>
                    </div>
                    <div class="col-md-6">
                        <label>Apellido:</label>
                        <input type="text" name="apellido" id="apellido" class='form-control' maxlength="100" required>
                    </div>
                    <div class="col-md-3">
                        <label>usuario:</label>
                        <input type="text" name="usuario" id="usuario" class='form-control' maxlength="15" required>
                    </div>
                    <div class="col-md-3">
                        <label>Contrasenia:</label>
                        <input type="password" name="password" id="password" class='form-control' maxlength="15"
                            required>
                    </div>
                    <div class="col-md-6">
                        <label>PNF:</label>
                        <textarea name="PNF" id="PNF" class='form-control' maxlength="255" required></textarea>
                    </div>

                    <div class="col-md-6">
                        <label>Cedula:</label>
                        <input type="text" name="cedula" id="cedula" class='form-control' maxlength="64" required>

                    </div>

                    <div class="col-md-12 pull-right">
                        <hr>
                        <button type="submit" class="btn btn-success">Guardar datos</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>