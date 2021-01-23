<?php if (have_posts()) : ?>
    <?php while(have_posts()) : ?>
        <h2><?php the_title(); ?></h2>
        
        <?php the_post(); ?>
        <?php the_excerpt(); ?>
        <a href="<?php the_permalink(); ?>">Read More</a>
    <?php endwhile; ?>
<?php endif; ?>