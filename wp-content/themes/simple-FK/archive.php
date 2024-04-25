<?php get_header(); ?>

    <?php
    if ( is_category() ) {
        $title = "Catégorie : " . single_tag_title( '', false );
    }
    elseif ( is_tag() ) {
        $title = "Étiquette : " . single_tag_title( '', false );
    }
    elseif ( is_search() ) {
        $title = "Vous avez recherché : " . get_search_query();
    }
    else {
        $title = 'Le Blog';
    }
    ?>

    <div class="blog__article">
        <h1><?php echo $title; ?></h1>

        <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

            <article class="post">
                <h2><?php the_title(); ?></h2>

                <?php the_post_thumbnail('large'); ?>

                <p class="post__meta">
                    Publié le <?php the_time( get_option( 'date_format' ) ); ?>
                    par <?php the_author(); ?> • <?php comments_number(); ?>
                </p>

                <?php the_excerpt(); ?>

                <p class="post__continue">
                    <a href="<?php the_permalink(); ?>" class="post__link">Lire la suite</a>
                </p>
            </article>

        <?php endwhile; endif; ?>
    </div>


<?php get_footer(); ?>