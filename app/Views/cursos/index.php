<!-- HERO PÁGINA INTERIOR -->
<section class="page-hero">
    <div class="page-hero__background">
        <img src="<?= base_url('assets/images/operacion-fondo-nuestros-cursos.webp') ?>" alt="" class="page-hero__image">
        <div class="page-hero__overlay"></div>
        <img src="/assets/images/flecha-blanca.svg" alt="" class="hero-arrow">
    </div>
    <div class="page-hero__content">
        <h1 class="page-hero__title">Our Courses</h1>
    </div>
</section>

<!-- LISTADO DE CURSOS -->
<section class="courses-list">
    
    <?php foreach ($courses as $index => $course): ?>
        <?php 
        // Alternar entre formato izquierda (par) y derecha (impar)
        $isLeftLayout = ($index % 2 === 0);
        $layoutClass = $isLeftLayout ? 'course-card--left' : 'course-card--right';
        
        // Dividir el título para el formato visual
        $titleParts = explode(' - ', $course['title']);
        $mainTitle = $titleParts[0] ?? $course['title'];
        
        // Separar palabras del título principal para el formato con <br>
        $titleWords = explode(' ', $mainTitle);
        $formattedTitle = '';
        if (count($titleWords) > 1) {
            // Primera palabra en una línea, resto en otra
            $formattedTitle = $titleWords[0] . '<br>' . implode(' ', array_slice($titleWords, 1));
        } else {
            $formattedTitle = $mainTitle;
        }
        ?>
        
        <?php if ($isLeftLayout): ?>
        <!-- Curso: Imagen izquierda, texto derecha -->
        <article class="course-card <?= $layoutClass ?>">
            <div class="course-card__bg course-card__bg--white"></div>
            <div class="course-card__bg course-card__bg--light"></div>
            
            <div class="course-card__wrapper">
                <div class="course-card__image-side">
                    <div class="course-card__image-box">
                        <img src="<?= base_url($course['content_image'] ?? 'assets/images/operacion-imagen-docentes.webp') ?>" alt="<?= esc($course['title']) ?>" class="course-card__image">
                    </div>
                    <div class="course-card__arrows">
                        <img src="<?= base_url('assets/images/flecha-azulclaro-rellena.svg') ?>" alt="" class="course-card__arrow course-card__arrow--filled">
                        <img src="<?= base_url('assets/images/flecha-azul-claro.svg') ?>" alt="" class="course-card__arrow course-card__arrow--outline">
                    </div>
                </div>
                <div class="course-card__content">
                    <span class="course-card__level">Level <?= esc($course['level']) ?></span>
                    <h2 class="course-card__title">
                        <?= $formattedTitle ?>
                    </h2>
                    <p class="course-card__subtitle"><?= esc($course['subtitle'] ?? 'Course') ?></p>
                    
                    <a href="<?= base_url('cursos/' . $course['slug']) ?>" class="course-card__btn">More information</a>
                </div>
            </div>
        </article>
        
        <?php else: ?>
        <!-- Curso: Texto izquierda, imagen derecha -->
        <article class="course-card <?= $layoutClass ?>">
            <div class="course-card__bg course-card__bg--white"></div>
            <div class="course-card__bg course-card__bg--light"></div>
            
            <div class="course-card__wrapper">
                <div class="course-card__content">
                    <span class="course-card__level">Level <?= esc($course['level']) ?></span>
                    <h2 class="course-card__title">
                        <?= $formattedTitle ?>
                    </h2>
                    <p class="course-card__subtitle"><?= esc($course['subtitle'] ?? 'Course') ?></p>
                    
                    <a href="<?= base_url('cursos/' . $course['slug']) ?>" class="course-card__btn">More information</a>
                </div>
                <div class="course-card__image-side">
                    <div class="course-card__arrows" style="z-index: 2;">
                        <img src="<?= base_url('assets/images/flecha-azul-claro.svg') ?>" alt="" class="course-card__arrow course-card__arrow--outline">
                        <img src="<?= base_url('assets/images/flecha-azulclaro-rellena.svg') ?>" alt="" class="course-card__arrow course-card__arrow--filled">
                    </div>
                    <div class="course-card__image-box" style="z-index: 1;">
                        <img src="<?= base_url($course['content_image'] ?? 'assets/images/sala-2-curso.webp') ?>" alt="<?= esc($course['title']) ?>" class="course-card__image">
                    </div>
                </div>
            </div>
        </article>
        <?php endif; ?>
        
    <?php endforeach; ?>

</section>

<!-- NO PIERDAS TU TIEMPO -->
<section class="no-time">
    <div class="no-time-container">
        <div class="no-time-arrow">
            <img src="/assets/images/flecha-azul-claro.svg" alt="" class="no-time-arrow-filled">
            <img src="/assets/images/flecha-azul-claro.svg" alt="" class="no-time-arrow-outline">
        </div>
        <p class="no-time-text">
            With our Implantology courses, you will have access to the knowledge of a teaching team with more than 30 years of experience, who will train you both theoretically and practically so you can apply what you’ve learned with complete autonomy.
        </p>
    </div>
</section>

<!-- GALLERY - OUR PRACTICAL CLASSES -->
<section class="gallery-section">
    <div class="gallery-container">
        <h2 class="gallery-title">Our practical classes</h2>
        
        <!-- Swiper Slider -->
        <div class="swiper gallery-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <a href="<?= base_url('assets/images/fiesta-del-curso.webp') ?>" class="gallery-link glightbox" data-gallery="gallery1" data-description="Course celebration">
                        <img src="<?= base_url('assets/images/fiesta-del-curso.webp') ?>" alt="Course celebration" class="gallery-image">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="<?= base_url('assets/images/equipo-docente.webp') ?>" class="gallery-link glightbox" data-gallery="gallery1" data-description="Teaching team">
                        <img src="<?= base_url('assets/images/equipo-docente.webp') ?>" alt="Teaching team" class="gallery-image">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="<?= base_url('assets/images/diplomas-durante-la-fiesta.webp') ?>" class="gallery-link glightbox" data-gallery="gallery1" data-description="Diploma ceremony">
                        <img src="<?= base_url('assets/images/diplomas-durante-la-fiesta.webp') ?>" alt="Diploma ceremony" class="gallery-image">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="<?= base_url('assets/images/charla-implantex.webp') ?>" class="gallery-link glightbox" data-gallery="gallery1" data-description="Implantex lecture">
                        <img src="<?= base_url('assets/images/charla-implantex.webp') ?>" alt="Implantex lecture" class="gallery-image">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="<?= base_url('assets/images/sala-2-curso.webp') ?>" class="gallery-link glightbox" data-gallery="gallery1" data-description="Course classroom">
                        <img src="<?= base_url('assets/images/sala-2-curso.webp') ?>" alt="Course classroom" class="gallery-image">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="<?= base_url('assets/images/operacion-implantex-curso.webp') ?>" class="gallery-link glightbox" data-gallery="gallery1" data-description="Implant surgery practice">
                        <img src="<?= base_url('assets/images/operacion-implantex-curso.webp') ?>" alt="Implant surgery practice" class="gallery-image">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="<?= base_url('assets/images/operacion-implantex-curso-3.webp') ?>" class="gallery-link glightbox" data-gallery="gallery1" data-description="Hands-on surgical training">
                        <img src="<?= base_url('assets/images/operacion-implantex-curso-3.webp') ?>" alt="Hands-on surgical training" class="gallery-image">
                    </a>
                </div>
            </div>
            
        </div>
        
        <!-- Pagination -->
        <div class="gallery-pagination"></div>
    </div>
</section>


<!-- FORMULARIO DE CONTACTO -->
<section class="contact-form-section">
    <div class="contact-form-section__container">
        <!-- Columna izquierda: Formulario -->
        <div class="contact-form-section__left">
            <h2 class="contact-form-section__title">Any questions?</h2>
            
            <?= form_open('contacto/enviar', ['class' => 'contact-form', 'id' => 'contactForm']) ?>
                <div class="contact-form__group">
                    <input 
                        type="text" 
                        name="nombre" 
                        id="nombre" 
                        class="contact-form__input" 
                        placeholder="Name"
                        required
                    >
                </div>
                
                <div class="contact-form__group">
                    <input 
                        type="email" 
                        name="email" 
                        id="email" 
                        class="contact-form__input" 
                        placeholder="Email"
                        required
                    >
                </div>
                
                <div class="contact-form__group">
                    <input 
                        type="tel" 
                        name="telefono" 
                        id="telefono" 
                        class="contact-form__input" 
                        placeholder="Phone"
                    >
                </div>
                
                <div class="contact-form__group">
                    <textarea 
                        name="mensaje" 
                        id="mensaje" 
                        class="contact-form__textarea" 
                        placeholder="Message"
                        rows="6"
                        required
                    ></textarea>
                </div>
                
                <button type="submit" class="contact-form__submit">Send</button>
            <?= form_close() ?>
        </div>
        
        <!-- Columna derecha: Imagen -->
        <div class="contact-form-section__right">
            <div class="contact-form-section__image-wrapper">
                <img src="<?= base_url('assets/images/habana-contacto.webp') ?>" alt="Havana, Cuba" class="contact-form-section__image">
            </div>
            <p class="contact-form-section__caption">
                Interested in taking our implantology courses,<br>
                but can't attend in person?
            </p>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialize Swiper
    const gallerySlider = new Swiper('.gallery-slider', {
        slidesPerView: 1,
        spaceBetween: 20,
        loop: true,
        grabCursor: true,
        centeredSlides: false,
        
        // Navigation arrows
        navigation: {
            nextEl: '.gallery-nav-next',
            prevEl: '.gallery-nav-prev',
        },
        
        // Pagination
        pagination: {
            el: '.gallery-pagination',
            clickable: true,
        },
        
        // Responsive breakpoints
        breakpoints: {
            480: {
                slidesPerView: 2,
                spaceBetween: 15,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
            1024: {
                slidesPerView: 4,
                spaceBetween: 25,
            },
            1400: {
                slidesPerView: 4,
                spaceBetween: 30,
            }
        },
        
        // Autoplay
        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
            pauseOnMouseEnter: true,
        },
    });

    // Initialize GLightbox
    const lightbox = GLightbox({
        selector: '.glightbox',
        touchNavigation: true,
        loop: true,
        closeButton: true,
        svg: {
            close: '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>',
            next: '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18L15 12L9 6"></path></svg>',
            prev: '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M15 18L9 12L15 6"></path></svg>',
        },
    });
});
</script>