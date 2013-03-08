<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div id="span8">
            <?php
                if(have_posts()):
                    while(have_posts()):
                        the_post();
                        get_template_part('content', get_post_format());
                    endwhile;
                endif;
            ?>
        </div>

        <div class="span4">
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>