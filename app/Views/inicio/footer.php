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
                            <li><a href="<?= base_url('/') ?>">Home</a></li>
                            <li><a href="<?= base_url('docentes') ?>">Instructor</a></li>
                            <li><a href="<?= base_url('cursos') ?>">Courses</a></li>
                            <li><a href="<?= base_url('testimonios') ?>">Testimonials</a></li>
                        </ul>
                    </nav>
                    
                    <nav class="footer-nav footer-nav--legal">
                        <ul>
                            <li><a href="<?= base_url('legal-notice') ?>">Legal Notice</a></li>
                            <li><a href="<?= base_url('cookie-policy') ?>">Cookie Policy</a></li>
                            <li><a href="<?= base_url('privacy-policy') ?>">Privacy Policy</a></li>
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

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<!-- GLightbox JS -->
<script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>

<script src="<?= base_url('assets/js/testimonials.js') ?>"></script>
</body>
</html>