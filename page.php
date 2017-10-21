<?php get_header();
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
	<div class="page-content">
		<div class="container">
			<div class="row">
				<div class="col-md-<?php echo is_active_sidebar( 'main-sidebar' ) ? '8' : '12'; ?>">
					<?php while(have_posts()) : the_post();
						the_content(); 
					endwhile;?>
				</div>
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
<?php get_footer(); ?>