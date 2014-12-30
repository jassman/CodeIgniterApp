<html>
    <head>
        <meta charset="utf-8">
        <title>Parkeasy</title>
        <link href="<?php echo base_url(); ?>assets/css/materialize.css" rel="stylesheet" type="text/css"  media="screen,projection">
        <link href="<?php echo base_url(); ?>assets/css/estilos.css" rel="stylesheet" type="text/css">
    </head>
    <body>

        <section class="row portada-inicio">
            <div class="col s8">
                <h1>PARKEASY</h1>
            </div>            
        </section>
        
        <section class="row contenedor-botones-inicio">
            <div class="col s8 m6 l4 offset-s2 offset-m3 offset-l4">
                <div class="row">
                    <div class="col s8 m6 l4 offset-s2 offset-m3 offset-l4">
                        <a class="waves-effect waves-light btn-large inicio modal-activar" href="#modal_entrar">Entrar</a>
                        <a class="waves-effect waves-light btn-large inicio">Registrarse</a>
                        <!-- Modal Structure -->
                        <div id="modal_entrar" class="modal">
                            <form>
                                
                            </form>
                            <a href="#" class="waves-effect btn-flat modal-close">Entrar</a>
                        </div>

                    </div>    
                </div>
            </div>
        </section>    

        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script type="text/javascript"  src="<?php echo base_url(); ?>assets/js/materialize.js"></script> 
        <script>

            $(document).ready(function() {
                $('.modal-activar').leanModal();
            });

        </script>
    </body>
</html>    