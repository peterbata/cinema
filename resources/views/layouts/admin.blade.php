{{--PARTE REPETITIVA DE LA PARTE FRONTEND DE LAS VISTAS- PARTE DE LA ADMINISTRACION LOCALHOST/ADMIN--}}
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ADMINISTRACION-CINEMA</title>

    <!-- cambiamos la forma de llamar los estilos  para que puedan cargar desde el layouts-->
    {{--LARAVEL COLLECTIVE ANTES ISNTALAR VER LA DOCUMENTACION--}}
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/metisMenu.min.css" rel="stylesheet">
        <link href="css/sb-admin-2.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">     -->

    {!!Html::style('css/bootstrap.min.css')!!}
    {!!Html::style('css/metisMenu.min.css')!!}
    {!!Html::style('css/sb-admin-2.css')!!}
    {!!Html::style('css/font-awesome.min.css')!!}

    {{-- {!!Html::style('http://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css')!!} --}}



</head>

<body>

    <div id="wrapper">


        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/admin">Cinema Admin</a>
            </div>


            <ul class="nav navbar-top-links navbar-right">
                 <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">

{{--El packete auth nos brinda el metodo user, que nos brinda acceso que tiene el usuario y en esta parte imprimimos el nomnre
                      hacemos enfasis al metodo user y le decimos que nos de su nombre--}}
                   {!!Auth::user()->name!!}
                      <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="https://www.facebook.com/brayanmurphy.crespoespinoza"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="https://www.facebook.com/brayanmurphy.crespoespinoza"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        {{-- Le decimos que se vaye al metodo logout del controlador LogController y ya cerrara sesion--}}
                        <li><a href="/logout"><i class="fa fa-sign-out fa-fw"></i>Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">

{{--preguntamos si el usuario logueado su id es igual a 1 entonces se le permitira mostrar todo esto en la vista si no no le mostrara--}}
{{--psuse 15 por que es mi usuaario principal--}}
{{--SECCION USUARIO--}}
                      @if(Auth::user()->id == 1)
                        <li>
                            <a href="#"><i class="fa fa-users fa-fw"></i> Usuario<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{!!URL::to('/usuario/create')!!}"><i class='fa fa-plus fa-fw'></i> Agregar</a>
                                </li>
                                <li>
                                    <a href="{!!URL::to('/usuario')!!}"><i class='fa fa-list-ol fa-fw'></i> Usuarios</a>
                                </li>
                            </ul>
                        </li>
                      @endif

                        <li>
                            <a href="#"><i class="fa fa-film fa-fw"></i> Pelicula<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="/pelicula/create"><i class='fa fa-plus fa-fw'></i> Agregar</a>
                                </li>
                                <li>
                                    <a href="/pelicula"><i class='fa fa-list-ol fa-fw'></i> Peliculas</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-child fa-fw"></i> Genero<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="/genero/create"><i class='fa fa-plus fa-fw'></i> Agregar</a>
                                </li>
                                <li>
                                    <a href="/genero"><i class='fa fa-list-ol fa-fw'></i> Generos</a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </div>
            </div>

     </nav>

        <div id="page-wrapper">

	           @yield('content') <!--ACA HACEMOS REFERENCIA QUE EN ESTA PARTE IRA EL CONTENIDO DIFERENTE Y SERA LO QUE HEREDAREMOS-->


        </div>

    </div>



    <!-- <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/metisMenu.min.js"></script>
    <script src="js/sb-admin-2.js"></script> -->

    {!!Html::script('js/jquery.min.js')!!}
    {{-- {!!Html::script('js/script.js')!!} <!--PARA PODER USAR EL AJAX - CREAR CON AJAX, lo quitamos para solo suar en las secciones especificas--> --}}
    {!!Html::script('js/bootstrap.min.js')!!}
    {!!Html::script('js/metisMenu.min.js')!!}
    {!!Html::script('js/sb-admin-2.js')!!}

    {{-- <script src="{{ URL::asset('http://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js') }}"></script> --}}
  {{-- {!!Html::script('http://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js')!!} --}}

{{-- <script src="{{ asset('http://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js') }}"></script>

<script >
$(document).ready(function(){
  $('#myTable').DataTable();
});
</script> --}}


    {{--PARA LOS AJAX - FIN DE SOLO CARGAR CUANDO LO USEMOS, NO SE CARGUE EN TOODO EL PROYECTO, el scrip que usaremos debe de ir  llamando y asiendo referencia al
    la seccion scripts que estamos creando y este le cargara  cuando se usa --}}
       @section('scripts')

       @show
</body>

</html>
