<?php get_header(); ?>
<div class="container projects-archive">
    <h1>All Projects</h1>
    <div class="projects-grid">
        <?php if (have_posts()) :
            while (have_posts()) : the_post(); ?>
                <div class="project-card">
                    <a href="<?php the_permalink(); ?>">
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('medium'); ?>
                        <?php endif; ?>
                        <h3><?php the_title(); ?></h3>
                    </a>
                </div>
        <?php endwhile;
        endif; ?>
    </div>
</div>
<?php get_footer(); ?>
