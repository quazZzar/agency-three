<?php get_header(); ?>
	<div class="about-page-content">
		<div class="container">
			<div class="row">
				<div class="col-md-<?php echo is_active_sidebar( 'main-sidebar' ) ? '8' : '12'; ?>">
					<?php if(have_posts()):
						while(have_posts()) : the_post(); ?> 
							<article id="post-<?php the_ID(); ?>" <?php post_class('archive-single single-post'); ?>>
		
								<h1 class="archive-post-title"><?php the_title(); ?></h1>
								
								<?php if(has_post_thumbnail()) : ?>
									<img src="<?php the_post_thumbnail_url('archive_thumbnail'); ?>">
								<?php endif; ?>
								<div class="archive-post-excerpt">
									<?php the_content(); ?>
								</div>
							</article>	
						<?php endwhile;
					endif; ?>
				</div>
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
<?php get_footer(); ?>