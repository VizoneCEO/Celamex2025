<style>
    /* --- Estilos del Header --- */
    .header {
        position: fixed; /* Mantiene el header fijo en la parte superior */
        top: 0;
        left: 0;
        width: 100%;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 15px 5%; /* Uso de porcentaje para mejor adaptabilidad */
        z-index: 1000;
        background-color: transparent; /* Estado inicial transparente */
        transition: background-color 0.4s ease, padding 0.4s ease; /* Transición suave */
        box-sizing: border-box;
    }

    /* Estado del header al hacer scroll */
    .header.scrolled {
        background-color: #ffffff;
        padding: 10px 5%; /* Un poco más compacto al scrollear */
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }

    /* --- Logo --- */
    .header .logo img {
        height: 50px; /* Ajusta la altura de tu logo */
        width: auto; /* Mantiene la proporción */
        transition: height 0.4s ease; /* Transición suave para el tamaño */
    }

    .header.scrolled .logo img {
        height: 40px; /* Logo ligeramente más pequeño al scrollear */
    }

    /* --- Navegación Principal (Escritorio) --- */
    .main-nav {
        display: flex;
    }

    .main-nav ul {
        list-style: none;
        margin: 0;
        padding: 0;
        display: flex;
        align-items: center;
    }

    .main-nav ul li {
        margin-left: 35px;
    }

    .main-nav ul li a {
        text-decoration: none;
        /* CAMBIO 1: El color inicial ahora es blanco */
        color: white;
        font-weight: bold;
        font-size: 14px;
        text-transform: uppercase;
        /* Añadimos transición para el cambio de color */
        transition: color 0.4s ease;
    }

    /* CAMBIO 2: Nueva regla para cuando se hace scroll */
    .header.scrolled .main-nav ul li a {
        color: #333; /* Color negro cuando el header tiene fondo */
    }


    /* --- Botón Donar --- */
    .donate-button {
        background-color: rgb(148,192,34);
        color: white;
        padding: 12px 24px;
        text-decoration: none;
        border-radius: 5px;
        font-weight: bold;
        font-size: 14px;
        text-transform: uppercase;
        transition: background-color 0.3s ease;
    }
    .donate-button:hover{
        background-color: rgb(148,192,34);
    }

    /* --- Menú de Hamburguesa (Móvil) --- */
    .hamburger-menu {
        display: none; /* Oculto en escritorio */
        cursor: pointer;
        font-size: 30px;
        /* CAMBIO 3: El color inicial del icono también es blanco */
        color: white;
        transition: color 0.4s ease;
    }

    /* CAMBIO 4: Nueva regla para el icono de hamburguesa al hacer scroll */
    .header.scrolled .hamburger-menu {
        color: #333;
    }

    /* --- Estilos Responsivos --- */
    @media (max-width: 992px) { /* Un punto de quiebre más común */
        .main-nav {
            display: none; /* Oculta la navegación principal */
            flex-direction: column;
            position: absolute;
            top: 100%; /* Justo debajo del header */
            left: 0;
            width: 100%;
            background-color: #fff;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }

        /* Muestra el menú cuando está activo */
        .main-nav.active {
            display: flex;
        }

        .main-nav ul {
            flex-direction: column;
            width: 100%;
        }

        .main-nav ul li {
            text-align: center;
            margin: 0;
            width: 100%;
        }

        .main-nav ul li a {
            padding: 18px;
            display: block;
            border-bottom: 1px solid #f0f0f0;
            /* IMPORTANTE: Forzamos el color negro en el menú desplegable móvil */
            color: #333 !important;
        }

        .donate-button {
            display: none; /* También puedes ocultar el botón si quieres */
        }

        .hamburger-menu {
            display: block; /* Muestra el icono de hamburguesa */
        }
    }
</style>


<header class="header" id="header">
    <div class="logo">
        <a href="index.php"><img src="front/multimedia/logo.png" alt="Logo Celamex"></a>
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
    document.addEventListener('DOMContentLoaded', function () {
        const header = document.getElementById('header');
        const hamburgerMenu = document.getElementById('hamburgerMenu');
        const mainNav = document.getElementById('mainNav');

        // --- Lógica para cambiar el header al hacer scroll ---
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });

        // --- Lógica para el menú de hamburguesa ---
        hamburgerMenu.addEventListener('click', () => {
            mainNav.classList.toggle('active');
        });
    });
</script>