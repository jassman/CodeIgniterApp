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
                        <a class="waves-effect waves-light btn-large inicio modal-activar" href="#modal_entrar">Entrar</a>
                        <a class="waves-effect waves-light btn-large inicio modal-activar" href="#modal_registrar">Registrarse</a>
                        <div id="modal_registrar" class="modal">
                            <form class="form-horizontal" method="post" action="<?php echo site_url('login/register'); ?>">
                                <div class="row">
                                    <div class="input-field col s6">
                                        <label for="nombre">Nombre</label>
                                        <input type="text" class="input-xlarge" id="nombre" name="nombre" required value="<?php echo set_value('nombre'); ?>">
                                    </div>
                                    <div class="input-field col s6">
                                        <label class="control-label" for="apellido">Apellido</label>
                                        <input type="text" class="input-xlarge" id="apellido" name="apellido" value="<?php echo set_value('apellido'); ?>">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field">
                                        <label class="control-label" for="user">Nombre Usuario</label>
                                        <input type="text" class="input-xlarge" id="user" name="user" value="<?php echo set_value('user'); ?>">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field">
                                        <label class="control-label" for="email">Contraseña</label>
                                        <input type="text" class="input-xlarge" id="password" name="password" value="<?php echo set_value('password'); ?>">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field">
                                        <label class="control-label" for="email">Email</label>
                                        <input type="text" class="input-xlarge" id="email" name="email" value="<?php echo set_value('email'); ?>">
                                    </div>
                                </div>    	
                                <div class="row">
                                    <div class="input-field">
                                        <input type="submit" value="Enviar formulario" id="enviar" name="enviar">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div id="modal_entrar" class="modal">
                            <form class="form-horizontal" method="post" action="<?php echo site_url('login'); ?>">
                                <div class="row">
                                    <div class="input-field">
                                        <label class="control-label" for="user">Nombre Usuario</label>
                                        <input type="text" class="input-xlarge" id="user" name="user" value="<?php echo set_value('user'); ?>">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field">
                                        <label class="control-label" for="email">Contraseña</label>
                                        <input type="text" class="input-xlarge" id="password" name="password" value="<?php echo set_value('password'); ?>">
                                    </div>
                                </div> 	
                                <div class="row">
                                    <div class="input-field">
                                        <input type="submit" value="Enviar formulario" id="enviar" name="enviar">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Fin Estructura del Modal-->
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

                $("#enviar").click(function() {
                    var importes = document.getElementById('nombre').value;
                    $("#nombre").val(importes);
                    var yes = document.getElementById('nombre').value;
                });

            });


        </script>
        <!-- Fin Scripts necesarios -->
    </body>
</html>    