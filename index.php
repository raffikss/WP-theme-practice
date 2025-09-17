
<?php get_header(); ?>

<?php get_template_part('hero_section'); ?>
<section class="bg-gray-50 py-12">
  <div class="max-w-4xl mx-auto text-center px-4 sm:px-6">
    <h2 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-4">About the site</h2>
    <p class="text-gray-600 mb-4">Simple site with bunch of features mashed in together, to see what works out the best!</p>
    <div class="text-left inline-block mx-auto">
      <span class="font-semibold">Things to do better:</span>
      <ul class="list-disc list-inside text-gray-700 text-sm sm:text-base">
        <li>Make the hero slider work properly</li>
        <li>Add more styling to the theme</li>
        <li>Make the sidebar dynamic</li>
        <li>Add more footer widgets</li>
        <li>Optimize for mobile</li>
      </ul>
    </div>
  </div>
</section>
<section class="projects-section py-8">
    <div class="container mx-auto px-4">
        <h2 class="text-xl sm:text-2xl font-bold mb-6 text-center">Recent Projects</h2>
        <div class="projects-grid grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            <?php
            $projects = new WP_Query(array(
                'post_type'      => 'projects',
                'posts_per_page' => 3,
            ));

            if ($projects->have_posts()) :
                while ($projects->have_posts()) : $projects->the_post(); ?>
                    <div class="project-card bg-white rounded-lg shadow p-4 flex flex-col items-center">
                        <a href="<?php the_permalink(); ?>" class="w-full flex flex-col items-center">
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="mb-2 w-full flex justify-center">
                                    <?php the_post_thumbnail('medium', ['class' => 'rounded-md w-full h-auto object-cover']); ?>
                                </div>
                            <?php endif; ?>
                            <h3 class="text-lg font-semibold text-gray-800 text-center"><?php the_title(); ?></h3>
                        </a>
                    </div>
            <?php endwhile;
                wp_reset_postdata();
            endif; ?>
        </div>
    </div>
</section>

<div id="content" class="px-4 max-w-3xl mx-auto py-8">
    <?php
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
    ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class('mb-8 bg-white rounded-lg shadow p-6'); ?>>
            <h2 class="text-xl font-bold mb-2"><a href="<?php the_permalink(); ?>" class="text-blue-700 hover:underline"><?php the_title(); ?></a></h2>
            <div class="prose max-w-none"><?php the_content(); ?></div>
        </article>
    <?php
        endwhile;
    else :
        echo '<p class="text-center text-gray-500">No posts found!</p>';
    endif;
    ?>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>