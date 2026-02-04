<footer class="main-footer">
    <div class="footer-container">
        
        <!-- Logo de fondo con transparencia -->
        <div class="footer-bg-logo">
            <img src="<?= base_url('assets/images/imagotipo-2.svg') ?>" alt="">
        </div>
        
        <div class="footer-content">
            <!-- Columna izquierda: Contacto + Navegación -->
            <div class="footer-left">
                <!-- Contacto -->
                <div class="footer-contact">
                    <a href="tel:+17863827805" class="footer-phone">786 382 78 05</a>
                    <p class="footer-location">Madrid/Málaga</p>
                    <a href="mailto:info@cursodeimplantologia.com" class="footer-email">info@cursodeimplantologia.com</a>
                </div>
                
                <!-- Navegación debajo del contacto -->
                <div class="footer-nav-columns">
                    <nav class="footer-nav footer-nav--main">
                        <ul>
                            <li><a href="<?= base_url('/') ?>">Inicio</a></li>
                            <li><a href="<?= base_url('docentes') ?>">Docentes</a></li>
                            <li><a href="<?= base_url('cursos') ?>">Cursos</a></li>
                            <li><a href="<?= base_url('testimonios') ?>">Testimonios</a></li>
                        </ul>
                    </nav>
                    
                    <nav class="footer-nav footer-nav--legal">
                        <ul>
                            <li><a href="<?= base_url('aviso-legal') ?>">Aviso Legal</a></li>
                            <li><a href="<?= base_url('politica-cookies') ?>">Política de cookies</a></li>
                            <li><a href="<?= base_url('politica-privacidad') ?>">Política de privacidad</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            
            <!-- Columna derecha: Logo -->
            <div class="footer-logo">
                <a href="<?= base_url('/') ?>">
                    <img src="<?= base_url('assets/images/imagotipo-2.svg') ?>" alt="Implantex Academy">
                </a>
            </div>
        </div>
        
        <!-- Copyright -->
        <div class="footer-copyright">
            <p>&copy;<?= date('Y') ?> Instituto Internacional de Implantología y Estética Avanzadas</p>
        </div>
    </div>
</footer>
</body>
</html>