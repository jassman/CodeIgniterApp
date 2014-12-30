<html>
    <head>
        <meta charset="utf-8">
        <title>Parkeasy</title>
        <link href="<?php echo base_url(); ?>assets/css/materialize.css" rel="stylesheet" type="text/css"  media="screen,projection">
        <link href="<?php echo base_url(); ?>assets/css/estilos.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <!-- Texto Portada -->
        <section class="row portada-inicio">
            <div class="col s8">
                <h1>PARKEASY</h1>
            </div>            
        </section>
        <!-- Fin Texto Portada -->
        <!-- Contenedor de botones + Modal -->
        <section class="row contenedor-botones-inicio">
            <div class="col s8 m6 l4 offset-s2 offset-m3 offset-l4">
                <div class="row">
                    <div class="col s8 m6 l4 offset-s2 offset-m3 offset-l4">
                        <a class="waves-effect waves-light btn-large inicio modal-activar" href="#modal_registrar">Entrar</a>
                        <a class="waves-effect waves-light btn-large inicio modal-activar" href="#modal_registrar">Registrarse</a>
                        <!-- Estructura del Modal -->
                        <div id="modal_registrar" class="modal">
                            <div class="row">
                                <form class="col s12">
                                    <div class="row">
                                        <div class="input-field col s6">
                                            <input id="first_name" type="text" required pattern="^[a-zA-Z]{2,20}$">
                                            <label for="first_name">Nombre</label>
                                        </div>
                                        <div class="input-field col s6">
                                            <input id="last_name" type="text" required>
                                            <label for="last_name">Apellido</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="username" type="text" required>
                                            <label for="username">Nombre de Usuario</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="password" type="password" required>
                                            <label for="password">Contraseña</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="email" type="email" required>
                                            <label for="email">Email</label>
                                        </div>
                                    </div>
                                </form>                                        
                            </div>
                            <a href="#" class="waves-effect btn-flat modal-close">Entrar</a>
                        </div>
                        <!-- Fin Estructura del Modal-->
                    </div>    
                </div>
            </div>
        </section>
        <!-- Fin Contenedor de botones -->
        <!-- Librerias JS -->
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script type="text/javascript"  src="<?php echo base_url(); ?>assets/js/materialize.js"></script> 
        <!-- Librerias JS -->
        <!-- Scripts necesarios -->
        <script>

            $(document).ready(function() {
                $('.modal-activar').leanModal();
            });

        </script>
        <!-- Fin Scripts necesarios -->
    </body>
</html>    