<?php get_header(); ?>

<div class="front-image">
    <!--Si tuviera Bootstrap, éste sería el Jumbotron-->
    <p class="hero-text">Luchando por Conseguir un Mundo Mejor</p>
    <!--Final de la imagen de inicio-->
</div>
<div class="banner">
    <!--Inicio del banner-->
    <p id="hero2">Conoce Aquí un Mundo Lleno de Oportunidades</p>
    <div class="buttoncontainer"><a href="paginas/nosotros.html" class="btn1">Entrar</a></div>
    <!--Final del Banner-->
</div>
<div class="front-image2">
    <!--Si tuviera Bootstrap, éste sería el Jumbotron-->
    <p class="hero-text">Nuestros Servicios</p>
    <!--Final de la imagen de inicio-->
</div>
<section class="text1">
    <div id="text1" align="center">
        <h2>Título</h2>
        <p> lorem expands to Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur, non, quos voluptas vel earum unde laboriosam qui optio asperiores nesciunt sed voluptatibus quae harum nisi iure sapiente numquam quo minus. </p>
        <p><a href="paginas/servicios.html" class="btn1">Entrar</a></p>
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
