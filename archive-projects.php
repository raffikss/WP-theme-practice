<?php get_header(); ?>
<section class="bg-gradient-to-br from-teal-50 to-green-100 py-20 animate-slide-up">
  <div class="container mx-auto px-4 sm:px-6 lg:px-8">
    <h1 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-8 text-center tracking-tight">All Projects</h1>
    <div class="projects-grid grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
      <?php if (have_posts()) :
        while (have_posts()) : the_post(); ?>
          <div class="project-card bg-white rounded-2xl shadow-xl p-6 flex flex-col items-center transform hover:-translate-y-2 hover:shadow-2xl transition-all duration-300">
            <a href="<?php the_permalink(); ?>" class="w-full flex flex-col items-center group">
              <?php if (has_post_thumbnail()) : ?>
                <div class="mb-4 w-full flex justify-center overflow-hidden rounded-lg">
                  <?php the_post_thumbnail('medium', ['class' => 'rounded-lg w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300']); ?>
                </div>
              <?php endif; ?>
              <h3 class="text-xl font-semibold text-gray-800 text-center group-hover:text-teal-600 transition-colors duration-200"><?php the_title(); ?></h3>
            </a>
          </div>
        <?php endwhile;
      else : ?>
        <p class="text-center text-gray-500 text-lg font-medium col-span-full">No projects found!</p>
      <?php endif; ?>
    </div>
    <?php the_posts_pagination(); ?>
  </div>
</section>
<?php get_footer(); ?>