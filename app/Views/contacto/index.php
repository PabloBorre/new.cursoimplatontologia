<!-- HERO PÁGINA INTERIOR -->
<section class="page-hero">
    <div class="page-hero__background">
        <img src="<?= base_url('assets/images/operacion-imagen-contacto.webp') ?>" alt="" class="page-hero__image">
        <div class="page-hero__overlay"></div>
        <img src="/assets/images/flecha-blanca.svg" alt="" class="hero-arrow">
    </div>
    <div class="page-hero__content">
        <h1 class="page-hero__title">Contact</h1>
    </div>
</section>

<!-- BARRA DE CONTACTO -->
<section class="contact-bar">
    <div class="contact-bar__container">
        <a href="tel:+347863827805" class="contact-bar__item">
            <img src="<?= base_url('assets/images/flecha-azulclaro-rellena.svg') ?>" alt="" class="contact-bar__arrow">
            <span>786 382 78 05</span>
        </a>
        <a href="mailto:info@cursodeimplantologia.com" class="contact-bar__item">
            <img src="<?= base_url('assets/images/flecha-azulclaro-rellena.svg') ?>" alt="" class="contact-bar__arrow">
            <span>info@cursodeimplantologia.com</span>
        </a>
        <div class="contact-bar__item">
            <img src="<?= base_url('assets/images/flecha-azulclaro-rellena.svg') ?>" alt="" class="contact-bar__arrow">
            <span>Madrid/Málaga</span>
        </div>
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