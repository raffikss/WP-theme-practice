<?php if ( function_exists( 'wp_enqueue_block_template_skip_link' ) ) wp_enqueue_block_template_skip_link(); ?>
<header class="w-full flex flex-col items-center justify-center py-6 bg-white shadow">
    <h1 class="text-2xl font-bold mb-1">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="text-gray-900 hover:text-blue-700">
            <?php bloginfo( 'name' ); ?>
        </a>
    </h1>
    <p class="text-gray-600 mb-4"><?php bloginfo( 'description' ); ?></p>

    <nav class="main-navigation w-full flex justify-center">
    <?php
    wp_nav_menu( array(
        'theme_location' => 'primary',
        'menu_class' => 'flex justify-center space-x-4 text-base font-medium p-0 m-0 list-none',
        'container' => false,
    ) );
        ?>
    </nav>
</header>