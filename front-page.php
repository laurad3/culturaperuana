<?php get_header(); ?>

<main class="content">
    <section class="hero">
        <div class="gallery">
            <div class="gallery__slider js-gallery">
                <div class="gallery__item">
                    <img src="<?= get_template_directory_uri() . '/frontend/images/gallery/gallery_1.jpg'; ?>" class="gallery__image" alt="gallery_1">
                </div>

                <div class="gallery__item">
                    <img src="<?= get_template_directory_uri() . '/frontend/images/gallery/gallery_2.jpg'; ?>" class="gallery__image" alt="gallery_2">
                </div>

                <div class="gallery__item">
                    <img src="<?= get_template_directory_uri() . '/frontend/images/gallery/gallery_3.jpg'; ?>" class="gallery__image" alt="gallery_3">
                </div>
            </div>

            <div class="gallery__arrows">
                <div class="arrow arrow-left js-arrow-left"><i class="fas fa fa-arrow-left arrow-icon"></i></div>
                <div class="arrow arrow-right js-arrow-right"><i class="fas fa fa-arrow-right arrow-icon"></i></div>
            </div>
        </div>
    </section>
    
    <section class="events">
        <h2 class="section-title events__title">Eventos</h2>
        <div class="events__grid latest-events"></div>
    </section>

    <section class="partners">
        <h2 class="section-title partners__title">Partner</h2>
        <div class="partners__grid">
            <div class="partner-logo-wrapper">
                <a href="https://gz-zh.ch/" target="_blank">
                    <img 
                        src="<?= get_template_directory_uri() . '/frontend/images/partners/gz-logo.svg'; ?>" 
                        alt="Zürcher Gemeinschaftszentren" 
                        class="partner-logo">
                </a>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>