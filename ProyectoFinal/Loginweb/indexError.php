<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intento Fallido</title>
    <!-- Importa Materialize CSS desde el CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./estilos/estilosIndexError.css">
</head>
<header> 
    Hoy soñe con mi tio Peteeee, me dijo que ya no te piensa
</header>
<body>
    <h1>Por favor intenta de nuevo, hay algo mal</h1>
    <div class="container">
    <img src="./media/nsqk.jpeg" alt="nsqk">
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
        <br><br><br><br><br><br><br><br><br><br>
    </div>

    <!-- Importa el archivo JS de Materialize -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
<footer>
    <h3>esto fue radio ATP</h3>
</footer>
</html>

