<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="log_reg.css">
  <title>Document</title>
</head>
<body>

  <section class="wrapper">
    <div class="form signup">
      <header>Registrarse</header>
      <form action="registro.php" method="POST">
        <input type="text" name="nombre" placeholder="Nombre" required />
        <input type="text" name="apellido" placeholder="Apellido" required />
        <input type="text" name="direccion" placeholder="Direccion" required />
        <input type="text" name="dni" placeholder="DNI" required />
        <input type="text" name="celular" placeholder="Celular" required />
        <input type="text" name="correo" placeholder="Correo" required />
        <input type="password" name="contraseña" placeholder="Password" required />
        <input type="submit" value="Registrarse" />
      </form>
    </div>
    <div class="form login">
      <header>Iniciar Sesion</header>
      <form action="login.php" method="POST">
        <input type="text" name="correo" placeholder="Ingresar Correo" required />
        <input type="password" name="contraseña" placeholder="Contraseña" required />
        <input type="submit" value="Login" />
      </form>
    </div>
    <script>
      const wrapper = document.querySelector(".wrapper"),
        signupHeader = document.querySelector(".signup header"),
        loginHeader = document.querySelector(".login header");
      loginHeader.addEventListener("click", () => {
        wrapper.classList.add("active");
      });
      signupHeader.addEventListener("click", () => {
        wrapper.classList.remove("active");
      });
    </script>
  </section>

</body>
</html>
