<!-- HERO PÁGINA INTERIOR -->
<section class="page-hero">
    <div class="page-hero__background">
        <img src="<?= base_url($course['hero_image'] ?? 'assets/images/operacion-fondo-nuestros-cursos.webp') ?>" alt="" class="page-hero__image">
        <div class="page-hero__overlay"></div>
        <img src="/assets/images/flecha-blanca.svg" alt="" class="hero-arrow">
    </div>
    <div class="page-hero__content">
        <h1 class="page-hero__title"><?= esc($course['title']) ?></h1>
    </div>
</section>


<!-- CONTENIDO DEL CURSO -->
<section class="course-detail">
    <!-- Franja azul de fondo (pegada abajo) -->
    <div class="course-detail__bg-stripe"></div>
    
    <div class="course-detail__container">
        <!-- Columna izquierda: Información del curso -->
        <div class="course-detail__info">
            
            <?php 
            // Decodificar JSON fields
            $features = $course['features'] ?? [];
            if (is_string($features)) {
                $features = json_decode($features, true) ?? [];
            }
            
            $includes = $course['includes'] ?? [];
            if (is_string($includes)) {
                $includes = json_decode($includes, true) ?? [];
            }
            
            $requirements = $course['requirements'] ?? [];
            if (is_string($requirements)) {
                $requirements = json_decode($requirements, true) ?? [];
            }
            ?>
            
            <!-- Bloque 1: Features/What you will learn -->
            <?php if (!empty($features)): ?>
            <div class="course-detail__block">
                <img src="<?= base_url('assets/images/flecha-azulclaro-rellena.svg') ?>" alt="" class="course-detail__block-arrow">
                <div class="course-detail__block-content">
                    <p><?= esc(implode(', ', array_map('lcfirst', $features))) ?>.</p>
                </div>
            </div>
            <?php endif; ?>
            
            <!-- Bloque 2: What's included -->
            <?php if (!empty($includes)): ?>
            <div class="course-detail__block">
                <img src="<?= base_url('assets/images/flecha-azulclaro-rellena.svg') ?>" alt="" class="course-detail__block-arrow">
                <div class="course-detail__block-content">
                    <p>Additionally, you will have access to <?= esc(strtolower(implode(', ', $includes))) ?>.</p>
                </div>
            </div>
            <?php endif; ?>
            
            <!-- Bloque 3: Duration & extra info -->
            <div class="course-detail__block">
                <img src="<?= base_url('assets/images/flecha-azulclaro-rellena.svg') ?>" alt="" class="course-detail__block-arrow">
                <div class="course-detail__block-content">
                    <p>The course lasts <?= esc($course['duration_days'] ?? 5) ?> days and includes all necessary materials and certifications.</p>
                </div>
            </div>

        </div>
        
        <!-- Columna derecha: Imagen + Precio -->
        <div class="course-detail__sidebar">
            <div class="course-detail__image-box">
                <img src="<?= base_url($course['content_image'] ?? 'assets/images/operacion-imagen-docentes.webp') ?>" alt="<?= esc($course['title']) ?>" class="course-detail__image">
            </div>
            <div class="course-detail__price-box">
                <span class="course-detail__price"><?= number_format($course['price'], 0, ',', '') ?><?= $course['currency'] === 'EUR' ? '€' : '$' ?></span>
            </div>
        </div>
    </div>
</section>

<!-- FECHAS DEL CURSO -->
<?php if (!empty($courseDates)): ?>
<section class="course-dates">
    <div class="course-dates__container">
        <h2 class="course-dates__title">Upcoming Dates</h2>
        
        <div class="course-dates__grid">
            <?php foreach ($courseDates as $location => $dates): ?>
            <div class="course-dates__location">
                <h3 class="course-dates__location-name">
                    <img src="<?= base_url('assets/images/flecha-azulclaro-rellena.svg') ?>" alt="" class="course-dates__arrow">
                    <?= esc($location) ?>
                </h3>
                <ul class="course-dates__list">
                    <?php foreach ($dates as $date): ?>
                    <li class="course-dates__item">
                        <span class="course-dates__date">
                            <?= \App\Models\CourseDateModel::formatDateRange($date['start_date'], $date['end_date']) ?>
                        </span>
                        <?php if ($date['spots_available'] > 0): ?>
                        <span class="course-dates__spots">SPOTS AVAILABLE</span>
                        <?php else: ?>
                        <span class="course-dates__spots course-dates__spots--full">Full</span>
                        <?php endif; ?>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <?php endforeach; ?>
        </div>
        
        <div class="course-dates__cta">
            <a href="<?= base_url('contacto') ?>" class="course-dates__btn">Reserve your spot</a>
        </div>
    </div>
</section>
<?php endif; ?>

<!-- CURSO PARA AUXILIARES -->
<?php if (!empty($auxiliaryCourse)): ?>
<section class="auxiliary-course">
    <div class="auxiliary-course__container">
        <!-- Flechas decorativas -->
        <div class="auxiliary-course__arrows">
            <img src="<?= base_url('assets/images/flecha-azul-muy-claro-rellena.svg') ?>" alt="" class="auxiliary-course__arrow auxiliary-course__arrow--light">
            <img src="<?= base_url('assets/images/flecha-azulclaro-rellena.svg') ?>" alt="" class="auxiliary-course__arrow auxiliary-course__arrow--main">
        </div>
        
        <!-- Contenido -->
        <div class="auxiliary-course__content">
            <h2 class="auxiliary-course__title"><?= esc($auxiliaryCourse['title']) ?></h2>
            <p class="auxiliary-course__text"><?= esc($auxiliaryCourse['description']) ?></p>
            <a href="<?= base_url('contacto') ?>" class="auxiliary-course__btn">Any questions?</a>
        </div>
    </div>
</section>
<?php endif; ?>