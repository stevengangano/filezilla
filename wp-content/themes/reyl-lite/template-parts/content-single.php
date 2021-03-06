<?php
/**
 * Template part for displaying single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Reyl Lite
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
		<?php the_title( '<h1 class="post-title">', '</h1>' ); ?>
		<?php if ( 'post' === get_post_type() ) : ?>
			<div class="metadata">
	            <?php reyl_lite_metadata(); ?>
	            <div class="clearfix"></div>
	        </div><!-- /metadata -->
	    <?php endif; ?>
	</header><!-- .entry-header -->

	<?php if ( has_post_thumbnail() ) : ?>
		<div class="post-image">
                <?php the_post_thumbnail( 'reyl_lite_post' ); ?>
        </div><!-- /post-image -->
    <?php endif; ?>

    <div class="post-content">

    	<div class="entry-content">
			<?php the_content(); ?>
			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'reyl-lite' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->

		<div class="clearfix"></div>

		
	    
	</div><!-- /post_content -->

</article><!-- #post-## -->

