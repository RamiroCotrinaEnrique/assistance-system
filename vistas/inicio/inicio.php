
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenida</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function updateDateTime() {
            var now = new Date();
            document.getElementById('dateTime').innerHTML = now.toLocaleString();
        }
        setInterval(updateDateTime, 1000);
    </script>
    <?php
    require_once __DIR__ . "../../controladores/usuarios.controlador.php";

    require_once __DIR__ . "../../modelos/usuarios.modelo.php";
    ?>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="display-4">¡Bienvenido!</h1>
                <p id="dateTime" class="lead"></p>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-6 offset-md-3">
                <div class="form-group">
                    <label for="dni">DNI:</label>
                    <input type="text" class="form-control" id="dni" placeholder="Ingrese su DNI">
                </div>
                <div class="text-center">
                    <button type="button" class="btn btn-primary mr-2">Marcar Entrada</button>
                    <button type="button" class="btn btn-secondary">Marcar Salida</button>
                </div>
                <br>
                <center>
                <a href="vistas/login/login.php">Ingresar al sistema</a>
                </center>
                
            </div>
        </div>
    </div>
</body>
</html>
