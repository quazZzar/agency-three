<?php get_header(); 
	if(have_posts()) :
		while(have_posts()) : the_post(); 
			$services_meta = get_post_meta(get_the_ID(), '_services_options', true); ?>
			<div class="container-fluid no-padding">
				<section class="single-page-header" <?php echo @$services_meta['service_image'] ?  ' style="background-image: url('.@$services_meta['service_image'].');" ' : ''; ?>>
					<div class="container">
						<div class="row">
							<div class="col-md-6">
								<div class="page-meta">
									<h1 class="page-title"><?php the_title(); ?></h1>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>

			<div id="subPageCover">
				<div class="container">
					<div class="row">
						<div class="col-md-<?php echo is_active_sidebar( 'services-sidebar' ) ? '8' : '12'; ?>">
							<div class="service_body">
								<div class="service_content_box">
									<?php the_content(); ?>
								</div>
							</div>
						</div>
						<?php if (is_active_sidebar( 'services-sidebar' )): ?>
							<div class="col-md-4">
								<div id="subPageRight" class="event_has_sidebar">
									<div id="offerSubPage">
										<?php dynamic_sidebar('services-sidebar'); ?>
									</div>
								</div>
							</div>
						<?php endif;  ?>
					</div>
				</div>
			</div>
		<?php endwhile;
	endif; ?>
<?php get_footer();