<?php 
/**
 * Template Name: Services Page
 *
 * @package WordPress
 * @subpackage Agency Themes
 * @
 */ 
get_header(); 
$page_meta = get_post_meta(get_the_ID(), '_page_metas', true); ?>
	<div class="container-fluid no-padding">
		<section class="single-page-header" <?php echo has_post_thumbnail(get_the_ID()) ?  ' style="background-image: url('.get_the_post_thumbnail_url( get_the_ID()).');" ' : ''; ?>>
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="page-meta">
							<h1 class="page-title"><?php the_title(); ?></h1>
							<div class="page-information">
								<?php echo @$page_meta['page_information']; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
	<div id="subPageCover" <?php post_class('services-page-template'); ?>>
		<div class="container">
			<div class="row">
				<?php $services_args = array(
					'post_type' => 'services',
					'post_status' => 'publish',
					'posts_per_page' => cs_get_option('services_number') ? cs_get_option('services_number') : 9
				);
				$services_query = new WP_Query($services_args);

				if($services_query->have_posts()) :
					$i = 1; 
					while($services_query->have_posts()) : $services_query->the_post(); 
						if($services_query->post_count < 9 && $i >= 7 || $services_query->post_count < 6 && $i >= 4 ) break; ?>
						<div class="col-sm-4">
							<a href="<?php the_permalink(); ?>" class="caption_link">
								<div class="service_item_archive">
									<img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'single-service'); ?>" alt="service">
									<div class="service_caption_title" style="<?php if(cs_get_option('services_title_color')) echo 'color: '.cs_get_option('services_title_color').'; '; if(cs_get_option('services_background_color')) echo 'background-color: '.cs_get_option('services_background_color').'; opacity: initial;';  ?>"><?php the_title(); ?></div>	
								</div>
							</a>
						</div>
					<?php $i++; endwhile; 
				endif; ?>
			</div>
		</div>
	</div>
<?php get_footer(); ?>