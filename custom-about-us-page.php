<?php /* Template Name: Custom About Us Page */ ?>
<?php get_header(); ?>

<main class="content">
    <section class="section about-us">
        <h2 class="section-title about-us__title"><?php the_title(); ?></h2>

        <div class="section-img-wrapper">
            <?php the_post_thumbnail(); ?>
        </div>
        
        <div class="section-text">
            <?php the_content(); ?>
            <?php the_content(); ?>
            <?php the_content(); ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>