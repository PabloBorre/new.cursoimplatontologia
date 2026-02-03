<header class="main-header">
    <div class="header-container">
        <!-- Logo -->
        <a href="/" class="header-logo">
            <img src="/assets/images/logo-implantex.png" alt="Implantex Academy">
        </a>

        <!-- Navegación -->
        <nav class="header-nav" id="headerNav">
            <ul>
                <li><a href="/">Inicio</a></li>
                <li><a href="/docentes">Docentes</a></li>
                <li><a href="/cursos">Cursos</a></li>
                <li><a href="/testimonios">Testimonios</a></li>
                <li><a href="/contacto">Contacto</a></li>
            </ul>
            <!-- Teléfono dentro del nav (visible solo en mobile/tablet) -->
            <a href="tel:+17863287805" class="header-phone header-phone--nav">
                <img src="/assets/icon/bandera-eeuu.svg" alt="US" class="phone-flag">
                <span>786 328 78 05</span>
            </a>
        </nav>

        <!-- Botón teléfono desktop -->
        <a href="tel:+17863287805" class="header-phone header-phone--desktop">
            <img src="/assets/icon/bandera-eeuu.svg" alt="US" class="phone-flag">
            <span>786 328 78 05</span>
        </a>

        <!-- Hamburger -->
        <button class="header-hamburger" id="menuToggle" aria-label="Abrir menú">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>

    <!-- Overlay para cerrar menú -->
    <div class="nav-overlay" id="navOverlay"></div>
</header>

<script>
    const menuToggle = document.getElementById('menuToggle');
    const headerNav = document.getElementById('headerNav');
    const navOverlay = document.getElementById('navOverlay');

    menuToggle.addEventListener('click', function() {
        this.classList.toggle('active');
        headerNav.classList.toggle('open');
        navOverlay.classList.toggle('active');
    });

    navOverlay.addEventListener('click', function() {
        menuToggle.classList.remove('active');
        headerNav.classList.remove('open');
        this.classList.remove('active');
    });
</script>