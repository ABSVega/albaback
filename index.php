<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alba web</title>
    <link rel="shortcut icon" href="img/ALBA_WEB_ELEMENTS-01.png" type="image/x-icon">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="css/normalize.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- Primary Meta Tags -->
    <title>Domótica personalizada para un hogar a medida</title>
    <meta name="title" content="Domótica personalizada para un hogar a medida">
    <meta name="description" content="Transforma tu hogar en un espacio inteligente con nuestros servicios de domótica">
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://albadomotica.mx/">
    <meta property="og:title" content="Domótica personalizada para un hogar a medida">
    <meta property="og:description" content="Transforma tu hogar en un espacio inteligente con nuestros servicios de domótica">
    <meta property="og:image" content="">
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://albadomotica.mx/">
    <meta property="twitter:title" content="Domótica personalizada para un hogar a medida">
    <meta property="twitter:description" content="Transforma tu hogar en un espacio inteligente con nuestros servicios de domótica">
    <meta property="twitter:image" content="">
</head>

<body onload="agregarClase()">
    <!--Esto es el menu inicial-->
    <header>
        <a href="#Inicio" class="logo"><img src="img/ALBA_WEB_ELEMENTS-03.png" alt="" class="alba_logo"></a>
        <ul class="alba_bar">
            <li><a href="#Inicio">Inicio</a></li>
            <li><a href="#Nosotros">Nosotros</a></li>
            <li><a href="#Kits">Kits</a></li>
            <li><a href="#Aliados">Aliados</a></li>
            <li><a href="#Portafolio">Portafolio</a></li>
            <li><a id="cambio" href="#Proyectos">Galería</a></li>
            <li><a href="#Contacto">Contacto</a></li>
        </ul>
        <div class="main">
            <a href="#" class="user"><img src="img/facebook.svg" alt="" srcset=""></a>
            <a href="#" class="user"><img src="img/youtube.svg" alt="" srcset=""></a>
            <a href="#" class="user"><img src="img/linkedin.svg" alt="" srcset=""></a>
            <div class="bx bx-menu" id="menu-icon"></div>
        </div>
    </header>
    <!--Este div es para que puedas ver las particulas en la página-->
    <section id="particles-js"></section>
    <!--Esto es el titulo principal de la página-->
    <section class="container-fluid background" id="Inicio">
        <div class="row">
            <div class="col-12">
                <div class="hero__container hero__home">
                    <p class="hero__paragraph">CON ALBA</p>
                    <h1 class="hero__title">domotiza tu vida</h1>
                    <p class="hero__paragraph">AUTOMATIZAMOS TUS ESPACIOS</p>
                    <a href="#Nosotros" class="btn__more">Descubre más...</a>
                </div>
            </div>
        </div>
    </section>
    <!--Este es el apartado de nosotros-->
    <main>
        <section class="container-fluid media__us" id="Nosotros">
            <div class="row">
                <div class="us__container">
                    <div class="col-6">
                        <div class="about__us_texts">
                            <h1 class="about__us_title">Nosotros</h1>
                            <h4 class="about__us_subtitle">Domótica/Inmótica</h4>
                            <img src="img/ALBA_WEB_ELEMENTS-07.png" alt="element" class="element">
                            <p class="about__us_paragraph">
                                Estamos convencidos que hoy en día cualquiera que lo
                                deseé tiene acceso a la domotización y automatización
                                en sus entornos.
                            </p>
                            <p class="about__us_paragraph">
                                Ahora tenemos la tecnología para lograr crear espacios
                                inteligentes con precios accesibles. Así nace Alba.
                            </p>
                            <p class="about__us_paragraph">
                                Buscamos enriquecer la calidad de vida de nuestros
                                clientes brindando servicios de domótica al alcance de
                                casi cualquier persona.
                            </p>
                        </div>
                    </div>
                    <div class="col-6 media__img">
                        <img src="img/ALBA_WEB_ELEMENTS-08.png" alt="about__us_img" class="element__1">
                    </div>
                </div>
            </div>
        </section>
        <section class="container-fluid media__kit" id="Kits">
            <div class="container__kits">
                <div class="alba__kits">
                    <article class="article__kit">
                        <img src="img/ALBA_WEB_ELEMENTS-09.png" alt="" class="img__kits" onclick="openModal(modalAdd1)">
                        <h3 class="kits__title">alba</h3>
                        <h3><span class="color__dif kits__title">home</span></h3>
                        <div class="modal" id="modalHome">
                            <div class="modal-container">
                                <div class="close-modal" onclick="closeModal(modalAdd1)"></div>
                                <h1 class="modal-title">alba<span class="color__dif"> home</span></h1>
                                <p class="hidden-text">
                                    Transformamos tu hogar en un espacio inteligente y automatizado para brindarte la
                                    máxima
                                    comodidad. Desde la iluminación hasta la creación de rutinas, queremos que tu hogar
                                    se
                                    adapte a
                                    tu estilo de vida y te permita tener un comienzo perfecto todas las mañanas.
                                    ¡Déjanos
                                    ayudarte a
                                    crear un hogar a medida para ti!
                                </p>
                            </div>
                        </div>
                    </article>
                    <article class="article__kit">
                        <img src="img/ALBA_WEB_ELEMENTS-10.png" alt="" class="img__kits" onclick="openModal(modalAdd2)">
                        <h3 class="kits__title">alba</h3>
                        <h3><span class="color_work kits__title">work</span></h3>
                        <div class="modal" id="modalWork">
                            <div class="modal-container">
                                <div class="close-modal" onclick="closeModal(modalAdd2)"></div>
                                <h1 class="modal-title">alba<span class="color_work"> work</span></h1>
                                <p class="hidden-text">
                                    Transformamos tu oficina en un espacio inteligente y eficiente que te ayudará a
                                    aprovechar al
                                    máximo tu tiempo. Con simples comandos de voz, podrás controlar todas las funciones
                                    de
                                    tu
                                    oficina y lograr un flujo de trabajo sin interrupciones. ¡Deja que te ayudemos a
                                    crear
                                    un
                                    ambiente de trabajo más productivo y acogedor!
                                </p>
                            </div>
                        </div>
                    </article>
                    <article class="article__kit">
                        <img src="img/ALBA_WEB_ELEMENTS-11.png" alt="" class="img__kits" onclick="openModal(modalAdd3)">
                        <h3 class="kits__title">alba</h3>
                        <h3><span class="color_play kits__title">play</span></h3>
                        <div class="modal" id="modalPlay">
                            <div class="modal-container">
                                <div class="close-modal" onclick="closeModal(modalAdd3)"></div>
                                <h1 class="modal-title">alba<span class="color_play"> play</span></h1>
                                <p class="hidden-text">
                                    Transformamos tu área gaming en el lugar perfecto para tus sesiones de juegos. Con
                                    la
                                    ayuda
                                    de la automatización, luces y otros dispositivos inteligentes, crearemos un ambiente
                                    óptimo para
                                    tus partidas y te permitirá disfrutar de tardes inolvidables. ¡Déjanos ayudarte a
                                    crear
                                    ese
                                    espacio gaming que siempre has querido!
                                </p>
                            </div>
                        </div>
                    </article>
                    <article class="article__kit">
                        <img src="img/ALBA_WEB_ELEMENTS-12.png" alt="" class="img__kits" onclick="openModal(modalAdd4)">
                        <h3 class="kits__title">alba</h3>
                        <h3><span class="color_experiencie kits__title">experiencie</span></h3>
                        <div class="modal" id="modalExperiencie">
                            <div class="modal-container">
                                <div class="close-modal" onclick="closeModal(modalAdd4)"></div>
                                <h1 class="modal-title">alba<span class="color_experiencie"> experiencie</span></h1>
                                <p class="hidden-text">
                                    Nos esforzamos por brindarte experiencias increíbles a través de la creación de
                                    espacios
                                    inteligentes. Con nuestras herramientas avanzadas, no hay límites a los que podemos
                                    llegar
                                    juntos.
                                    ¡Deja que te ayudemos a materializar cualquier idea que tengas en mente para crear
                                    el
                                    espacio
                                    perfecto para ti!
                                </p>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </section>
        <section class="container media__partners" id="Aliados">
            <div class="row">
                <div class="col-12">
                    <div class="partners__text">
                        <h1 class="first__title">Familia <span class="color__dif">Alba</span></h1>
                        <p class="first__subtitle">Aliados y proveedores</p>
                        <img src="img/ALBA_WEB_ELEMENTS-07.png" alt="partners__img">
                    </div>
                    <div class="slider">
                        <div class="slide-track">
                            <div class="slide">
                                <img src="img/ALBA_WEB_ELEMENTS-13.png" alt="" class="partners-slide">
                            </div>
                            <div class="slide">
                                <img src="img/ALBA_WEB_ELEMENTS-13.png" alt="" class="partners-slide">
                            </div>
                            <div class="slide">
                                <img src="img/ALBA_WEB_ELEMENTS-13.png" alt="" class="partners-slide">
                            </div>
                            <div class="slide">
                                <img src="img/ALBA_WEB_ELEMENTS-13.png" alt="" class="partners-slide">
                            </div>
                            <div class="slide">
                                <img src="img/ALBA_WEB_ELEMENTS-13.png" alt="" class="partners-slide">
                            </div>
                            <div class="slide">
                                <img src="img/ALBA_WEB_ELEMENTS-13.png" alt="" class="partners-slide">
                            </div>
                            <div class="slide">
                                <img src="img/ALBA_WEB_ELEMENTS-13.png" alt="" class="partners-slide">
                            </div>
                            <div class="slide">
                                <img src="img/ALBA_WEB_ELEMENTS-13.png" alt="" class="partners-slide">
                            </div>
                            <div class="slide">
                                <img src="img/ALBA_WEB_ELEMENTS-13.png" alt="" class="partners-slide">
                            </div>
                            <div class="slide">
                                <img src="img/ALBA_WEB_ELEMENTS-13.png" alt="" class="partners-slide">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="container  media__services" id="Portafolio">
            <div class="row">
                <div class="col-12">
                    <div class="alba__services">
                        <div class="texts__services">
                            <h1 class="first__title">Nuestro <span class="color__dif">Portafolio</span></h1>
                            <p class="first__subtitle">Servicios</p>
                            <img src="img/ALBA_WEB_ELEMENTS-07.png" alt="services__img" class="services__img_title">
                        </div>
                        <div class="about__services">
                            <article class="content__services">
                                <img src="img/ALBA_WEB_ELEMENTS-15.png" alt="services__img" class="services__img">
                                <h3 class="services__title">Diseño de proyecto</h3>
                                <div class="services-paragraph-content">
                                    <p class="services__paragraph">
                                        Despues de análizar tus espacios
                                        desarrollamos una propuesta a la medida.
                                    </p>
                                </div>
                            </article>
                            <article class="content__services">
                                <img src="img/ALBA_WEB_ELEMENTS-16.png" alt="services__img" class="services__img">
                                <h3 class="services__title">Productos</h3>
                                <div class="services-paragraph-content">
                                    <p class="services__paragraph">
                                        Utilizamos productos
                                        de alta calidad y de
                                        acuerdo a tu presupuesto.
                                    </p>
                                </div>
                            </article>
                            <article class="content__services">
                                <img src="img/ALBA_WEB_ELEMENTS-17.png" alt="services__img" class="services__img">
                                <h3 class="services__title">Implementación</h3>
                                <div class="services-paragraph-content">
                                    <p class="services__paragraph">
                                        Llevamos a cabo
                                        la instalación de
                                        la solución, con
                                        una visión a largo
                                        plazo.
                                    </p>
                                </div>
                            </article>
                            <article class="content__services">
                                <img src="img/ALBA_WEB_ELEMENTS-18.png" alt="services__img" class="services__img">
                                <h3 class="services__title">Soporte</h3>
                                <div class="services-paragraph-content">
                                    <p class="services__paragraph">
                                        Siempre contarás
                                        con nosotros para
                                        darle soporte y
                                        seguimiento a tu
                                        instalación. Nuestro objetivo es que
                                        siempre te sientas
                                        cómodo con los
                                        espacios que
                                        creamos para ti.
                                    </p>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="container media__gallery" id="Proyectos">
            <div class="row">
                <div class="col-12">
                    <div class="galley__texts">
                        <h1 class=first__title>Productos & <span class=color__dif>Proyectos</span></h1>
                        <p class=first__subtitle>Galería</p>
                        <img src="img/ALBA_WEB_ELEMENTS-07.png" alt="gallery__elemtent" class="gallery__img_title">
                    </div>
                    <div class="cards">
                    </div>
                </div>
            </div>
        </section>
        <section class="container" id="Galeria">
            <div class="row">
                <div class="col-12">
                    <div class="galley__movile__texts">
                        <h1 class=first__title>Productos & <span class=color__dif>Proyectos</span></h1>
                        <p class=first__subtitle>Galería</p>
                        <img src="img/ALBA_WEB_ELEMENTS-07.png" alt="gallery__elemtent" class="gallery__img_title">
                    </div>
                    <div class="carousel">
                        <div class="carrusel-list" id="carrusel-list">
                            <button class="carrusel-arrow carrusel-prev" id="button-prev" data-button="button-prev" onclick="app.processingButton(event)">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left" class="svg-inline--fa fa-chevron-left fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                    <path fill="currentColor" d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z">
                                    </path>
                                </svg>
                            </button>
                            <div class="carrusel-track" id="track">
                            </div>
                            <button class="carrusel-arrow carrusel-next" id="button-next" data-button="button-next" onclick="app.processingButton(event)">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" class="svg-inline--fa fa-chevron-right fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                    <path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z">
                                    </path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="container-fluid media__contact" id="Contacto">
            <div class="row">
                <div class="col-12">
                    <div class="alba__contact">
                        <div class="contact__texts">
                            <h1 class="title-contact">Contáctanos</h1>
                            <img src="img/ALBA_WEB_ELEMENTS-07.png" alt="" class="contact__element">
                            <p class="contact__paragraph">
                                Para cualquier duda o necesidad de información adicional, por favor no dudes en ponerte
                                en
                                contacto
                                con nosotros.
                            </p>
                            <br>
                            <p class="contact__paragraph"> Asegúrate de proporcionar la información correcta para que
                                podamos
                                brindarte unarespuesta rápida y efectiva.
                            </p>
                        </div>

                        <div class="contact__form">
                            <form enctype="multipart/form-data" id="frmajax" method="POST">

                                <input type="text" id="name" name="name" placeholder="Nombre" required class="input__required">
                                <input type="tel" id="phone" name="phone" placeholder="Teléfono" required class="input__required">
                                <input type="email" id="email" name="email" placeholder="Correo electronico" required class="input__required">
                                <textarea id="comments" name="message" placeholder="Comentarios" class="input__required"></textarea>
                                <input type="submit" name="contact" value="Enviar" class="button">
                                <?php include("contacto.php")?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="container-fluid media__footer">
        <div class="row">
            <div class="col-12">
                <div class="footer__grid">
                    <div class="terminos">
                        <ul class="copy">
                            <li><a href="http://">Términos y condiciones</a></li>
                            <li><a href="http://">Aviso de privacidad</a></li>
                            <li><a href="http://">Aliados y marcas</a></li>
                            <li><a href="http://">Preguntas frecuentes</a></li>
                        </ul>
                    </div>
                    <div class="media">
                        <img src="img/ALBA_WEB_ELEMENTS-19.png" alt="" srcset="" class="p__logo">
                        <ul class="logos__media">
                            <li><a href="http://"><img src="img/facebook.svg" alt="" class="s__logo"></a></li>
                            <li><a href="http://"><img src="img/youtube.svg" alt="" class="s__logo"></a></li>
                            <li><a href="http://"><img src="img/linkedin.svg" alt="" class="s__logo"></a></li>
                        </ul>
                        <p class="copyright">Todos los derechos: <span class="color__dif">&copy;Alba</span></p>
                    </div>
                    <div class="instagram">
                        <p class="insta"></p>
                        <section id="feed-contenedor">
                            <div class="main-instagram">
                                <div class="chevron">
                                    <span id="prev" class="material-icons">
                                        &#xe5cb;
                                    </span>
                                </div>

                                <div class="contenedor-instagram">
                                    <div class="insta-photos">

                                    </div>
                                </div>

                                <div class="chevron">
                                    <span id="next" class="material-icons">
                                        &#xe5cc;
                                    </span>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--Este script tiene las particulas y esta en la carpeta de JS-->
    <script type="text/javascript" src="js/particles.min.js"></script>
    <!--Este script tiene la configuración de las particulas y esta en la carpeta de JS-->
    <script type="text/javascript" src="js/particulas.js"></script>
    <!--Este script tiene las animaciones de toda la página y esta en la carpeta de JS-->
    <script type="text/javascript" src="js/main.js"></script>
</body>

</html>