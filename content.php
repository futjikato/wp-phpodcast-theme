<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header>
        <h2><?php the_title(); ?></h2>
    </header>

    <?php the_content(); ?>

    <footer class="span7">
        <p>
            <em class="text-right muted">
                Veröffentlicht von <?php the_author(); ?>
                am <?php the_time(get_option('date_format')); ?>
                um <?php the_time(get_option('time_format')); ?>
            </em>
        </p>
    </footer>

    <hr class="span7" />
</article>