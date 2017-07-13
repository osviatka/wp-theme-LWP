<?php

get_header(); ?>

    <!-- site-content -->
    <div class="site-content clearfix">


            <?php if (have_posts()) :
                while (have_posts()) : the_post();

                    get_template_part('content', 'page');

                endwhile;

            else :
                echo '<p>No content found</p>';

            endif;
            ?>

                <h1>Blog Posts About Us</h1>
        <?php

        $aboutPosts = new WP_Query(array(
            'category_name' => 'about',
            'posts_per_page' => 3
        ));

        if (@$aboutPosts->have_posts()):
            while (@$aboutPosts->have_posts()):
                ?> <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li> <?php
        endif;

        ?>




</div><!-- /site-content -->

<?php get_footer();

?>