<?php get_header(); ?>

<main class="content">
    <section class="blog">
        <h2>Blog</h2>

        <?php get_template_part('includes/section', 'content') ?>

        <?php //previous_posts_link(); ?>
        <?php //next_posts_link(); ?>
    </section>
</main>
 
<?php get_footer(); ?>