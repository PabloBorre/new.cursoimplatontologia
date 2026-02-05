<main>
    <!-- HERO PÁGINA INTERIOR -->
    <section class="page-hero">
        <div class="page-hero__background">
            <img src="<?= base_url('assets/images/operacion-imagen-docentes.webp') ?>" alt="" class="page-hero__image">
            <div class="page-hero__overlay"></div>
            <img src="/assets/images/flecha-blanca.svg" alt="" class="hero-arrow">
        </div>
        <div class="page-hero__content">
            <h1 class="page-hero__title">Instructors</h1>
        </div>
    </section>

    <!-- FILA 1: Intro + Título 30 años -->
    <section class="docentes-row docentes-row--1">
        <div class="docentes-row__container reverse-colum">
            <div class="docentes-row__col docentes-row__col--left">
                <p class="docentes-intro-text">
                    Our teaching team has decades of experience training and educating dental professionals all over the world. If you want to learn from the best doctors and instructors, what are you waiting for to enroll in our courses?
                </p>
                </div>
                <div class="docentes-row__col docentes-row__col--right">
                    <h1 class="docentes-main-title">
                        More than 30 years <span>teaching courses around the world</span>
                    </h1>
                    <a href="#docentes-lista" class="docentes-btn">Meet your<br>future instructors</a>
            </div>
        </div>
    </section>

    <!-- FILA 2: Foto Doctor + Descripción -->
    <section class="docentes-row docentes-row--2">
        <div class="docentes-row__container">
            <div class="docentes-row__col docentes-row__col--left">
                <div class="docentes-doctor-image">
                    <img src="<?= base_url('assets/images/juan-jesus-perez.webp') ?>" alt="Dr. Juan Jesús Pérez García">
                </div>
            </div>
            <div class="docentes-row__col docentes-row__col--right">
                <p class="docentes-doctor-text">
                    <strong>Dr. Juan Jesús Pérez García</strong>, director and instructor at our institute, was trained by the “father of modern dental implantology,” Prof. Brånemark, in Sweden. Since then, <strong>he has placed more than 45,000 implants</strong> in a wide range of cases, making him <strong>an expert in his field</strong> and an outstanding communicator. Learning from him is a unique opportunity to begin your own path to success.
                </p>
            </div>
        </div>
    </section>

    <!-- FILA 3: Metodología + Imagen operación -->
    <section class="docentes-row docentes-row--3">
        <div class="docentes-row__container reverse-colum">
            <div class="docentes-row__col docentes-row__col--left">
                <p class="docentes-metodologia-text">
                    We deliver courses that provide hands-on, real-world learning. We have given our students both theoretical and practical training, and together they have placed more than 50,000 dental implants during their education. Our methodology recognizes that practice goes hand in hand with theory—don’t waste your time on programs that don’t allow you to place a single implant.
                </p>
            </div>
            <div class="docentes-row__col docentes-row__col--right">
                <div class="docentes-operacion-image">
                    <img src="<?= base_url('assets/images/operacion-docentes-primera-seccion.webp') ?>" alt="Operación de implantología">
                </div>
            </div>
        </div>
    </section>

    <!-- FILA 4: Más de 200 cursos -->
    <section class="docentes-row docentes-row--4">
        <div class="docentes-row__container">
            <h2 class="docentes-cursos-title">Más de 200<br>cursos impartidos</h2>
        </div>
        <div class="docentes-row__container">
            <div class="docentes-row__col docentes-row__col--left">
                <div class="docentes-cursos-image" style="background-image: url('<?= base_url('assets/images/doctores-conversando.webp') ?>');" aria-label="Doctores conversando"></div>
            </div>
            <div class="docentes-row__col docentes-row__col--right">
                <p class="docentes-cursos-text">
                    Over these 30 years, Dr. Juan Jesús Pérez García has delivered<br> more than 200 Implantology courses, in addition to giving <br>numerous lectures around the world.
                </p>
                <a href="<?= base_url('contacto') ?>" class="docentes-btn docentes-btn--cursos">Any question?</a>            
            </div>
        </div>
    </section>

    <!-- SEPARADOR -->
    <section class="no-time">
        <div class="no-time-container">
            <div class="no-time-arrow">
                <img src="/assets/images/flecha-azul-claro.svg" alt="" class="no-time-arrow-filled">
                <img src="/assets/images/flecha-azul-claro.svg" alt="" class="no-time-arrow-outline">
            </div>
            <p class="no-time-text">
                <strong>MEET OUR<br>
                INSTRUCTOR TEAM</strong>
            </p>
        </div>
    </section>


    <!-- SECCIÓN EQUIPO DOCENTE - TARJETAS -->
    <section class="docentes-team">
        <div class="docentes-team__container">
            <div class="docentes-team__grid">
                
                <?php if (!empty($doctors)): ?>
                    <?php foreach ($doctors as $doctor): ?>
                        <div class="docente-card">
                            <div class="docente-card__arrow">
                                <img src="<?= base_url('assets/images/imagotipo-2.svg') ?>" alt="">
                            </div>
                            <div class="docente-card__image">
                                <img src="<?= base_url($doctor['image_path']) ?>" alt="<?= esc($doctor['full_name']) ?>">
                            </div>
                            <h3 class="docente-card__name"><?= esc($doctor['full_name']) ?><?php if (!empty($doctor['role_title'])): ?> | <?= esc($doctor['role_title']) ?><?php endif; ?></h3>
                            <a href="<?= base_url('docente/' . $doctor['slug']) ?>" class="docente-card__btn">More information</a>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>No hay docentes disponibles.</p>
                <?php endif; ?>
                
            </div>
        </div>
    </section>


    <!-- SEPARADOR -->
    <section class="no-time">
        <div class="no-time-container">
            <div class="no-time-arrow">
                <img src="/assets/images/flecha-azul-claro.svg" alt="" class="no-time-arrow-filled">
                <img src="/assets/images/flecha-azul-claro.svg" alt="" class="no-time-arrow-outline">
            </div>
            <p class="no-time-text">
                <strong>MEET OUR<br>
                LOCAL TEAM</strong>
            </p>
        </div>
    </section>


    <!-- SECCIÓN LOCALES -->
    <section class="locales-team">
        <div class="locales-team__container">
            <div class="locales-team__grid">
                
                <?php if (!empty($locals)): ?>
                    <?php foreach ($locals as $local): ?>
                        <div class="local-card">
                            <div class="local-card__arrow">
                                <img src="<?= base_url('assets/images/imagotipo-azul-oscuro.svg') ?>" alt="">
                            </div>
                            <div class="local-card__image">
                                <img src="<?= base_url($local['image_path']) ?>" alt="<?= esc($local['name']) ?>">
                            </div>
                            <h3 class="local-card__name"><?= esc($local['name']) ?></h3>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>No hay locales disponibles.</p>
                <?php endif; ?>
                
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
            </div>
        </div>
    </section>
</main>