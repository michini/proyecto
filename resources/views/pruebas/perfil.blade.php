<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cotizaciones Médicas - Perfil</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('css/materialize.css')}}">


</head>
<body>
<!-- Navbar goes here -->

<!-- Page Layout here -->
<div class="row">

    <div class="col s12 m4 l3"> <!-- Note that "m4 l3" was added -->
        <!-- Grey navigation panel. This content will be: 3-columns-wide on large screens,4-columns-wide on medium screens,
          12-columns-wide on small screens  -->
        <ul id="nav-mobile" class="side-nav fixed">
            <li class="logo"><a id="logo-container" href="#" class="brand-logo">
                    <h3>CotiMed</h3>
                    <!-- <img src="http://lorempixel.com/114/56/people" alt=""></li> -->
                    <!-- <li class="bold"><a href="#">Inicio</a></li> -->
                    <!-- <li class="bold"><a href="index.html">Inicio</a></li> -->
            <li class="bold"><a href="nueva-cotizacion.html">Nueva Cotización</a></li>
            <li class="bold"><a href="configuracion-perfil.html">Configuración</a></li>
            <li class="bold"><a href="lista-cotizaciones.html">Lista de Cotizaciones</a></li>
            <li class="bold"><a href="index.html">Salir</a></li>
        </ul>



    </div>
    <main>
        <div class="container">
            <div class="col s12 m8 l9"> <!-- Note that "m8 l9" was added -->
                <!-- Teal page content. This content will be: 9-columns-wide on large screens, 8-columns-wide on medium screens,
                  12-columns-wide on small screens  -->

                <blockquote>
                    Vista previa de Encabezado de Cotización
                </blockquote>


                <!-- Header Cotización -->
                <div class="card-panel">
                    <div class="row valign-wrapper">
                        <div class="col s2">
                            <img src="http://lorempixel.com/300/300/sports" alt="" class="circle responsive-img">
                        </div>
                        <div class="col s10">
                            <div class="row">
                                <div class="col s12">
                                    <div class="row">
                                        <div class="col s10">
                                            <h5>Consultorio Médico ABC,C.A</h5>
                                        </div>
                                        <div class="col s2">
                                            <label>Fecha:</label><br/><span>31/12/2015</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col s12">
                                    <div class="row">
                                        <div class="col s4"><label>Dr./Dra.: </label><br/><span>Pedro Pérez</span></div>
                                        <div class="col s8"><label>Dirección: </label><br/><span>Av. La estancia Torre las Mercedes, Piso 6 Ofic 603 Chuao, Miranda, Venezuela.</span></div>
                                    </div>
                                </div>
                                <div class="col s12">
                                    <div class="row">
                                        <div class="col s4"><label>Telf.: </label><br/><span>0212-3336655 / 0212-3337788</span></div>
                                        <div class="col s4"><label>Email: </label><span>nombre.apellido@gmail.com</span></div>
                                        <div class="col s4"><label>Rif.: </label><br/><span>J-12345678-9</span></div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Fin Header Cotización -->

                <!-- Form Pefil Medico y Consultorio -->
                <div class="row">
                    <form class="col s12">
                        <blockquote>
                            Información de Perfil Médico y Consultorio
                        </blockquote>
                        <div class="row">
                            <div class="input-field col s6">
                                <input id="ci" type="text" class="validate" placeholder="C.I:">
                                <!-- <label for="ci">C.I/Rif</label> -->
                            </div>
                            <div class="input-field col s2">
                                <select class="browser-default">
                                    <option value="v">V-</option>
                                    <option value="j">J-</option>
                                </select>
                            </div>
                            <div class="input-field col s4">
                                <input id="rif" type="text" class="validate" placeholder="Rif:">
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s6">
                                <input id="first_name" type="text" class="validate" placeholder="Nombre">
                                <!-- <label for="first_name">Nombre</label> -->
                            </div>
                            <div class="input-field col s6">
                                <input id="last_name" type="text" class="validate" placeholder="Apellido">
                                <!-- <label for="last_name">Apellido</label> -->
                            </div>
                        </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="razon-social" type="text" class="validate" placeholder="Razón Social">
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="direccion" type="text" class="validate" placeholder="Dirección">
                        <!-- <label for="direccion">Dirección</label> -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-s12">
                        <div class="input-field col s6">
                            <input id="telf" type="text" class="validate" placeholder="Telf.">
                            <!-- <label for="telf">Telf.</label> -->
                        </div>
                    </div>
                    <div class="input-field col s6">
                        <input id="email" type="email" class="validate" placeholder="Email">
                        <!-- <label for="email">Email</label> -->
                    </div>
                </div>
                <div class="row">
                    <div class="file-field input-field">
                        <h5 class="left-align">Subir nueva imágen/logo.</h5>
                        <span>Formato: .jpg, .jpeg, .gif, .png</span>
                        <span>Dimensiones: 300px x 300px o superior</span><br/><br/>
                        <input type="file">

                    </div>
                </div>



            </div>
            <!-- Fin Campos Paciente -->
            <!-- Boton de Envio -->
            <div class="row">
                <div class="col s12">
                    <div class="col s3 offset-s7">
                        <button class="btn waves-effect waves-light btn-large" type="submit" name="action">Guardar
                            <i class="mdi-content-send right"></i>
                        </button>
                    </div>
                </div>
            </div><!-- Boton de Envio -->
            </form> <!-- Fin Form Cotización tratamiento -->


        </div>
</div>
</main>

<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="{{asset('js/materialize.js')}}"></script>

<script>
    $(document).ready(function(){
        // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
        $('.modal-trigger').leanModal();
    });
</script>
<script>

</script>
<script>
    $(document).ready(function(){
        $('#modal1').closeModal();
    });
</script>
</body>
</html>