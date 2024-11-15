<div class="row">
    <div class="col s12 m5">
        <div class="card yellow lighten-4"> <!-- Fondo de tarjeta amarillo claro -->
            <div class="card-content">
                <h1 class="center-align" style="color: #f57f17;">Login de sistema</h1> <!-- Título en un tono amarillo oscuro -->
                <form method="POST" action="logica/loguear.php">
                    <div class="input-field">
                        <input type="text" name="email" placeholder="Email" style="border-bottom: 1px solid #fbc02d; box-shadow: 0 1px 0 0 #fbc02d;" required />
                    </div>
                    <div class="input-field">
                        <input type="password" name="clave" placeholder="Contraseña" style="border-bottom: 1px solid #fbc02d; box-shadow: 0 1px 0 0 #fbc02d;" required />
                    </div>
                    <div class="center-align">
                        <button type="submit" class="btn" style="background-color: #fbc02d; color: white;">Iniciar Sesión</button> <!-- Botón amarillo -->
                    </div>
                </form> 
            </div>
        </div>
    </div>
</div>

