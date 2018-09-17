<?php
/**
 * @package unite
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header page-header">

		<?php 
                    if ( of_get_option( 'single_post_image', 1 ) == 1 ) :
                        the_post_thumbnail( 'unite-featured', array( 'class' => 'thumbnail' )); 
                    endif;
                  ?>

		<h1 class="entry-title "><?php the_title(); ?></h1>

		<div class="entry-meta">
			<?php unite_posted_on(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'unite' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-meta">
		<?php
			/* show country list */
			$country_list = get_the_term_list( get_the_ID(), 'film_country', '', __( ', ', 'unite' ), $after = '' );
            if ( $country_list ) {
                echo '<i class="fa fa-folder-open-o"></i> ' . $country_list . '. ';
            }

			/* show genre list */
            $genre_list = get_the_term_list( get_the_ID(), 'film_genre', '', __( ', ', 'unite' ), $after = '' );
            if ( $genre_list ) {
                echo '<i class="fa fa-tags"></i> ' . $genre_list . '. ';
            }

            /* show ticket price */
            $ticket_price = get_field('ticket_price');
            if ( $ticket_price ) {
                echo '<i class="fa fa-dollar"></i> <span class="meta-value">' . $ticket_price . '</span>. ';
            }

            /* show release date */
            $release_date = get_field('release_date');
            if ( $release_date ) {
                echo '<i class="fa fa-clock-o"></i> <span class="meta-value">' . $release_date . '</span>. ';
            }

            echo '<i class="fa fa-link"></i> <a href="' . get_permalink() . '" rel="bookmark">permalink</a>.';

			printf(
				$meta_text,
                $country_list,
                $genre_list,
                $ticket_price,
                $release_date,
				get_permalink()
			);
		?>

		<?php edit_post_link( __( 'Edit', 'unite' ), '<i class="fa fa-pencil-square-o"></i><span class="edit-link">', '</span>' ); ?>
		<?php unite_setPostViews(get_the_ID()); ?>
		<hr class="section-divider">
	</footer><!-- .entry-meta -->
</article><!-- #post-## -->
