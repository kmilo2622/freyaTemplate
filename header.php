<!DOCTYPE html>
<!--
Nombre: Juan Camilo Arroyave Rico
Programa: Producción de Multimedia
Evidencia: Laboratorio Web con Dreamweaver
Versión de Dreamweaver CC: 13.2 Build 6466
-->
<html>
<head>
    <title>Corporación Freya</title>
    <meta charset="utf-8">
    <meta name="description" content="La Corporación Freya es una organización sin ánimo de lucro que buscar mejorar la calidad de vida de las personas">
    <!--Inserción de los estilos-->
    <link rel="stylesheet" href="estilos/estilo.css">
    <link rel="stylesheet" type="text/css" href="estilos/segundo-estilo.css">
    <!--Favicon: Ícono que se visualiza en la barra de direcciones y pestañas del navegador-->
    <link rel="icon" type="image/png" href="imagenes/escudo.png" />
    <!--
    La verdad aquí en el estilo no quiero instalar librerías como Bootstrap pues
    para este caso en particular en que estoy aprendiendo y considero que podría
    ser fácilmente considerado trampa
-->
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<!--Para su correcta visibilidad en móbiles-->
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
<!--Fuente Lato de Google (es visualmente muy atractiva-->
<!--Comienzo de los scripts-->
<script src="/scripts/first.js"></script>
<!--Final de los scripts-->
<!--
En lo personal no me agrada la identación que ofrece dreamweaver,
Es muy básica e ineficiente, Brackets ofrece una mejor forma de identar y
organizar el código... pero bueno
-->
<?php wp_head(); ?>
</head>
<body>
    <div class="navigation" id="navigation">
        <!--Inicio del Menú de Navegación... Sin Bootstrap-->
        <nav class="menu">
            <ul>
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <li><a href="index.html">Inicio</a></li>
                <li><a href="paginas/nosotros.html">Nosotros</a></li>
                <li><a href="paginas/servicios.html">Servicios</a></li>
                <li><a href="#">Programas de Formación</a></li>
                <ul>
                    <li><a href="#">Cursos Cortos</a></li>
                    <li><a href="#">Programas de Formación Complementaria</a></li>
                    <li><a href="#">Carreras Técnicas</a></li>
                </ul>
                <li><a href="#contact">Contacto</a></li>
                <hr id="division-nav">
                <li><a href="#">Registrarse</a></li>
                <li><a href="#">Iniciar Sesión</a></li>
            </ul>
        </nav>
        <!--Final de la barra del menú de navegación-->
    </div>
    <div id="main">
        <header class="header">
            <!--Puede ser un poco confuso, pero el menú de navegación es similar a un sidebar así que éste es el estilo para alojar la barra delm header que es demasiado importante-->
            <div class="navbar">
                <div id="brand"><img src="imagenes/logo.png" alt="Logotipo de la Corporación Freya" width="100px" height="50px"></div>
                <div id="burger" onclick="openNav()" style="font-size:40px;cursor:pointer">&#5816;</div>
            </div>
            <!-- Final del Header-->
        </header>
