<body>
    <div id="content">
        <?php
        if ( have_posts() ) :
            while ( have_posts() ) :
                the_post();
        ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <?php the_content(); ?>
                </article>
        <?php
            endwhile;
        else :
            echo '<p>No posts found!</p>';
        endif;
        ?>
    </div>
     <div class="footer-widget-area">
                <?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
                    <?php dynamic_sidebar( 'footer-3' ); ?>
                <?php else : ?>
                    <h4>Follow Us</h4>
                    <ul class="social-links">
                        <li><a href="#" target=" ">Facebook</a></li>
                        <li><a href="#" target=" ">Twitter</a></li>
                        <li><a href="#" target=" ">Instagram</a></li>
                    </ul>
                <?php endif; ?>
            </div>
            <div class="w-full flex justify-center">
    <div class="site-copyright text-center w-full py-4 text-gray-500">
        <p>&copy; <?php echo date("Y"); ?> <?php bloginfo( 'name'
    ); ?>. All rights reserved.</p>
    <?php wp_footer(); ?>
</body>

</html>
