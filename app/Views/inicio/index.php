<main>
    <!-- HERO -->
    <section class="hero hero--video">
        <div class="hero-background">
            <!-- Imagen de fallback para dispositivos sin autoplay -->
            <img src="<?= base_url('assets/images/hero-bg.webp') ?>" alt="" class="hero-bg-image hero-bg-fallback">
            
            <!-- Contenedor del video de YouTube -->
            <div class="hero-video-container" id="hero-video-container">
                <div id="hero-video-player"></div>
            </div>
            
            <!-- Overlay con efecto de color -->
            <div class="hero-overlay"></div>
            
            <!-- Flecha decorativa -->
            <img src="<?= base_url('assets/images/flecha-blanca.svg') ?>" alt="" class="hero-arrow">
        </div>
        <div class="hero-content">
            <h1><span>Dental Implant</span> <br>Courses &<br><span>Implantology</span> Courses</h1>
            <div class="hero-logos">
                <img src="<?= base_url('assets/images/logo-pace.png') ?>" alt="PACE - Academy of General Dentistry">
                <img src="<?= base_url('assets/images/logo-adi.png') ?>" alt="ADI - Association of Dental Implantology">
                <img src="<?= base_url('assets/images/logo-ada-cerp.png') ?>" alt="ADA CERP">
            </div>
        </div>
    </section>


    <!-- UBICACIÓN - LA HABANA -->
    <section class="location">
        <div class="location-image-container">
            <div class="location-image-wrapper">
                <img src="/assets/images/habana.webp" alt="La Habana, Cuba" class="location-image">
            </div>
            <!-- Flechas decorativas -->
            <img src="/assets/images/flecha-azulclaro-rellena.svg" alt="" class="location-arrow location-arrow-filled">
            <img src="/assets/images/flecha-blanca.svg" alt="" class="location-arrow location-arrow-outline">
        </div>
        <div class="location-content">
            <p class="location-subtitle">You will take the course in<br> a paradisiacal environment</p>
            <h2 class="location-title">Havana</h2>
        </div>
    </section>

    <!-- ESTADÍSTICAS -->
    <section class="stats">
        <div class="stats-container">
            <div class="stat-item">
                <div class="stat-arrows">
                    <img src="/assets/images/flecha-oscura-rellena.svg" alt="" class="stat-arrow">
                </div>
                <span class="stat-number">+200</span>
                <span class="stat-text">courses<br>delivered</span>
            </div>
            <div class="stat-item">
                <div class="stat-arrows">
                    <img src="/assets/images/flecha-oscura-rellena.svg" alt="" class="stat-arrow">
                </div>
                <span class="stat-number">30</span>
                <span class="stat-text">years<br>training</span>
            </div>
            <div class="stat-item">
                <div class="stat-arrows">
                    <img src="/assets/images/flecha-oscura-rellena.svg" alt="" class="stat-arrow">
                </div>
                <span class="stat-number">+2000</span>
                <span class="stat-text">trained<br>professionals</span>
            </div>
            <div class="stat-item">
                <div class="stat-arrows">
                    <img src="/assets/images/flecha-oscura-rellena.svg" alt="" class="stat-arrow">
                </div>
                <span class="stat-number">15</span>
                <span class="stat-text">qualified<br>instructors</span>
            </div>
        </div>
    </section>

    <!-- EQUIPO DOCENTE -->
    <section class="team">
        <div class="team-container">
            <div class="team-content">
                <p class="team-text">
                    <strong>Courses that transfer the extensive experience of the teaching team:</strong> 
                    you will learn from the successes and mistakes of industry leaders to
                   start your own path to success
                    with the strongest foundation.
                    </p>
                    <a href="/docentes" class="team-btn">Meet your<br>future instructors</a>
            </div>
            <div class="team-image">
                <img src="/assets/images/equipo-docente.webp" alt="Equipo docente de Implantex Academy">
            </div>
        </div>
    </section>

    <!-- CURSOS DE IMPLANTOLOGÍA -->
    <section class="courses">
        <div class="courses-bg"></div>
        <div class="courses-container">
            <!-- Columna izquierda -->
            <div class="courses-left">
                <h2 class="courses-title">Implantology Courses
                <div class="courses-image-1">
                    <img src="/assets/images/curso-implantologia-1.webp" alt="Curso de implantología">
                </div>
                <ul class="courses-list">
                    <li>
                        <span>Place 20 implants and assist in the placement of another 20, in all areas of the mouth</span>
                        <img src="/assets/images/flecha-azulclaro-rellena.svg" alt="" class="courses-list-arrow">
                    </li>
                    <li>
                        <span>Learn how to diagnose, plan, and treat all types of patients</span>
                        <img src="/assets/images/flecha-azulclaro-rellena.svg" alt="" class="courses-list-arrow">
                    </li>
                    <li>
                        <span>Work with patients with single, partial, and total edentulism</span>
                        <img src="/assets/images/flecha-azulclaro-rellena.svg" alt="" class="courses-list-arrow">
                    </li>
                    <li>
                        <span>We train you in cases with different degrees of bone resorption and varying <br>levels of difficulty</span>
                        <img src="/assets/images/flecha-azulclaro-rellena.svg" alt="" class="courses-list-arrow">
                    </li>

                </ul>
            </div>
            <!-- Columna derecha -->
            <div class="courses-right">
                <div class="courses-text-block">
                    <p class="courses-text">
                        You will attend <strong>highly practical courses</strong> where you will learn to diagnose, plan, and treat implantology and oral surgery cases of varying levels of complexity.
                    </p>
                    <p class="courses-text">
                        You will gain <strong>confidence and the ability to independently solve</strong> all types of cases in your clinic.
                    </p>
                </div>
                <div class="courses-image-2">
                    <img src="/assets/images/curso-implantologia-2.webp" alt="Práctica de implantología">
                </div>
                <a href="/contacto" class="courses-btn">More information</a>
            </div>
        </div>
    </section>


    <!-- NO PIERDAS TU TIEMPO -->
    <section class="no-time">
        <div class="no-time-container">
            <div class="no-time-arrow">
                <img src="/assets/images/flecha-azul-claro.svg" alt="" class="no-time-arrow-filled">
                <img src="/assets/images/flecha-azul-claro.svg" alt="" class="no-time-arrow-outline">
            </div>
            <p class="no-time-text">
                <strong>Don’t waste your time</strong><br>
                on the many theoretical courses<br>
                in implantology or oral <br>
                surgery that are offered,<br>
                where you don’t place<br>
                a single implant
            </p>
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
</main>


<!-- YouTube IFrame API -->
<script>
// Configuración del video
const heroVideoConfig = {
    videoId: 'ZvTQKws9JM0',
    startSeconds: 0,
    endSeconds: 0 // 0 = hasta el final
};

// Cargar la API de YouTube
let tag = document.createElement('script');
tag.src = "https://www.youtube.com/iframe_api";
let firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

let heroPlayer;

function onYouTubeIframeAPIReady() {
    // Detectar si es dispositivo móvil
    const isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
    
    // En móviles iOS, el autoplay está muy restringido, mostrar fallback
    const isIOS = /iPad|iPhone|iPod/.test(navigator.userAgent);
    
    if (isIOS) {
        // Mantener imagen de fallback en iOS
        document.querySelector('.hero-bg-fallback').style.display = 'block';
        return;
    }
    
    heroPlayer = new YT.Player('hero-video-player', {
        videoId: heroVideoConfig.videoId,
        playerVars: {
            'autoplay': 1,
            'mute': 1,
            'controls': 0,
            'showinfo': 0,
            'rel': 0,
            'loop': 1,
            'playlist': heroVideoConfig.videoId, // Necesario para loop
            'playsinline': 1, // Importante para móviles
            'disablekb': 1,
            'modestbranding': 1,
            'iv_load_policy': 3, // Sin anotaciones
            'fs': 0,
            'start': heroVideoConfig.startSeconds || 0
        },
        events: {
            'onReady': onPlayerReady,
            'onStateChange': onPlayerStateChange,
            'onError': onPlayerError
        }
    });
}

function onPlayerReady(event) {
    event.target.mute(); // Asegurar silencio
    event.target.playVideo();
    
    // Ocultar fallback cuando el video esté listo
    setTimeout(function() {
        const fallback = document.querySelector('.hero-bg-fallback');
        const videoContainer = document.getElementById('hero-video-container');
        
        if (fallback && videoContainer) {
            fallback.style.opacity = '0';
            videoContainer.classList.add('video-ready');
            
            setTimeout(function() {
                fallback.style.display = 'none';
            }, 500);
        }
    }, 1000);
}

function onPlayerStateChange(event) {
    // Si el video termina, reiniciar (backup del loop)
    if (event.data === YT.PlayerState.ENDED) {
        event.target.playVideo();
    }
    
    // Si el video se pausa por alguna razón, intentar reproducir
    if (event.data === YT.PlayerState.PAUSED) {
        event.target.playVideo();
    }
}

function onPlayerError(event) {
    // Si hay error, mostrar imagen de fallback
    console.log('Error en video de YouTube:', event.data);
    const fallback = document.querySelector('.hero-bg-fallback');
    if (fallback) {
        fallback.style.display = 'block';
        fallback.style.opacity = '1';
    }
}

// Verificar visibilidad para pausar/reanudar (ahorro de recursos)
document.addEventListener('visibilitychange', function() {
    if (heroPlayer && heroPlayer.getPlayerState) {
        if (document.hidden) {
            heroPlayer.pauseVideo();
        } else {
            heroPlayer.playVideo();
        }
    }
});
</script>