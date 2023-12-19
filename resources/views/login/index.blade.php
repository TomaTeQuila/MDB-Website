<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>login mdb</title>
        <link rel = "stylesheet" href="{{asset('css/estilos.css')}}">
        <script src="https://kit.fontawesome.com/d900d20319.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="formu">
            <h1>Inicio de sesión</h1>
            <form method = "post">

                <div class = "input-contenedor">
                    <i class = "fa-solid fa-envelope"></i>
                    <input type = "text" required placeholder=" " readonly onfocus="this.removeAttribute('readonly')">
                    <label>Nombre de usuario</label>
                </div>

                <div class = "input-contenedor">
                    <i class = "fa-solid fa-lock"></i>
                    <input type = "password" required readonly onfocus="this.removeAttribute('readonly')">
                    <label>Contraseña</label>
                </div>
                
                <div class = "recuperar">Olvidé mi contraseña.</div>
                
                <input type = "submit" value = "Iniciar sesion" >
                
                <div class = "registrar">
                    ¿Aún no estás registrado? registrate <a href="*">aquí</a>.
                </div>

            </form>

        </div>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
              const formControls = document.querySelectorAll('.form-control');
        
              formControls.forEach(function (input) {
                input.addEventListener('focus', function () {
                  input.nextElementSibling.classList.add('focused');
                });
        
                input.addEventListener('blur', function () {
                  if (input.value === '') {
                    input.nextElementSibling.classList.remove('focused');
                  }
                });
              });
            });
        </script>
    </body>
</html>
