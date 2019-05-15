<?php
/*
Escribir una página PHP que presente un formulario con los campos “usuario” y “contraseña” 
y un botón que permita iniciar sesión. Al iniciar la sesión se debe redireccionar a la página 
de inicio.php que mostrará los datos guardados en la sesión y un saludo mostrando el nombre del 
usuario ingresado. La página de inicio debe tener un link que permita cerrar la sesión del usuario.
*/
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Bienvenido</title> 
</head>
<body>
    <h2>Registro</h2>
            <div>
                <div >
                    <div>

                       <form method="POST" action="PHP/login.php">
                          <input type="text" id="login" name="usuario" placeholder="usuario">
                          <input type="password" id="password"  name="password" placeholder="contraseña">
                            <br><br>
                            <input type="submit"  value="Entrar">
                        </form>

                    </div>
                </div>
            </div>
     
</body>

</html>