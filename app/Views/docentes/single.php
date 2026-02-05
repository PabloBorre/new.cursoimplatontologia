<!-- HERO PÁGINA INTERIOR -->
<section class="page-hero">
    <div class="page-hero__background">
        <img src="<?= base_url('assets/images/fondo-docentes-interior.webp') ?>" alt="<?= esc($doctor['full_name']) ?>" class="page-hero__image">
        <div class="page-hero__overlay"></div>
        <img src="/assets/images/flecha-blanca.svg" alt="" class="hero-arrow">
    </div>
    <div class="page-hero__content">
        <h1 class="page-hero__title"><?= esc($doctor['full_name']) ?></h1>
    </div>
</section>

<!-- CONTENIDO DEL DOCENTE -->
<section class="doctor-detail">
    <!-- Franja azul de fondo (pegada abajo) -->
    <div class="doctor-detail__bg-stripe"></div>
    
    <div class="doctor-detail__container">
            <!-- Columna izquierda: Información del doctor -->
            <div class="doctor-detail__info">
                
                <?php if (!empty($doctor['studies'])): ?>
                <div class="doctor-detail__block">
                    <img src="<?= base_url('assets/images/flecha-azulclaro-rellena.svg') ?>" alt="" class="doctor-detail__block-arrow">
                    <div class="doctor-detail__block-content">
                        <h3>Studies</h3>
                        <div><?= $doctor['studies'] ?></div>
                    </div>
                </div>
                <?php endif; ?>
                
                <?php if (!empty($doctor['other_studies'])): ?>
                <div class="doctor-detail__block">
                    <img src="<?= base_url('assets/images/flecha-azulclaro-rellena.svg') ?>" alt="" class="doctor-detail__block-arrow">
                    <div class="doctor-detail__block-content">
                        <h3>Other Studies</h3>
                        <div><?= $doctor['other_studies'] ?></div>
                    </div>
                </div>
                <?php endif; ?>
                
                <?php if (!empty($doctor['titles'])): ?>
                <div class="doctor-detail__block">
                    <img src="<?= base_url('assets/images/flecha-azulclaro-rellena.svg') ?>" alt="" class="doctor-detail__block-arrow">
                    <div class="doctor-detail__block-content">
                        <h3>Titles</h3>
                        <div><?= $doctor['titles'] ?></div>
                    </div>
                </div>
                <?php endif; ?>
                
                <?php if (!empty($doctor['teaching_activity'])): ?>
                <div class="doctor-detail__block">
                    <img src="<?= base_url('assets/images/flecha-azulclaro-rellena.svg') ?>" alt="" class="doctor-detail__block-arrow">
                    <div class="doctor-detail__block-content">
                        <h3>Teaching Activity</h3>
                        <div><?= $doctor['teaching_activity'] ?></div>
                    </div>
                </div>
                <?php endif; ?>
                
                <?php if (!empty($doctor['teaching_category'])): ?>
                <div class="doctor-detail__block">
                    <img src="<?= base_url('assets/images/flecha-azulclaro-rellena.svg') ?>" alt="" class="doctor-detail__block-arrow">
                    <div class="doctor-detail__block-content">
                        <h3>Teaching Category</h3>
                        <div><?= $doctor['teaching_category'] ?></div>
                    </div>
                </div>
                <?php endif; ?>
                
                <?php if (!empty($doctor['clinical_research'])): ?>
                <div class="doctor-detail__block">
                    <img src="<?= base_url('assets/images/flecha-azulclaro-rellena.svg') ?>" alt="" class="doctor-detail__block-arrow">
                    <div class="doctor-detail__block-content">
                        <h3>Clinical Research</h3>
                        <div><?= $doctor['clinical_research'] ?></div>
                    </div>
                </div>
                <?php endif; ?>
                
                <?php if (!empty($doctor['patents'])): ?>
                <div class="doctor-detail__block">
                    <img src="<?= base_url('assets/images/flecha-azulclaro-rellena.svg') ?>" alt="" class="doctor-detail__block-arrow">
                    <div class="doctor-detail__block-content">
                        <h3>Patents</h3>
                        <div><?= $doctor['patents'] ?></div>
                    </div>
                </div>
                <?php endif; ?>
                
                <?php if (!empty($doctor['publications'])): ?>
                <div class="doctor-detail__block">
                    <img src="<?= base_url('assets/images/flecha-azulclaro-rellena.svg') ?>" alt="" class="doctor-detail__block-arrow">
                    <div class="doctor-detail__block-content">
                        <h3>Publications</h3>
                        <div><?= $doctor['publications'] ?></div>
                    </div>
                </div>
                <?php endif; ?>
                
                <?php if (!empty($doctor['presentations'])): ?>
                <div class="doctor-detail__block">
                    <img src="<?= base_url('assets/images/flecha-azulclaro-rellena.svg') ?>" alt="" class="doctor-detail__block-arrow">
                    <div class="doctor-detail__block-content">
                        <h3>Presentations</h3>
                        <div><?= $doctor['presentations'] ?></div>
                    </div>
                </div>
                <?php endif; ?>
                
                <?php if (!empty($doctor['courses_taught'])): ?>
                <div class="doctor-detail__block">
                    <img src="<?= base_url('assets/images/flecha-azulclaro-rellena.svg') ?>" alt="" class="doctor-detail__block-arrow">
                    <div class="doctor-detail__block-content">
                        <h3>Courses Taught</h3>
                        <div><?= $doctor['courses_taught'] ?></div>
                    </div>
                </div>
                <?php endif; ?>
                
                <?php if (!empty($doctor['courses_received'])): ?>
                <div class="doctor-detail__block">
                    <img src="<?= base_url('assets/images/flecha-azulclaro-rellena.svg') ?>" alt="" class="doctor-detail__block-arrow">
                    <div class="doctor-detail__block-content">
                        <h3>Courses Received</h3>
                        <div><?= $doctor['courses_received'] ?></div>
                    </div>
                </div>
                <?php endif; ?>
                
                <?php if (!empty($doctor['professional_experience'])): ?>
                <div class="doctor-detail__block">
                    <img src="<?= base_url('assets/images/flecha-azulclaro-rellena.svg') ?>" alt="" class="doctor-detail__block-arrow">
                    <div class="doctor-detail__block-content">
                        <h3>Professional Experience</h3>
                        <div><?= $doctor['professional_experience'] ?></div>
                    </div>
                </div>
                <?php endif; ?>
                
                <?php if (!empty($doctor['positions_held'])): ?>
                <div class="doctor-detail__block">
                    <img src="<?= base_url('assets/images/flecha-azulclaro-rellena.svg') ?>" alt="" class="doctor-detail__block-arrow">
                    <div class="doctor-detail__block-content">
                        <h3>Positions Held</h3>
                        <div><?= $doctor['positions_held'] ?></div>
                    </div>
                </div>
                <?php endif; ?>
                
                <?php if (!empty($doctor['abroad_stays'])): ?>
                <div class="doctor-detail__block">
                    <img src="<?= base_url('assets/images/flecha-azulclaro-rellena.svg') ?>" alt="" class="doctor-detail__block-arrow">
                    <div class="doctor-detail__block-content">
                        <h3>Abroad Stays</h3>
                        <div><?= $doctor['abroad_stays'] ?></div>
                    </div>
                </div>
                <?php endif; ?>
                
                <?php if (!empty($doctor['scholarships_research_groups'])): ?>
                <div class="doctor-detail__block">
                    <img src="<?= base_url('assets/images/flecha-azulclaro-rellena.svg') ?>" alt="" class="doctor-detail__block-arrow">
                    <div class="doctor-detail__block-content">
                        <h3>Scholarships & Research Groups</h3>
                        <div><?= $doctor['scholarships_research_groups'] ?></div>
                    </div>
                </div>
                <?php endif; ?>
                
                <?php if (!empty($doctor['notes'])): ?>
                <div class="doctor-detail__block">
                    <img src="<?= base_url('assets/images/flecha-azulclaro-rellena.svg') ?>" alt="" class="doctor-detail__block-arrow">
                    <div class="doctor-detail__block-content">
                        <h3>Additional Notes</h3>
                        <div><?= $doctor['notes'] ?></div>
                    </div>
                </div>
                <?php endif; ?>

            </div>
        
        <!-- Columna derecha: Imagen del doctor -->
        <div class="doctor-detail__sidebar">
            <div class="doctor-detail__image-box">
                <img src="<?= base_url($doctor['image_path']) ?>" alt="<?= esc($doctor['full_name']) ?>" class="doctor-detail__image">
            </div>
            <?php if (!empty($doctor['role_title'])): ?>
            <div class="doctor-detail__role-box">
                <span class="doctor-detail__role"><?= esc($doctor['role_title']) ?></span>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- BOTÓN VOLVER -->
<section class="doctor-back">
    <div class="doctor-back__container">
        <div class="doctor-back__content">
            <a href="<?= base_url('docentes') ?>" class="doctor-back__btn">← Back to teachers</a>
        </div>
    </div>
</section>