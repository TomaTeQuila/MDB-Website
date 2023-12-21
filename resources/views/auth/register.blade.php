<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>login mdb</title>
        <link rel = "stylesheet" href="{{asset('css/estilos.css')}}">
        <script src="https://kit.fontawesome.com/d900d20319.js" crossorigin="anonymous"></script>
        
    </head>
    <body>
        <section>
            <div class="container-main">
                <div class="container-error">
                    @if($errors->any())
                        <strong id="error">
                            @foreach($errors->all() as $error)
                                {{$error }}
                                <br>
                            @endforeach
                        </strong>
                    @endif
                    <div class="formu">
                        <img class = "avatar" src="{{asset('images/www.png')}}" alt = "Logo MDB RP">
                        <h1>Registrar cuenta</h1>
                        <form method="POST" action="{{route('usuario.store')}}">
                            @method('POST')
                            @csrf
                            <div class = "input-contenedor">
                                <i class = "fa-solid fa-envelope"></i>
                                <input type="email" id="email" name="email" placeholder=" "  onfocus="this.removeAttribute('readonly')" readonly>
                                <label>Email</label>
                            </div>
                            <div class = "input-contenedor">
                                <i class = "fa-solid fa-envelope"></i>
                                <input type = "text" id="username" name="username" placeholder=" " onfocus="this.removeAttribute('readonly')" readonly>
                                <label>Nombre de usuario</label>
                            </div>
                            <div class = "input-contenedor">
                                <i class = "fa-solid fa-lock"></i>
                                <input type = "password" id="password1" name="password1"  onfocus="this.removeAttribute('readonly')" readonly>
                                <label>Contraseña</label>
                            </div>
                            <div class = "input-contenedor">
                                <i class = "fa-solid fa-lock"></i>
                                <input type = "password" id="password2" name="password2"  onfocus="this.removeAttribute('readonly')" readonly>
                                <label>Repetir contraseña</label>
                            </div>
                    
                    
                            <input type = "submit" value = "Registrar cuenta" >
                    
                            <div class = "registrar">
                                ¿Ya estás registrado? Inicia sesión con tus credenciales <a href="{{route('auth.index')}}">aquí</a>.
                            </div>
                        </form>
                    </div>
                </div>
                </div>
        </section>
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
