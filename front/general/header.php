<style>
    /* Estilos Generales */
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        /* Agregamos contenido de ejemplo para poder hacer scroll */
        height: 200vh;
        background-color: #f0f0f0;
    }

    /* --- Estilos del Header --- */
    .header {
        position: fixed; /* Lo deja fijo en la parte superior */
        top: 0;
        left: 0;
        width: 100%;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 15px 30px;
        z-index: 1000; /* Asegura que esté por encima de otro contenido */
        transition: background-color 0.4s ease; /* Transición suave */
        box-sizing: border-box; /* Asegura que el padding no afecte el ancho */
    }

    /* Estado transparente (inicial) */
    .header {
        background-color: transparent;
    }

    /* Estado al hacer scroll */
    .header.scrolled {
        background-color: #ffffff; /* Fondo blanco sólido */
        border-bottom: 1px solid #e0e0e0;
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }

    .header .logo a {
        font-size: 24px;
        font-weight: bold;
        color: #333; /* Color oscuro para que sea visible al scrollear */
        text-decoration: none;
    }

    /* --- Navegación Principal --- */
    .main-nav {
        display: flex;
    }

    .main-nav ul {
        list-style: none;
        margin: 0;
        padding: 0;
        display: flex;
    }

    .main-nav ul li {
        margin-left: 30px;
    }

    .main-nav ul li a {
        text-decoration: none;
        color: #333;
        font-weight: bold;
        font-size: 14px;
    }

    .donate-button {
        background-color: rgb(148,192,34);
        color: #fff;
        padding: 10px 20px;
        text-decoration: none;
        border-radius: 5px;
        font-weight: bold;
        font-size: 14px;
        transition: background-color 0.3s ease;
    }
    .donate-button:hover{
        background-color: rgb(148,192,34);
    }

    /* --- Menú de Hamburguesa (Móvil) --- */
    .hamburger-menu {
        display: none; /* Oculto por defecto en escritorio */
        cursor: pointer;
        font-size: 28px;
    }

    /* --- Media Query para Responsividad --- */
    @media (max-width: 768px) {
        .main-nav, .donate-button {
            display: none; /* Oculta el menú y el botón en móvil */
        }

        .hamburger-menu {
            display: block; /* Muestra el icono de hamburguesa */
        }

        /* Estilos para el menú desplegable */
        .main-nav.active {
            display: flex;
            flex-direction: column;
            position: absolute;
            top: 70px; /* Altura del header */
            left: 0;
            width: 100%;
            background-color: #fff;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }

        .main-nav.active ul {
            flex-direction: column;
            width: 100%;
        }

        .main-nav.active ul li {
            text-align: center;
            margin: 0;
        }

        .main-nav.active ul li a {
            padding: 15px;
            display: block;
            width: 100%;
            border-bottom: 1px solid #f0f0f0;
        }
    }
</style>



<header class="header">
    <div class="logo">
        <a href="index.php"><img width="50%" style="margin-left: 60px;" src="front/multimedia/logo.png"
                                 class="img-fluid" alt="Responsive image"></a>
    </div>

    <nav class="main-nav" id="mainNav">
        <ul>
            <li><a href="#nosotros">NOSOTROS</a></li>
            <li><a href="#que-hacemos">¿QUÉ HACEMOS?</a></li>
            <li><a href="#aliados">ALIADOS</a></li>
            <li><a href="#contacto">CONTACTO</a></li>
        </ul>
    </nav>

    <a href="#donar" class="donate-button">DONAR HOY</a>

    <div class="hamburger-menu" id="hamburgerMenu">
        &#9776; </div>
</header>



<script>
    // --- Lógica para cambiar el header al hacer scroll ---
    const header = document.querySelector('.header');

    window.addEventListener('scroll', () => {
        // Si el scroll vertical es mayor a 50px, añade la clase 'scrolled'
        if (window.scrollY > 50) {
            header.classList.add('scrolled');
        } else {
            // Si no, la quita
            header.classList.remove('scrolled');
        }
    });

    // --- Lógica para el menú de hamburguesa ---
    const hamburgerMenu = document.getElementById('hamburgerMenu');
    const mainNav = document.getElementById('mainNav');

    hamburgerMenu.addEventListener('click', () => {
        // Alterna la clase 'active' en la navegación para mostrar/ocultar
        mainNav.classList.toggle('active');
    });
</script>


