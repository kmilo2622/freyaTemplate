<?php
/*
Template Name: Template Index
*/
?>
<?php get_header(); ?>

<div class="front-image">
    <!--Si tuviera Bootstrap, éste sería el Jumbotron-->
    <p class="hero-text">Luchando por Conseguir un Mundo Mejor</p>
    <!--Final de la imagen de inicio-->
</div>
<div class="banner">
    <br>
    <!--Inicio del banner-->
    <div class="container">
        <div class="col-md-6">
            <p id="hero2">Conoce Aquí un Mundo Lleno de Oportunidades</p>
        </div>
        <div class="col-md-6">
            <div class="buttoncontainer"><a href="" class="btn1">Entrar</a></div>
        </div>
        <br>
    </div>
    <!--Final del Banner-->
</div>
<div class="front-image2">
    <!--Si tuviera Bootstrap, éste sería el Jumbotron-->
    <br><br><br>
    <p class="hero-text">Nuestros Servicios</p>
    <div class="container">
        <div class="col-md-4">
            <div class="thumbnail">
                <a href="">
                    <div class="caption text-center">
                        <h3>Cursos Online</h3>
                    </div>
                    <img src="http://identidad.queretaro.itesm.mx/wp-content/uploads/2014/10/banner-frases-diseno-web.jpg" class="img-circle" alt="Cinque Terre" width="200" height="400">
                </a>
                <div class="caption">
                    <br>
                    <!-- Opcional -->
                    <p>
                        Estudia a través de esta plataforma aquello que te dará un mejor futuro
                        <br>
                        <a href="">Leer Más...</a>
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="thumbnail">
                <a href="">
                    <div class="caption text-center">
                        <h3>Desarrollo a Medida</h3>
                    </div>
                    <img src="http://www.tudocursosgratuitos.com/wp-content/uploads/2014/12/Cursos-T%C3%A9cnicos-IFMS-online.jpg" class="img-circle" alt="Cinque Terre" width="200" height="400">
                </a>
                <div class="caption">
                    <br>
                    <!-- Opcional -->
                    <p>
                        Aquí realizamos tu página software y páginas web con la mejor calidad.
                        <br>
                        <a href="">Leer Más...</a>
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="thumbnail">
                <a href="">
                    <div class="caption text-center">
                        <h3>Diseño y Publicidad Empresarial</h3>
                    </div>
                    <img src="http://www.arqhys.com/arquitectura/fotos/arquitectura/Dise%C3%B1o-gr%C3%A1fico.jpg" class="img-circle" alt="Cinque Terre" width="200" height="400">
                </a>
                <div class="caption">
                    <br>
                    <!-- Opcional -->
                    <p>
                        Tu empresa puede tener una identidad
                        <br>
                        <a href="">Leer Más...</a>
                    </p>
                </div>
            </div>
        </div>

    </div>
    <!--Final de la imagen de inicio-->
</div>
<section class="text1">
    <div id="text1" align="center">
        <h2>¿Quiénes Somos?</h2>
        <p> Somos una organización sin ánimo de lucro que buscar mejorar considerablemente la vida de las personas y crear un cambio social significativo a través de la apertura de oportunidades para las comunidades menos favorecidas en todo el mundo a través de Internet </p>
        <br>
        <p><a href="" class="btn1">Leer Más</a></p>
    </div>
</section>
<div id="contact"></div>
<div class="kontacte">
    <section class="contact">
        <div id="form">
            <form>
                <input type="text"  id="nombre" class="formtext campo"name="nombre" placeholder="Nombre">
                <br>
                <input type="email" id="email" class="formtext campo" name="email" placeholder="Correo Electrónico">
                <br>
                <input type="text" id="message" name="mensaje" class="formessage campo" placeholder="Mensaje">
                <br>
                <input type="submit"  id="submit" value="Enviar">
            </form>
        </div>
        <div class="texto2" align="right">
            <p>Contáctanos!</p>
        </div>
    </section>
</div>

<?php get_footer(); ?>
