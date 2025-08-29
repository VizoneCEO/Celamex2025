<style>
    /* Estilos para la sección del video de fondo */
    .hero-section {
        position: relative;
        height: 100vh;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: flex-start;
        overflow: hidden;
        color: white;
        text-align: left;
    }

    #bg-video {
        position: absolute;
        top: 50%;
        left: 50%;
        min-width: 100%;
        min-height: 100%;
        width: auto;
        height: auto;
        z-index: -100; /* Lo manda hasta atrás */
        transform: translateX(-50%) translateY(-50%);
        background-size: cover;
    }

    /* Capa oscura sobre el video para mejorar la legibilidad del texto */
    .video-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.4);
        z-index: -50; /* Se pone entre el video y el contenido */
    }

    .hero-content {
        padding-left: 5%;
        max-width: 600px;
        /* --- CAMBIO 1: Añadimos z-index para poner el texto por delante --- */
        position: relative; /* Necesario para que z-index funcione */
        z-index: 2;
    }

    .hero-content .highlight {
        background-color: #e57200;
        padding: 5px 15px;
        font-weight: bold;
        font-size: 2rem;
        display: inline;
        line-height: 1.5;
    }

    .hero-content p {
        font-size: 1.8rem;
        font-weight: bold;
        margin: 10px 0;
    }

    .hero-content .action-button {
        background-color: #94c022;
        color: white;
        padding: 15px 35px;
        text-decoration: none;
        font-weight: bold;
        font-size: 1.5rem;
        display: inline-block;
        margin-top: 20px;
        border: none;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .hero-content .action-button:hover {
        background-color: #82a81e;
    }


    /* --- Estilos para Móvil --- */
    @media (max-width: 768px) {
        .hero-section {
            justify-content: center;
            text-align: center;
        }

        .hero-content {
            padding: 0 15px;
            max-width: 100%;
        }

        .hero-content .highlight, .hero-content p {
            font-size: 1.5rem;
        }

        .hero-content .action-button {
            font-size: 1.2rem;
            padding: 12px 28px;
        }
    }
</style>

<section class="hero-section">

    <video playsinline autoplay loop muted id="bg-video">
        <source src="front/multimedia/background.mp4" type="video/mp4">
    </video>

    <div class="video-overlay"></div>

    <div class="hero-content">
        <span class="highlight">FORTALECEMOS</span>
        <p>EL PRESENTE DE JÓVENES EN CONDICIONES DE RIESGO,</p>
        <span class="highlight">PARA CONSTRUIR</span>
        <p>UN MEJOR FUTURO PARA NUESTRO PAÍS.</p>
        <a href="#sumate" class="action-button">SÚMATE</a>
    </div>

</section>

<style>
    .slider-section {
        padding: 80px 0;
        background-color: #f8f9fa; /* Un fondo gris claro para separar secciones */
    }

    .slider-section .section-title {
        text-align: center;
        margin-bottom: 50px;
        font-weight: bold;
        color: #333;
    }

    /* Estilos para el contenedor del slider */
    .icon-slider {
        width: 100%;
        height: 100%;
    }

    /* Estilos para cada slide */
    .swiper-slide {
        text-align: center;
        font-size: 18px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .swiper-slide img {
        display: block;
        height: 100px; /* Altura fija para los íconos */
        width: auto;
        object-fit: contain;
        margin-bottom: 15px;
    }

    .swiper-slide p {
        font-weight: bold;
        color: #003366; /* Color azul oscuro para el texto */
    }
</style>

<section class="slider-section" id="que-hacemos">
    <div class="container">
        <h2 class="section-title">¿QUÉ HACEMOS?</h2>

        <div class="swiper icon-slider">
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <img src="front/multimedia/icono-1.png" alt="Salud Mental">
                    <p>Salud Mental</p>
                </div>

                <div class="swiper-slide">
                    <img src="front/multimedia/icono-2.png" alt="Formación Académica">
                    <p>Formación Académica</p>
                </div>

                <div class="swiper-slide">
                    <img src="front/multimedia/icono-3.png" alt="Empleabilidad">
                    <p>Empleabilidad</p>
                </div>

                <div class="swiper-slide">
                    <img src="front/multimedia/icono-4.png" alt="Empoderamiento">
                    <p>Empoderamiento</p>
                </div>

                <div class="swiper-slide">
                    <img src="front/multimedia/icono-5.png" alt="Autocuidado">
                    <p>Autocuidado</p>
                </div>

            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const swiper = new Swiper('.icon-slider', {
            // Opciones del slider
            loop: true, // Para que sea un bucle infinito
            autoplay: {
                delay: 2500, // Tiempo en milisegundos entre slides
                disableOnInteraction: false, // El autoplay no se detiene si el usuario interactúa
            },
            slidesPerView: 2, // Slides visibles en móvil
            spaceBetween: 30, // Espacio entre slides

            // Breakpoints para hacerlo responsivo
            breakpoints: {
                // Cuando el ancho de la pantalla sea >= 768px
                768: {
                    slidesPerView: 3,
                    spaceBetween: 40
                },
                // Cuando el ancho de la pantalla sea >= 992px
                992: {
                    slidesPerView: 5,
                    spaceBetween: 50
                }
            }
        });
    });
</script>


