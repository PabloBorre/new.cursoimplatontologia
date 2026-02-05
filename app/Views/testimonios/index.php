<!-- HERO PÁGINA INTERIOR -->
<section class="page-hero">
    <div class="page-hero__background">
        <img src="<?= base_url('assets/images/operacion-imagen-contacto.webp') ?>" alt="" class="page-hero__image">
        <div class="page-hero__overlay"></div>
        <img src="/assets/images/flecha-blanca.svg" alt="" class="hero-arrow">
    </div>
    <div class="page-hero__content">
        <h1 class="page-hero__title">Testimonials</h1>
    </div>
</section>


<!-- Testimonials Section -->
<section class="testimonials" id="testimonials">
    <div class="testimonials__container">
        <div class="testimonials__grid">
            <?php if (!empty($testimonials)): ?>
                <?php foreach ($testimonials as $testimonial): ?>
                    <div class="testimonial-card" data-video="<?= esc($testimonial['video_path']) ?>">
                        <div class="testimonial-card__media">
                            <div class="testimonial-card__image-wrapper">
                                <img 
                                    src="<?= base_url($testimonial['image_path']) ?>" 
                                    alt="Testimonio de <?= esc($testimonial['name']) ?>"
                                    class="testimonial-card__image"
                                    loading="lazy"
                                >
                                <div class="testimonial-card__play">
                                    <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="30" cy="30" r="30" fill="var(--color-clarity)" fill-opacity="0.9"/>
                                        <path d="M42 30L24 40.3923V19.6077L42 30Z" fill="var(--color-depth)"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-card__info">
                            <div class="testimonial-card__name-wrapper">
                                <img width="24" src="<?= base_url('assets/images/flecha-azulclaro-rellena.svg') ?>" alt="" class="testimonial-card__arrow">
                                <span class="testimonial-card__name"><?= esc($testimonial['name']) ?></span>
                            </div>
                            <span class="testimonial-card__country"><?= esc($testimonial['country']) ?></span>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p class="testimonials__empty">No hay testimonios disponibles en este momento.</p>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- Video Modal (GLightbox) -->
<div id="video-modal" class="video-modal" style="display: none;">
    <div class="video-modal__overlay"></div>
    <div class="video-modal__content">
        <button class="video-modal__close" aria-label="Cerrar video">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M18 6L6 18M6 6L18 18" stroke="white" stroke-width="2" stroke-linecap="round"/>
            </svg>
        </button>
        <video id="modal-video" controls>
            <source src="" type="video/mp4">
            Tu navegador no soporta la reproducción de video.
        </video>
    </div>
</div>

<!-- CTA Section - Destacar en implantología -->
<section class="cta-destacar">
    <div class="cta-destacar__container">
        <div class="cta-destacar__image">
            <img src="<?= base_url('assets/images/doctores-conversando.webp') ?>" alt="Doctores conversando en clínica" loading="lazy">
        </div>
        <div class="cta-destacar__content">
            <h2 class="cta-destacar__title">Do you want to stand out in the field of implantology?</h2>
            <p class="cta-destacar__text">Join our trainees and gain the skills and knowledge you need to excel in this specialty.</p>
            <a href="<?= base_url('contacto') ?>" class="cta-destacar__btn">Request information</a>
        </div>
    </div>
</section>