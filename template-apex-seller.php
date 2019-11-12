<?php /*
Template Name: Apex Seller
Template Post Type: programs
*/ get_header(); ?>



<main class="apex-section container">
    <div class="wrap">
    	<h1 class="apex-section-title"><?php the_field('main_title'); ?></h1>
		
		<div class="apex-program-content">
			<img class="apex-program-graphic" src="<?php echo bloginfo('template_url'); ?>/img/apex-seller-product-graphic.png" alt="Apex Seller">

			<div class="apex-side-wrap">
				<h1>Apex Seller&#8482;</h1>
				<div class="ratings"><div class="exc-rate star5"></div><a href="<?php echo site_url(); ?>/results" class="see-results">See student results</a></div>
				<span class="last-updated">Last updated: 11/12/2019</span>
				
				<ul>
					<?php if( have_rows('side_features') ): while ( have_rows('side_features') ) : the_row(); ?>
						<li><?php the_sub_field('feature_list_text'); ?></li>
					<?php endwhile; endif; ?>
				</ul>

				<a href="<?php the_field('side_button_link'); ?>" class="button"><?php the_field('side_button_text'); ?></a> 
				<p class="info"><?php the_field('side_footer_text'); ?></p>
			</div>
		</div>

    </div>
</main>




<div class="apex-section apex-graphics">
	<div class="wrap">
		<section class="apex-graphics-icons">
			<figure>
				<div class="apex-icon stage"></div>
				<figcaption><b>Stage:</b>Scaling Up</figcaption>
			</figure>

			<figure>
				<div class="apex-icon objective"></div>
				<figcaption><b>Objective:</b>7&#8209; to 8&#8209;Figure Business</figcaption>
			</figure>

			<figure>
				<div class="apex-icon length"></div>
				<figcaption><b>Length:</b>6 Weeks</figcaption>
			</figure>

			<figure>
				<div class="apex-icon format"></div>
				<figcaption><b>Format:</b>Online</figcaption>
			</figure>

			<figure>
				<div class="apex-icon access"></div>
				<figcaption><b>Access:</b> Lifetime</figcaption>
			</figure>
		</section>
		
		
		<div class="apex-what-who-why">
			<?php if( have_rows('features') ): while ( have_rows('features') ) : the_row(); ?>
				<h5><?php the_sub_field('overview_title'); ?></h5>
				<p><?php the_sub_field('overview_description'); ?></p>
			<?php endwhile; endif; ?>
		</div>

	</div>
</div>



<div class="apex-section complete-connected">
	<div class="wrap">
		<h1 class="apex-section-title withSub">Complete & Connected</h1>
		<p class="apex-section-description"><?php the_field('connected_description'); ?></p>
		
		<section class="complete-connected-icons">
			<figure>
				<div class="imgConnected focus"></div>
				<figcaption><b>Focus</b><?php the_field('focus'); ?></figcaption>
			</figure>
			
			<figure>
				<div class="imgConnected strategy"></div>
				<figcaption><b>Product strategy</b><?php the_field('product_strategy'); ?></figcaption>
			</figure>
			
			<figure>
				<div class="imgConnected chain"></div>
				<figcaption><b>Supply chain</b><?php the_field('supply_chain'); ?></figcaption>
			</figure>
			
			<figure>
				<div class="imgConnected cashflow"></div>
				<figcaption><b>Cash flow</b><?php the_field('cash_flow'); ?></figcaption>
			</figure>
			
			<figure>
				<div class="imgConnected systemdata"></div>
				<figcaption><b>Systems & data</b><?php the_field('systems_data'); ?></figcaption>
			</figure>
			
			<figure>
				<div class="imgConnected advertising"></div>
				<figcaption><b>Paid advertising</b><?php the_field('paid_advertising'); ?></figcaption>
			</figure>
			
			<figure>
				<div class="imgConnected optimization"></div>
				<figcaption><b>Organic optimization</b><?php the_field('organic_optimization'); ?></figcaption>
			</figure>
			
			<figure>
				<div class="imgConnected conversion"></div>
				<figcaption><b>Conversions & AOV</b><?php the_field('conversions_aov'); ?></figcaption>
			</figure>
			
			<figure>
				<div class="imgConnected hiring"></div>
				<figcaption><b>Hiring & managing a team</b><?php the_field('hiring_managing_a_team'); ?></figcaption>
			</figure>
			
			<figure>
				<div class="imgConnected operations"></div>
				<figcaption><b>Operations</b><?php the_field('operations'); ?></figcaption>
			</figure>
			
			<figure>
				<div class="imgConnected automation"></div>
				<figcaption><b>Scaling & automation</b><?php the_field('scaling_automation'); ?></figcaption>
			</figure>
			
			<figure>
				<div class="imgConnected evolution"></div>
				<figcaption><b>Product evolution</b><?php the_field('product_evolution'); ?></figcaption>
			</figure>
		</section>
	</div>
</div>



<div class="apex-section student-results">
	<div class="wrap">
	    <h1 class="apex-section-title withSub">Proven Student Results</h1>
	    <p class="apex-section-description"><?php the_field('student_results_description'); ?></p>
	    <p class="what-they-say">Here is what our students have to say:</p>
	    <div class="results-playlist clear">
			<div class="results-playlist-main"></div>
			<div class="results-playlist-vids">
		
				<?php $args = array( 
					'post_type' => 'results',  
					'orderby'=> 'menu_order',  
					'paged' => $paged
				); 
		
				$temp = $wp_query; 
				$wp_query = null; 
				$wp_query = new WP_Query(); 
				$wp_query->query( $args ); 
		
				if($wp_query->have_posts()) : while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
		
				<a class="res-link" title="<?php the_field('review_name'); ?>"
					data-video='<?php the_field('review_video'); ?>'
					href="<?php the_permalink(); ?>">
					<img src="<?php the_field('review_screenshot'); ?>">
					<div class="res-info">
						<b><?php the_field('review_name'); ?></b>
						<div class="res-level"><?php the_field('review_level'); ?> Figures</div>
						<div class="res-rate"><div class="exc-rate star<?php the_field('review_rating'); ?>"></div></div>
					</div>
				</a>
		
				<?php endwhile; endif; wp_reset_query(); ?>
		
			</div>
		</div>

        <ul class="results-featured">
            <li><div class="imgFeatured ratings"></div></li>
            <li><div class="imgFeatured forbes"></div></li>
            <li><div class="imgFeatured huffpost"></div></li>
            <li><div class="imgFeatured bbc"></div></li>
        </ul>

        <a href="<?php echo site_url(); ?>/results" class="see-reviews">See more of our student success stories</a>

	</div>
</div>



<div class="apex-section course-curriculum">
	<div class="wrap">
	
		<h1 class="apex-section-title withSub">Apex Seller&#8482; Course Curriculum</h1>
		<p class="apex-section-description"><?php the_field('course_curriculum_description'); ?></p>
	
	
	    <div class="curriculum">

	        <span href="#" class="curriculum-toggle">Expand All</span>
	        <?php if( have_rows('overall_stats', 'option') ): while( have_rows('overall_stats','option') ): the_row(); ?>
	            <span class="curTme"><?php the_sub_field('overall_time'); ?></span>
	            <span class="curMod"><?php the_sub_field('all_modules'); ?></span>
			<?php endwhile; endif; ?>

			
			<div class="curriculum-contents">
	
				<?php if( have_rows('modules', 'option') ): while( have_rows('modules','option') ): the_row(); ?>
				
					<div class="curriculum-menu">
						<a href="#"><span class="dashicons"></span> <?php the_sub_field('module_menu'); ?><span class="cur-time"><?php the_sub_field('module_time'); ?></span><span class="cur-modules"><?php the_sub_field('module_count'); ?> Modules</span></a>
						
						<div class="cur-submen">
						<?php if( have_rows('module_submenu') ): while( have_rows('module_submenu') ): the_row(); ?>
							<div class="cur-submen-items">
		
								<?php  if( get_row_layout() == 'sub_menu' ): ?>
									<div class="cur-submen-title"><span class="dashicons cur-vid"></span><?php the_sub_field('module_subitem'); ?><span class="dashicons cur-toggle"></span> <span class="cur-time"><?php the_sub_field('module_subtime'); ?></span></div>
									<div class="cur-submen">
										<?php the_sub_field('module_subcontents'); ?>
									</div>
								<?php elseif( get_row_layout() == 'action_items' ): ?>
									<div class="cur-submen-title"><span class="dashicons cur-action"></span>Action Items<span class="cur-time"><?php the_sub_field('module_action'); ?></span></div>
		
								<?php elseif( get_row_layout() == 'question_menu' ): ?>
									<div class="cur-submen-title"><span class="dashicons cur-question"></span>Questions<span class="cur-time"><?php the_sub_field('module_question'); ?></span></div>
								<?php endif; ?>
		
		
							</div>
						<?php endwhile; endif; ?>
						</div>
					
					</div>
				
				<?php endwhile; endif; ?>
			
			</div>
	       
	    </div>
	</div>
</div>



<div class="apex-section program-components">
	<div class="wrap">
		<h1 class="apex-section-title withSub">Apex Seller&#8482; Program Components</h1>
		<p class="apex-section-description"><?php the_field('components_description'); ?></p>
		
		<section class="component-icons">
			<figure>
				<div class="imgComponents portal"></div>
				<figcaption><b>Online Content Portal</b><?php the_field('online_content_portal'); ?></figcaption>
			</figure>
			
			<figure class="for-mobile">
				<div class="imgComponents documents"></div>
				<figcaption><b>Proprietary Process Documents</b><?php the_field('proprietary_process_documents'); ?></figcaption>
			</figure>

			<figure class="for-desktop">
				<figcaption><b>Proprietary Process Documents</b><?php the_field('proprietary_process_documents'); ?></figcaption>
				<div class="imgComponents documents"></div>
			</figure>
			
			<figure>
				<div class="imgComponents qanda"></div>
				<figcaption><b>Live Q&A Calls</b><?php the_field('live_qa_calls'); ?></figcaption>
			</figure>
			
			<figure class="for-mobile">
				<div class="imgComponents community"></div>
				<figcaption><b>Exclusive Student Community</b><?php the_field('exclusive_student_community'); ?></figcaption>
			</figure>

			<figure class="for-desktop">
				<figcaption><b>Exclusive Student Community</b><?php the_field('exclusive_student_community'); ?></figcaption>
				<div class="imgComponents community"></div>
			</figure>
			
			<figure>
				<div class="imgComponents software"></div>
				<figcaption><b>Private Industrial Grade Software</b><?php the_field('private_industrial_grade_software'); ?></figcaption>
			</figure>
		</section>
		
	</div>
</div>



<div class="apex-section requirements">
	<div class="wrap">
		<h1 class="apex-section-title">Apex Seller&#8482; Entry Requirements</h1>

		<ul>
		
			<li>
				<h5>Program Overview</h5>
				<section class="apex-graphics-icons">
					<figure>
						<div class="apex-icon stage"></div>
						<figcaption><b>Stage:</b>Scaling Up</figcaption>
					</figure>

					<figure>
						<div class="apex-icon objective"></div>
						<figcaption><b>Objective:</b>7- to 8&#8209;Figure Business</figcaption>
					</figure>

					<figure>
						<div class="apex-icon length"></div>
						<figcaption><b>Length:</b>6 Weeks</figcaption>
					</figure>

					<figure>
						<div class="apex-icon format"></div>
						<figcaption><b>Format:</b>Online</figcaption>
					</figure>

					<figure>
						<div class="apex-icon access"></div>
						<figcaption><b>Access:</b> Lifetime</figcaption>
					</figure>
				</section>
			</li>
			
			
			<li>
				<h5>Entry Requirements</h5>
				<?php the_field('entry_requirements'); ?>
			</li>
			
			
			<li>
				<h5>Application Process</h5>
				<?php the_field('application_process'); ?>
				
				<a href="<?php the_field('side_button_link'); ?>" class="button"><?php the_field('side_button_text'); ?></a>
			</li>

		</ul>


	</div>
</div>



<div class="apex-section overview">
	<div class="wrap">
    	<h1 class="apex-section-title"><?php the_field('footer_title'); ?></h1>
    	
    	<div class="apex-program-content">
			<img class="apex-program-graphic" src="<?php echo bloginfo('template_url'); ?>/img/apex-seller-product-graphic.png" alt="Apex Seller">

			<div class="apex-side-wrap">
				<h1>Apex Seller&#8482;</h1>
				<div class="ratings"><div class="exc-rate star5"></div><a href="<?php echo site_url(); ?>/results" class="see-results">See student results</a></div>
				<span class="last-updated">Last updated: 11/12/2019</span>
				
				<ul>
					<?php if( have_rows('side_features') ): while ( have_rows('side_features') ) : the_row(); ?>
						<li><?php the_sub_field('feature_list_text'); ?></li>
					<?php endwhile; endif; ?>
				</ul>

				<p class="info"><?php the_field('side_footer_text'); ?></p>
				
			</div>
		</div>

    </div>
</div>



<div class="apex-section get-started">
	<p>Get started for free</p>
	<a href="<?php the_field('footer_link'); ?>" class="button"><?php the_field('footer_text'); ?></a>
</div>



<?php get_footer(); ?>
