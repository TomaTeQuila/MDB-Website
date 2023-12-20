<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>login mdb</title>
        <link rel = "stylesheet" href="{{asset('css/estilos.css')}}">
        <script src="https://kit.fontawesome.com/d900d20319.js" crossorigin="anonymous"></script>
        
    </head>
    <body>
        <div class="container-error">
            @if($errors->any())
                <strong>
                    @foreach($errors->all() as $error)
                        {{$error}}
                    @endforeach
                </strong>
            @endif
        </div>
        <div class="formu">
            <h1>Registrar cuenta</h1>
            <form method="POST" action="{{route('usuario.store')}}">
                @method('POST')
                @csrf
                <div class = "input-contenedor input-email">
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
                    ¿Ya estás registrado? Inicia sesión con tus credenciales <a href="*">aquí</a>.
                </div>

            </form>

        </div>

    </body>
</html>
