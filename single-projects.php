<?php get_header(); ?>
<div class="container project-single">
    <?php
    while (have_posts()) : the_post(); ?>
        <h1><?php the_title(); ?></h1>
        <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail('large'); ?>
        <?php endif; ?>
        <div class="project-content">
            <?php the_content(); ?>
        </div>
        <?php
        $project_url = get_post_meta(get_the_ID(), '_project_url', true);
        if ($project_url) : ?>
            <p><a href="<?php echo esc_url($project_url); ?>" target="_blank">Visit Project</a></p>
        <?php endif; ?>
    <?php endwhile; ?>
</div>
<?php get_footer(); ?>
