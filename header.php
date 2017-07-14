<!DOCTYPE html>
<!--
Nombre: Juan Camilo Arroyave Rico
Programa: Producción de Multimedia
Evidencia: Laboratorio Web con Dreamweaver
Versión de Dreamweaver CC: 13.2 Build 6466
-->
<html <?php language_attributes(); ?>>
<?php show_admin_bar( true ); ?>
<head>
    <title><?php wp_title(' | ', true, 'right'); ?> <?php bloginfo('name'); ?></title>
    <meta charset="utf-8">
    <meta name="description" content="La Corporación Freya es una organización sin ánimo de lucro que buscar mejorar la calidad de vida de las personas">
    <!--Inserción de los estilos-->
    <!--Favicon: Ícono que se visualiza en la b arra de direcciones y pestañas del navegador-->
    <link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/imagenes/escudo.png" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <?php wp_head(); ?>
</head>
<body>
    <div class="navigation" id="navigation">
        <!--Inicio del Menú de Navegación... Sin Bootstrap-->
        <nav class="menu">
            <ul class="menu-drop">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <?php wp_list_pages('title_li='); ?>
            </ul>
        </nav>
        <!--Final de la barra del menú de navegación-->
    </div>
    <div id="main">
        <header class="header">
            <!--Puede ser un poco confuso, pero el menú de navegación es similar a un sidebar así que éste es el estilo para alojar la barra delm header que es demasiado importante-->
            <div class="navbar">
                <a href="<?php echo home_url() ?>">
                    <div id="brand"><img src="<?php echo get_stylesheet_directory_uri(); ?>/imagenes/logo.png" alt="Logotipo de la Corporación Freya" width="100px" height="50px"></div>
                </a>
                <div id="burger" onclick="openNav()" style="font-size:40px;cursor:pointer">&#5816;</div>
            </div>
            <!-- Final del Header-->
        </header>
