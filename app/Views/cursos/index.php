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
    
    <!-- Curso 1: Imagen izquierda, texto derecha -->
    <article class="course-card course-card--left">
        <div class="course-card__bg course-card__bg--white"></div>
        <div class="course-card__bg course-card__bg--light"></div>
        
        <div class="course-card__wrapper">
            <div class="course-card__image-side">
                <div class="course-card__image-box">
                    <img src="<?= base_url('assets/images/operacion-imagen-docentes.webp') ?>" alt="Surgical Implantology Course" class="course-card__image">
                </div>
                <div class="course-card__arrows">
                    <img src="<?= base_url('assets/images/flecha-azulclaro-rellena.svg') ?>" alt="" class="course-card__arrow course-card__arrow--filled">
                    <img src="<?= base_url('assets/images/flecha-azul-claro.svg') ?>" alt="" class="course-card__arrow course-card__arrow--outline">
                </div>
            </div>
            <div class="course-card__content">
                <h2 class="course-card__title">
                    Surgical<br>
                    Implantology
                </h2>
                <p class="course-card__subtitle">Course</p>
                <a href="<?= base_url('cursos/implantologia-quirurgica') ?>" class="course-card__btn">More information</a>
            </div>
        </div>
    </article>

    <!-- Curso 2: Texto izquierda, imagen derecha -->
    <article class="course-card course-card--right">
        <div class="course-card__bg course-card__bg--white"></div>
        <div class="course-card__bg course-card__bg--light"></div>
        
        <div class="course-card__wrapper">
            <div class="course-card__content">
                <h2 class="course-card__title">
                    Advanced<br>
                    Implantology
                </h2>
                <p class="course-card__subtitle">Course</p>
                <a href="<?= base_url('cursos/implantologia-avanzada') ?>" class="course-card__btn">More information</a>
            </div>
            <div class="course-card__image-side">
                <div class="course-card__arrows" style="z-index: 2;">
                    <img src="<?= base_url('assets/images/flecha-azul-claro.svg') ?>" alt="" class="course-card__arrow course-card__arrow--outline">
                    <img src="<?= base_url('assets/images/flecha-azulclaro-rellena.svg') ?>" alt="" class="course-card__arrow course-card__arrow--filled">
                </div>
                <div class="course-card__image-box" style="z-index: 1;">
                    <img src="<?= base_url('assets/images/operacion-imagen-docentes.webp') ?>" alt="Advanced Implantology Course" class="course-card__image">
                </div>
            </div>
        </div>
    </article>

</section>