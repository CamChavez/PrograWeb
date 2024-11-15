<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intento Fallido</title>
    <!-- Importa Materialize CSS desde el CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #fffde7; /* Fondo amarillo claro */
        }
        h1 {
            color: #f57f17; /* Amarillo oscuro para el mensaje de error */
            text-align: center;
            font-weight: bold;
        }
        .card {
            background-color: #fff9c4; /* Fondo de tarjeta amarillo suave */
        }
        .input-field input[type="text"] {
            border-bottom: 1px solid #fbc02d; /* Borde amarillo */
            box-shadow: 0 1px 0 0 #fbc02d;
        }
        .btn-custom {
            background-color: #fbc02d; /* Botón amarillo */
            color: white;
        }
        .btn-custom:hover {
            background-color: #f9a825; /* Hover en amarillo más oscuro */
        }
    </style>
</head>
<body>
    <h1>Por favor intenta de nuevo, hay algo mal</h1>
    <div class="container">
        <div class="row">
            <div class="col s12 m6 offset-m3">
                <div class="card">
                    <div class="card-content">
                        <form method="POST" action="logica/loguear.php">
                            <div class="input-field">
                                <input type="text" name="email" placeholder="Email" required />
                            </div>
                            <div class="input-field">
                                <input type="password" name="clave" placeholder="Contraseña" required />
                            </div>
                            <div class="center-align">
                                <button type="submit" class="btn btn-custom waves-effect waves-light">Iniciar Sesión</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Importa el archivo JS de Materialize -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>

