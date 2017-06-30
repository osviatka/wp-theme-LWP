<?php

get_header(); ?>

    <!-- site-content -->
    <div class="site-content clearfix">

        <h3>Custom HTML Here!</h3>

        <?php if (have_posts()) :
            while (have_posts()) : the_post();

                the_content();

            endwhile;

        else :
            echo '<p>No content found</p>';

        endif; ?>

        <!-- home-columns -->
        <div class="home-columns clearfix">

            <!-- one-half -->
            <div class="one-half">

                <h2>Latest Opinion</h2>

                <?php // opinion posts loop begins here
                $opinionPosts = new WP_Query('cat=4&posts_per_page=2');

                if ($opinionPosts->have_posts()) :

                    while ($opinionPosts->have_posts()) : $opinionPosts->the_post(); ?>
                        <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> <span class="subtle-date"><?php the_time('n/j/Y'); ?></span></h4>

                        <?php the_excerpt(); ?>
                    <?php endwhile;

                else :

                endif;
                wp_reset_postdata(); ?>

           </div><!-- /one - half-->

					<!--one-half-->
            <div class="one-half last">

                <h2> Latest News </h2>

                <?php // news posts loop begins here
                $newsPosts = new WP_Query('cat=5&posts_per_page=2');

                if ($newsPosts->have_posts()) :

                    while ($newsPosts->have_posts()) : $newsPosts->the_post(); ?>
                        <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> <span class="subtle-date"><?php the_time('n/j/Y'); ?></span></h4>

                        <?php the_excerpt(); ?>
                    <?php endwhile;

                else :

                endif;
                wp_reset_postdata();

                ?>

            </div><!-- /one-half -->

        </div><!-- /home-columns -->

    </div><!-- /site-content -->

<?php get_footer();

?>