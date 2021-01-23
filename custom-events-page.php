<?php /* Template Name: Custom Events Page */ ?>
<?php get_header(); ?>

<main class="content">
    <section class="all-events">
        <h2><?php the_title() ?></h2>

        <h3 class="section-subtitle all-events__subtitle">Siguientes Eventos</h3>
        <div class="events__grid upcoming-events"></div>

        <h3 class="section-subtitle all-events__subtitle">Eventos Pasados</h3>
        <div class="events__grid past-events"></div>
    </section>
</main>

<?php get_footer(); ?>