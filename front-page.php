<?php get_header(); ?>

<main class="content">
    <section class="section hero">
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

                <div class="gallery__item">
                    <img src="<?= get_template_directory_uri() . '/frontend/images/gallery/gallery_4.jpg'; ?>" class="gallery__image" alt="gallery_4">
                </div>

                <div class="gallery__item">
                    <img src="<?= get_template_directory_uri() . '/frontend/images/gallery/gallery_5.jpg'; ?>" class="gallery__image" alt="gallery_5">
                </div>

                <div class="gallery__item">
                    <img src="<?= get_template_directory_uri() . '/frontend/images/gallery/gallery_6.jpg'; ?>" class="gallery__image" alt="gallery_6">
                </div>
            </div>

            <div class="gallery__arrows">
                <div class="arrow arrow-left js-arrow-left"><i class="fas fa fa-arrow-left arrow-icon"></i></div>
                <div class="arrow arrow-right js-arrow-right"><i class="fas fa fa-arrow-right arrow-icon"></i></div>
            </div>
        </div>
    </section>
    
    <section class="section events">
        <h2 class="section-title events__title">Eventos</h2>
        <div class="grid events__grid latest-events">
            <div class="events__card">
                <div class="events__card-info">
                    <div class="event-date">11.02</div>
                    <div class="event-name">"El cóndor pasa, más de 100 años en la memoria colectiva peruana"</div>
                </div>
                <div class="events__card-image">
                    <img src="" alt="" target="_blank">
                    <a href=""><i class="fa fas fa-arrow-right arrow-icon"></i></a>
                </div>
            </div>

            <div class="events__card">
                <div class="events__card-info">
                    <div class="event-date">11.02</div>
                    <div class="event-name">"El cóndor pasa, más de 100 años en la memoria colectiva peruana"</div>
                </div>
                <div class="events__card-image">
                    <img src="" alt="" target="_blank">
                    <a href=""><i class="fa fas fa-arrow-right arrow-icon"></i></a>
                </div>
            </div>

            <div class="events__card">
                <div class="events__card-info">
                    <div class="event-date">11.02</div>
                    <div class="event-name">"El cóndor pasa, más de 100 años en la memoria colectiva peruana"</div>
                </div>
                <div class="events__card-image">
                    <img src="" alt="" target="_blank">
                    <a href=""><i class="fa fas fa-arrow-right arrow-icon"></i></a>
                </div>
            </div>
        </div>
    </section>

    <section class="section partners">
        <h2 class="section-title partners__title">Partner</h2>
        <div class="partners__list">
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