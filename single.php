<?php get_header(); ?>

<main class="content">
    <section class="blog">
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
    </section>
</main>

<?php get_footer(); ?>