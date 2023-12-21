<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <nav>
        <ul class="sidebar">
            <li onclick=closeSidebar()><a href="#"><span class="material-symbols-outlined">
                close
            </span></a></li>
            <li><a href="https://discord.gg/j6j8Cheutw" target="_blank">Discord</a></li>
            <li><a href="#">Tienda</a></li>
            <li><a href="https://www.youtube.com/@mdbcrp4517 target="_blank"">Youtube</a></li>
            <li><a href="{{route('auth.index')}}">Iniciar Sesion</a></li>
        </ul>
        <ul>
            <li class="first"><a href="#">MDB Roleplay</a></li>
            <li class="hideOnMobile"><a href="https://discord.gg/j6j8Cheutw" target="_blank">Discord</a></li>
            <li class="hideOnMobile"><a href="#">Tienda</a></li>
            <li class="hideOnMobile"><a href="https://www.youtube.com/@mdbcrp4517" target="_blank">Youtube</a></li>
            @if(Gate::allows('usuario-login') || Gate::allows('soporte-login') || Gate::allows('admin-login'))
            <li class="hideOnMobile last">
                <a href="{{route('usuario.logout')}}">Cerrar Sesion</a></li>
            @else            
            <li class="hideOnMobile last">
                <a href="{{route('auth.index')}}">Iniciar Sesion</a></li>
            @endif
            <li class="menu-botton" onclick=showSidebar()><a href="#"><span class="material-symbols-outlined">menu</span></a></li>
        </ul>
    </nav>

    @yield('main-content')



    <footer>
        <h1>Discord: </h1>
        <h2>Instagram: </h2>
    </footer>

    <script>
        function showSidebar(){
            const sidebar = document.querySelector('.sidebar')
            sidebar.style.display = 'flex'
        }

        function closeSidebar(){
            const sidebar = document.querySelector('.sidebar')
            sidebar.style.display = 'none'
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>