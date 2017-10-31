<?php get_header(); ?>
	<section class="index-section-one">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center section1-title">
					<h2 class="title"><?php echo _go('section1_title') ? _go('section1_title') : "American Demo Financial"; ?></h2>
				</div>
			</div>		
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center">
					<div class="embed-responsive embed-responsive-16by9" style="">
						<iframe class="embed-responsive-item" src="<?php echo _go('section1_video_link') ? _go('section1_video_link') : "https://www.youtube.com/embed/ABJN9eqIRx8?feature=oembed"; ?>"  frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen="" ></iframe>
					</div>
				</div>
			</div>		
		</div>
	</section>
	<section class="index-section-two" id="specialties">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center section2">
					<h2 class="title"><?php echo _go('section2_title') ? _go('section2_title') : "Overview of Services"; ?></h2>
					<span class="highlight" ><?php echo _go('section2_subtitle') ? _go('section2_subtitle') : "At American Demo Financial we connect you with professionals providing the following services:"; ?></span>
				</div>
			</div>	
			<?php if(_go('section2_shortcode')) : ?>		
				<div class="row">
					<div class="col-md-12">
						<?php echo do_shortcode(_go('section2_shortcode')); ?>
					</div>
				</div>
			<?php endif; ?>
		</div>
	</section>
	<div class="container-fluid no-padding">
		<div class="news-section" <?php echo _go('section3_bgimg') ? 'style="background-image: url('. _go('section3_bgimg').');"' : ''; ?>>
			<div class="row">
				<div class="col-md-12 text-center news-intro" <?php echo _go('section3_ttlbgcolor') ? 'style="background-color: '. _go('section3_ttlbgcolor').';"' : ''; ?>>
					<h2 class="title" <?php echo _go('section3_ttlcolor') ? 'style="color: '. _go('section3_ttlcolor').';"' : ''; ?>><?php echo _go('section3_title') ? _go('section3_title') : "Financial News"; ?></h2>
					<span class="highlight" <?php echo _go('section3_ttlcolor') ? 'style="color: '. _go('section3_ttlcolor').';"' : ''; ?>><?php echo _go('section3_subtitle') ? _go('section3_subtitle') : "It is important to feel you have control over your future. We offer our experience and knowledge to help you design your own strategy for financial independence."; ?></span>
				</div>
			</div>
			<div class="row" style="margin-top: 60px;">
				<?php $articles_args = array(
					'post_type' => 'article',
					'posts_per_page' => 2,
					'post_status' => 'publish'
				);
				if(_go('news_items_nr')) $articles_args['posts_per_page'] = _go('news_items_nr');
				$articles_qwery = new WP_Query($articles_args); 
				$i = 1;
				if($articles_qwery->have_posts()) :
					while($articles_qwery->have_posts()) : $articles_qwery->the_post(); ?>
						<div class="col-md-4 <?php echo $i % 2 == 1 ? 'col-md-offset-2' : ''; ?>">
							<div class="news-item">
								<h4 class="news-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
								<p class="news-text"><?php echo get_the_excerpt(); ?></p>	
								<a href="<?php the_permalink(); ?>"><span class="read-more">Read more</span></a>						
							</div>
						</div>
					<?php $i++; endwhile;
				endif; 
				wp_reset_query(); ?>
			</div>
			<div class="row" style="margin-top:60px;">
				<div class="col-md-12 text-center">
					<a href="<?php echo home_url('/article'); ?>" class="read-more-button">Read More</a>
				</div>
			</div>
			<br /><br />
			<br /><br />
		</div>
		
		<div class="row team-titles">
			<div class="col-md-12 text-center">
				<h2 class="title"><?php echo _go('section4_title') ? _go('section4_title') : "Our Team"; ?></h2>
				<p class="team-desc"><?php echo _go('section4_subtitle') ? _go('section4_subtitle') : "The team at this Demo Agency knows how important it is for you to receive helpful information. Our team is highly experienced, respectful and understands your need for honesty and transparency."; ?>
				</p>
			</div>
		</div>
		<div class="row team-members">
			<div class="col-md-offset-3 col-md-6">
				<?php $team_args = array(
					'post_type' => 'staff',
					'posts_per_page' => -1,
					'post_status' => 'publish'
				);
				$team_query = new WP_Query($team_args);
				if($team_query->have_posts()) : ?>
					<div class="peeps row">
						<?php while($team_query->have_posts()) : $team_query->the_post();
						$staff_options = get_post_meta(get_the_ID(), '_staff_options', true); ?>
							<div class="folks col-md-6">
								<img class="wp-post-image" src="<?php the_post_thumbnail_url( 'staff-single' ); ?>" />
								<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
								<span class="work_position read-more"><?php echo @$staff_options['staff_position'] ? @$staff_options['staff_position'] : ''; ?></span>
							</div>
						<?php endwhile;  ?>
					</div>
				<?php endif; ?>

			</div>
			<div class="row">
				<div class="col-md-12 text-center">
					<a href="<?php echo _go('section4_btn_link') ? _go('section4_btn_link') : '/about-us/'; ?>" class="read-more-button"><?php echo _go('section4_btn_title') ? _go('section4_btn_title') : "About Us"; ?></a>
				</div>
			</div>
		</div>
		<div class="contact-section" <?php echo _go('section5_bgimg') ? 'style="background-image: url('. _go('section5_bgimg').');"' : ''; ?>>
			<div class="row">
				<div class="col-md-12 text-center">
					<h2 class="title"><?php echo _go('section5_title') ? _go('section5_title') : "We're standing by, ready to assist you."; ?></h2>
					<span class="highlight"><?php echo _go('section5_subtitle') ? _go('section5_subtitle') : "If you would like to learn more about us or would like to schedule a complimentary, no-obligation consultation, please contact us today."; ?></span>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center">
					<a href="<?php echo _go('section5_btn_link') ? _go('section5_btn_link') : '/contact-us/'; ?>" class="contact-us-button"><?php echo _go('section5_btn_title') ? _go('section5_btn_title') : "Contact Us"; ?></a>
				</div>
			</div>
		</div>
	</div>
	<div style="padding: 30px;background-color: #f2f2f2 !important;">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center" style="margin-top:30px;">
					<h2 class="title"><?php echo _go('section6_title') ? _go('section6_title') : "Upcoming Events"; ?></h2>
					<p class="team-desc"><?php echo _go('section6_subtitle') ? _go('section6_subtitle') : "Are you prepared to avoid the Financial Challenges of Retirement? Join us for a complimentary gourmet dinner and presentation."; ?>
					</p>
				</div>
			</div>
			<div class="row" style="margin-top:30px;">
				<?php $events_qwery = new WP_Query(
					array(
						'post_type' => 'events',
						'posts_per_page' => 3,
						'post_status' => 'publish'
					)
				); 
				if($events_qwery->have_posts()): 
					while($events_qwery->have_posts()) : $events_qwery->the_post(); 
						$event_meta = get_post_meta(get_the_ID(), '_events_options', true); ?>
						<div class="col-md-4">
							<div class="news-item">
								<p class="news-text"><?php echo $event_meta['event_datetime']; ?></p>
								<h4 class="news-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
								<p class="news-text"><?php echo get_the_excerpt(); ?></p>	
								<a href="<?php the_permalink(); ?>" class=""><span class="read-more">Read more</span></a>					
							</div>
						</div>
					<?php endwhile;
				endif;
				wp_reset_query(); ?>
				
			</div>
			<div class="row">
				<div class="col-md-12 text-center">
					<a href="<?php echo home_url('/events'); ?>" class="contact-us-button">View More</a>
				</div>
			</div>
		</div>		
	</div>
<?php get_footer();?>