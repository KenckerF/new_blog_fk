<?php get_header(); ?>

    <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

        <article class="post">
            <?php the_post_thumbnail(); ?>

            <h1><?php the_title(); ?></h1>

            <div class="post__meta">
                <?php echo get_avatar( get_the_author_meta( 'ID' ), 40 ); ?>
                <p>
                    Publié le <?php the_date(); ?>
                    par <?php the_author(); ?>
                    Dans la catégorie <?php the_category(); ?>
                    Avec les étiquettes <?php the_tags(); ?>
                </p>
            </div>

            <div class="post__content">
                <?php the_content(); ?>
            </div>

            <?php if( has_category( 'jeux-video' ) ): ?>

                <div class="review">
                    <div class="review__score">Note : <?php the_field( 'note' ); ?> / 10</div>

                    <div class="review__cols">
                        <div class="review__pros">Les plus : <?php the_field( 'les_plus' ); ?></div>
                        <div class="review__cons">Les moins : <?php the_field( 'les_moins' ); ?></div>
                    </div>

                    <div class="review__date">Sortie le <?php the_field( 'date_de_sortie' ); ?></div>

                    <?php
                    if( get_field( 'pochette' ) ):
                        $picture = get_field( 'pochette' );
                        //var_dump( $picture );
                        ?>
                        <div class="review__picture">
                            <img
                                    src="<?php echo $picture['sizes']['post-thumbnail']; ?>"
                                    alt="Pochette de <?php echo $picture['title']; ?>">
                        </div>
                    <?php endif; ?>
                </div>

            <?php endif; ?>
        </article>

    <?php endwhile; endif; ?>

<?php get_footer(); ?>