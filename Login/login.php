<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link
      rel="shortcut icon" 
      href="https://iconutopia.com/wp-content/uploads/2016/06/space-dog-laika1.png"
    />
    <link rel="stylesheet" href="index.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
  </head>
  <body>
    <div class="login">
      <div class="login-Triangulo"></div>

      <h2 class="login-header">Iniciar Seccion</h2>

      <form class="login-container" action="logica/loguear.php" method="post">
        <p>
          <input type="text" placeholder="Usuario" name="Usuario" />
        </p>
        <p>
          <input type="password" placeholder="Contraseña" name="clave" />
        </p>
        <p>
          <input value="Entrar" type="submit" />
        </p>
      </form>
    </div>
  </body> 
</html>
