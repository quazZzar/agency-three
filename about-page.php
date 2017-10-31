<?php 
/**
 * Template Name: About Page
 *
 * @package WordPress
 * @subpackage Agency Themes
 * @
 */ 
get_header(); ?>
	<div class="container-fluid no-padding">
		<section class="about-page-header">
			<div class="container">
				<h1 class="about-page-title"><?php the_title(); ?></h1>
			</div>
		</section>
	</div>
	<div class="about-page-content">
		<div class="container">
			<div class="row">
				<div class="col-md-<?php echo is_active_sidebar( 'about-page-sidebar' ) ? '8' : '12'; ?>">
					<?php while(have_posts()) : the_post(); 
						the_content(); 
					endwhile;?>
				</div>
				<?php get_sidebar('about'); ?>
			</div>
		</div>
	</div>
<?php get_footer(); ?>