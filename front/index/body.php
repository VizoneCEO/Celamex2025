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
    .slider-container-native {
        padding: 80px 0;
        background-color: #f8f9fa; /* Fondo gris claro */
    }

    .slider-container-native .section-title {
        text-align: center;
        margin-bottom: 50px;
        font-weight: bold;
        color: #3C3C3B; /* Color de texto más suave */
        font-family: sans-serif; /* Tipografía más moderna */
    }

    /* El viewport del carrusel */
    .carousel-viewport {
        position: relative;
        width: 90%;
        margin: auto;
        overflow: hidden;
    }

    /* El track que se moverá */
    .carousel-track {
        display: flex;
        transition: transform 0.5s ease-in-out;
    }

    /* Cada uno de los slides */
    .carousel-slide {
        min-width: 33.333%;
        box-sizing: border-box;
        padding: 0 15px;
        text-align: center;
    }

    .carousel-slide img {
        display: block;
        height: 100px;
        width: auto;
        object-fit: contain;
        margin: 0 auto 15px auto;
    }

    .carousel-slide p {
        font-weight: bold;
        color: #003366;
        font-family: sans-serif;
    }

    /* --- CAMBIO 1: Botones de Navegación Rediseñados --- */
    .carousel-button {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background-color: transparent; /* Fondo transparente */
        border: none;
        font-size: 32px; /* Flechas más grandes */
        color: #aaa; /* Color gris para las flechas */
        cursor: pointer;
        z-index: 10;
        padding: 0 10px;
        transition: color 0.3s ease;
    }
    .carousel-button:hover {
        color: #333; /* Flechas más oscuras al pasar el mouse */
    }
    /* Ahora los ponemos dentro del viewport para que no se corten */
    .prev { left: 0; }
    .next { right: 0; }

    /* --- CAMBIO 2: Paginación (círculos) con Estilo Minimalista --- */
    .carousel-pagination {
        text-align: center;
        padding-top: 40px;
    }
    .pagination-dot {
        display: inline-block;
        width: 10px;
        height: 10px;
        border-radius: 50%;
        background-color: #d1d1d1; /* Círculos inactivos en gris claro */
        margin: 0 6px;
        cursor: pointer;
        border: none;
        padding: 0;
        transition: background-color 0.3s ease, transform 0.3s ease;
    }
    .pagination-dot.active {
        background-color: #003366; /* Círculo activo en azul corporativo */
        transform: scale(1.2); /* Ligeramente más grande para destacar */
    }

    /* Responsividad */
    @media (max-width: 992px) {
        .carousel-slide { min-width: 50%; } /* 2 slides */
    }
    @media (max-width: 768px) {
        .carousel-slide { min-width: 100%; } /* 1 slide */
        .carousel-button { display: none; } /* Ocultamos botones en móvil */
    }
</style>


<style>
    .intro-section {
        padding: 60px 0 0 0; /* Espaciado superior, sin espaciado inferior para que se una al slider */
        background-color: #f8f9fa; /* Mismo color de fondo que el slider para unificar */
        font-family: sans-serif;
        text-align: center;
    }

    .intro-section .intro-heading {
        color: #003366; /* Azul oscuro */
        font-weight: bold;
        font-size: 2.5rem;
        margin-bottom: 20px;
    }

    .intro-section .intro-paragraph {
        color: #3b5971; /* Tono azul-grisáceo del texto */
        font-size: 1.2rem;
        line-height: 1.8;
        max-width: 850px; /* Ancho máximo para que el párrafo no sea muy largo */
        margin: 0 auto; /* Centrar el párrafo horizontalmente */
    }
</style>

<section class="intro-section">
    <div class="container">
        <h2 class="intro-heading">¿QUÉ HACEMOS?</h2>
        <p class="intro-paragraph">
            En CELAMEX trabajamos por el bienestar y el crecimiento de los jóvenes, fortaleciendo sus habilidades y su confianza. A través de nuestros programas formativos y de apoyo, los acompañamos en su camino hacia una vida más plena, saludable y con mejores oportunidades laborales.
        </p>
    </div>
</section>

<section class="slider-container-native" id="que-hacemos">
    <div class="container">

        <div class="carousel-viewport">
            <button class="carousel-button prev" id="prevBtn">&#10094;</button>
            <div class="carousel-track" id="carouselTrack">
            </div>
            <button class="carousel-button next" id="nextBtn">&#10095;</button>
        </div>
        <div class="carousel-pagination" id="paginationDots"></div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const track = document.getElementById('carouselTrack');
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');
        const dotsContainer = document.getElementById('paginationDots');

        const slidesData = [
            { img: 'front/multimedia/icono-3.png', text: 'Salud Mental' },
            { img: 'front/multimedia/icono-4.png', text: 'Formación Académica' },
            { img: 'front/multimedia/icono-5.png', text: 'Empleabilidad' },
            { img: 'front/multimedia/icono-2.png', text: 'Empoderamiento' },
            { img: 'front/multimedia/icono-1.png', text: 'Autocuidado' }
        ];

        const allSlidesData = [...slidesData, ...slidesData, ...slidesData];

        track.innerHTML = allSlidesData.map(slide => `
        <div class="carousel-slide">
            <img src="${slide.img}" alt="${slide.text}">
            <p>${slide.text}</p>
        </div>
    `).join('');

        slidesData.forEach((_, index) => {
            const dot = document.createElement('button');
            dot.classList.add('pagination-dot');
            dotsContainer.appendChild(dot);
            dot.addEventListener('click', () => {
                moveToSlide(index + slidesData.length);
            });
        });

        const slides = Array.from(track.children);
        const dots = Array.from(dotsContainer.children);
        let slideWidth = slides.length > 0 ? slides[0].getBoundingClientRect().width : 0;

        let currentIndex = slidesData.length;
        let isTransitioning = false;

        const updateDots = (current) => {
            const dotIndex = current % slidesData.length;
            dots.forEach(dot => dot.classList.remove('active'));
            if (dots[dotIndex]) {
                dots[dotIndex].classList.add('active');
            }
        };

        const setPositionByIndex = () => {
            track.style.transform = `translateX(-${slideWidth * currentIndex}px)`;
        };

        setPositionByIndex();
        updateDots(currentIndex);

        const moveToSlide = (index) => {
            if (isTransitioning) return;
            isTransitioning = true;
            track.style.transition = 'transform 0.5s ease-in-out';
            track.style.transform = `translateX(-${slideWidth * index}px)`;
            currentIndex = index;
            updateDots(currentIndex);
        };

        nextBtn.addEventListener('click', () => moveToSlide(currentIndex + 1));
        prevBtn.addEventListener('click', () => moveToSlide(currentIndex - 1));

        track.addEventListener('transitionend', () => {
            isTransitioning = false;
            if (currentIndex >= slidesData.length * 2) {
                track.style.transition = 'none';
                currentIndex = slidesData.length;
                setPositionByIndex();
            }
            if (currentIndex < slidesData.length) {
                track.style.transition = 'none';
                currentIndex = slidesData.length * 2 -1;
                setPositionByIndex();
            }
        });

        window.addEventListener('resize', () => {
            slideWidth = slides.length > 0 ? slides[0].getBoundingClientRect().width : 0;
            track.style.transition = 'none';
            setPositionByIndex();
        });

        setInterval(() => {
            moveToSlide(currentIndex + 1);
        }, 3000);
    });
</script>



<style>
    .nosotros-section {
        padding: 80px 0;
        text-align: center;
        font-family: sans-serif;
    }

    .personajes-container {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        gap: 30px;
        margin-bottom: 60px;
    }

    .personaje-card {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .personaje-avatar {
        height: 140px;
        width: 140px;
        border-radius: 50%;
        border: 3px solid #00aef0;
        margin-bottom: 15px;
        overflow: hidden;
        background-color: white;
        /* Añadimos flex para centrar la imagen de adentro */
        display: flex;
        justify-content: center;
        align-items: center;
    }

    /* --- AQUÍ ESTÁ EL CAMBIO --- */
    .personaje-avatar img {
        /* Hacemos la imagen un 85% del tamaño del círculo */
        width: 85%;
        height: 85%;
        object-fit: cover;
        /* Le ponemos borde redondo a la imagen misma por si acaso */
        border-radius: 50%;
    }

    .personaje-card .nombre {
        font-weight: bold;
        font-size: 1.2rem;
        color: #333;
        margin: 0;
    }

    .personaje-card .area {
        font-size: 1rem;
        color: #555;
        margin: 0;
    }

    .nosotros-section .main-heading {
        font-weight: bold;
        color: #003366;
        font-size: 2rem;
        margin-bottom: 40px;
        max-width: 800px;
        margin-left: auto;
        margin-right: auto;
    }

    .nosotros-section .sub-heading {
        font-weight: bold;
        color: #3C3C3B;
        font-size: 2.5rem;
        margin-bottom: 20px;
    }

    .nosotros-section .description {
        font-size: 1.1rem;
        color: #555;
        line-height: 1.7;
        max-width: 850px;
        margin-left: auto;
        margin-right: auto;
    }
</style>

<section class="nosotros-section" id="nosotros">
    <div class="container">
        <div class="personajes-container">
            <div class="personaje-card">
                <div class="personaje-avatar">
                    <img src="front/multimedia/personaje-1.png" alt="Atzalli">
                </div>
                <h3 class="nombre">Atzalli</h3>
                <p class="area">Salud Mental</p>
            </div>
            <div class="personaje-card">
                <div class="personaje-avatar">
                    <img src="front/multimedia/personaje-2.png" alt="Otto">
                </div>
                <h3 class="nombre">Otto</h3>
                <p class="area">Autocuidado</p>
            </div>
            <div class="personaje-card">
                <div class="personaje-avatar">
                    <img src="front/multimedia/personaje-3.png" alt="Tonatiuh">
                </div>
                <h3 class="nombre">Tonatiuh</h3>
                <p class="area">Empoderamiento</p>
            </div>
            <div class="personaje-card">
                <div class="personaje-avatar">
                    <img src="front/multimedia/personaje-4.png" alt="Cacau">
                </div>
                <h3 class="nombre">Cacau</h3>
                <p class="area">Orientación Vocacional</p>
            </div>
            <div class="personaje-card">
                <div class="personaje-avatar">
                    <img src="front/multimedia/personaje-5.png" alt="Max">
                </div>
                <h3 class="nombre">Max</h3>
                <p class="area">Empleabilidad</p>
            </div>
        </div>
        <h2 class="main-heading">ATENDEMOS DE MANERA INTEGRAL A LAS JUVENTUDES, FORMANDO Y DESARROLLANDO SUS TALENTOS.</h2>
        <h3 class="sub-heading">NOSOTROS</h3>
        <p class="description">
            CELAMEX es una Institución de Asistencia Privada fundada el 12 de diciembre de 1958 por la Compañía de Jesús, con el objetivo de acompañar integralmente a trabajadores, jóvenes y sus familias en la mejora de su calidad de vida
        </p>
    </div>
</section>

<style>
    /* --- Estilos para el botón flotante del colibrí --- */
    .floating-colibri-btn {
        position: fixed; /* La clave para que flote */
        bottom: 25px;
        right: 25px;
        width: 65px; /* Tamaño del círculo */
        height: 65px;
        background-color: rgba(145, 179, 204, 0.94); /* Color azul de tu marca */
        border-radius: 50%; /* Lo hace redondo */
        box-shadow: 0 4px 10px rgba(0,0,0,0.3); /* Sombra para que resalte */
        z-index: 1000; /* Se asegura que esté por encima de todo */

        /* Para centrar la imagen del colibrí adentro */
        display: flex;
        justify-content: center;
        align-items: center;xº

        /* Animación suave */
        transition: transform 0.3s ease;
    }
    .floating-colibri-btn:hover {
        transform: scale(1.1); /* Se hace un poco más grande al pasar el mouse */
    }
    .floating-colibri-btn img {
        width: 60px; /* Tamaño de tu imagen de colibrí */
        height: auto;
    }
</style>

<a href="https://wa.me/+5562217114" class="floating-colibri-btn" target="_blank">
    <img src="front/multimedia/colibri.png" alt="Contactar por WhatsApp">
</a>