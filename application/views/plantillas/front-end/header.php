<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Plantilla - Curso CI</title>
        <link href="<?php echo base_url(); ?>assets/css/materialize.css" rel="stylesheet" type="text/css"  media="screen,projection">
        <link href="<?php echo base_url(); ?>assets/css/estilos.css" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script type="text/javascript"  src="<?php echo base_url(); ?>assets/js/materialize.js"></script>
    </head>
    <body>
        <header>
            <section class="header">
                <h1 class="center-on-small-only">PARKEASY</h1>
                <div class="row">
                    <h4 class ="col s12 center-on-small-only">Encuentra sitio rapidamente.</h4>
                </div>
            </section>
        </header>
        <nav>
            <div class="nav-wrapper barra-menu">
                <ul id="nav-mobile" class="left side-nav">
                    <li><a class="waves-effect waves-teal" href="profile">Perfil</a></li>
                    <li><a class="waves-effect waves-teal" href="mapa">Encuentra Sitio</a></li>
                    <li><a class="waves-effect waves-teal" href="foro">Comunidad</a></li>
                </ul>
                <!-- Include this line below -->
                <a class="button-collapse" href="#" data-activates="nav-mobile"><i class="mdi-navigation-menu"></i></a>
                <!-- End -->
            </div>
        </nav>
        <div class="container contenido">
            <section class="row">