<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <title>Plantilla - Curso CI</title>
        <link href="<?php echo base_url(); ?>assets/css/materialize.css" rel="stylesheet" type="text/css"  media="screen,projection">
        <link href="<?php echo base_url(); ?>assets/css/estilos.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url(); ?>assets/css/barra_navegacion_materialize.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <section class="header hide-on-med-and-down">
            <h1>PARKEASY</h1>
            <div class="row">
                <h4 class ="col s12">Encuentra sitio rapidamente.</h4>
            </div>
        </section>
        <header>
            <nav>
                <div class="col s12">
                    <a href="#!" class="brand-logo">Logo</a>
                    <ul id="nav-mobile" class="right side-nav">
                        <li><a href="profile"><i class="mdi-action-search"></i>Perfil</a></li>
                        <li><a href="mapa"><i class="mdi-action-view-module"></i>Encuentra Sitio</a></li>
                        <li><a href="coche"><i class="mdi-navigation-refresh"></i>Comunidad</a></li>
                        <li><a href="login/logout"><i class="mdi-navigation-more-vert"></i>Salir</a></li>
                    </ul>
                </div>
                <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="mdi-navigation-menu"></i></a>                  
            </nav>
        </header>
        <div class="container contenido">
            <section class="row">