<?php 
/**
 * Template Name: Team Page
 *
 * @package WordPress
 * @subpackage Agency Themes
 * @
 */ 
get_header(); ?>
	<div id="subPageCover" <?php post_class('staff-members-template'); ?>>
		<div class="container">
			<div class="row team-members">
				<?php $staff_args = array(
					'post_type' => 'staff',
					'post_status' => 'publish',
					'posts_per_page' => cs_get_option('team_members_number') ? cs_get_option('team_members_number') : 9
				);
				$staff_query = new WP_Query($staff_args);

				if($staff_query->have_posts()) : 
						
					while($staff_query->have_posts()) : $staff_query->the_post(); 
						$staff_options = get_post_meta(get_the_ID(), '_staff_options', true); ?>
							<div class="folks col-md-6">
								<img class="wp-post-image" src="<?php the_post_thumbnail_url( 'staff-single' ); ?>" />
								<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
								<span class="work_position read-more"><?php echo @$staff_options['staff_position'] ? @$staff_options['staff_position'] : ''; ?></span>
							</div>
					<?php endwhile;
				endif; ?>
			</div>
		</div>
	</div>
<?php get_footer(); ?>