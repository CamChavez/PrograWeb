<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login en Amarillo</title>
    <link rel="stylesheet" href="./estilos/estilosIndex.css">
</head>
<header> 
    Hoy soñe con mi tio Peteeee, me dijo que te registraras aquí
</header>
<body >
    <div class="row">
    <img src="./media/nsqk.jpeg" alt="nsqk">
        <div class="col">
            <div class="card">
                <div class="card-content">
                    <h4 class="card-title center-align">Login de Sistema</h4>
                    <form method="POST" action="logica/loguear.php">
                        <!-- Campo de Email -->
                        <div class="input-field">
                            <input id="email" type="email" name="email" required />
                            <label for="email">Correo Electrónico</label>
                        </div>
                        <div class="input-field">
                            <input id="clave" type="password" name="clave" required />
                            <label for="clave">Contraseña</label>
                        </div>
                        <div class="center-align">
                            <button type="submit" class="btn">Iniciar Sesión</button>
                        </div>
                    </form>
                </div>
                <div class="card-action center-align">
                    <br>
                    <a href="./Registro.php">¿No tienes cuenta? Regístrate aquí</a>
                </div>
            </div>
        </div>
    </div>
</body>
<footer>
    <h3>esto fue radio ATP</h3>
</footer>
</html>
