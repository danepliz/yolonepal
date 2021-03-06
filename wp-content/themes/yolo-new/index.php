<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Yolonepal
 * @since Yolonepal
 */

get_header();  ?>

<div id="slider-wrap" class="wbws"><img src="./wp-content/themes/yolo/images/yolo/slider.jpg" width="990" height="400" /></div><!-- end of slider-wrap -->

<div id="content-wrapper">
	
	<div id="container">
	
		
		
		<div id="content">
		
			<div id="left-content">
				
					<div id="primary" class="content-area">
						<div id="content" class="site-content" role="main">
						<?php if ( have_posts() ) : ?>
				
							<?php // The loop  ?>
							<?php while ( have_posts() ) : the_post(); ?>
								<?php get_template_part( 'content', get_post_format() ); ?>
							<?php endwhile; ?>
				
							<?php twentythirteen_paging_nav(); ?>
				
						<?php else : ?>
							<?php get_template_part( 'content', 'none' ); ?>
						<?php endif; ?>
				
						</div><!-- #content -->
					</div><!-- #primary -->
				
			</div><!-- left-content -->
		
			<?php get_sidebar() ?>
		
		</div><!-- content -->
			
	</div><!-- end container -->
</div><!-- content-wrapper -->

	


<?php get_footer(); ?>
