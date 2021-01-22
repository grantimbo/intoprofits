<?php /* Template Name: Home */ get_header(); ?>


<section class="home-feature-graph">
    <div class="v-graph-wrap">
        <video autoplay muted loop>
			<source src="<?php echo get_template_directory_uri(); ?>/videos/graph.mp4" type="video/mp4">
			<source src="<?php echo get_template_directory_uri(); ?>/videos/graph.ogg" type="video/ogg">
		</video>
    </div>
    <div class="v-graph-overlay"></div>
    <div class="wrap">
        <div class="v-graph-content">
        	<p><?php the_field('main_pre_title'); ?></p>
            <h1><?php the_field('main_title'); ?></h1>
        </div>
        <div class="v-graph-button">
            <a href="<?php echo site_url(); ?>/case-study" class="btn-seehow"><span><?php the_field('main_button_text'); ?></span></a>
        </div>
    </div>
</section>



<section class="apex-section pro-grade">
    <div class="wrap">
        <h1 class="apex-section-title withSub"><?php the_field('pro_grade_title'); ?></h1>
        <p class="apex-section-description"><?php the_field('pro_grade_p1'); ?></p>
        <h3>“<?php the_field('pro_grade_qoute'); ?>”</h3>
        <p class="apex-section-description"><?php the_field('pro_grade_p2'); ?></p>
    </div>
</section>



<section class="apex-section complete-connected">
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
</section>



<section class="apex-section student-results">
	<div class="wrap">
	    <h1 class="apex-section-title withSub">Proven Student Results</h1>
	    <p class="apex-section-description"><?php the_field('student_results_description'); ?></p>
	    <p class="what-they-say">Here is what our students have to say:</p>
	    <div class="results-playlist clear">
			<div class="results-playlist-main"></div>
			<div class="results-playlist-vids">
		
				<?php $args = array( 
					'post_type' => 'results',
					'post_status' => 'publish',
					'orderby'=> 'menu_order',
					'posts_per_page' => 30
				); 
		
				$temp = $wp_query; 
				$wp_query = null; 
				$wp_query = new WP_Query(); 
				$wp_query->query( $args ); 
		
				if($wp_query->have_posts()) : while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
		
				<a class="res-link" title="<?php the_field('review_name'); ?>"
					data-video='<?php the_field('review_video'); ?>'
					href="<?php the_permalink(); ?>">
					<img src="<?php the_field('review_screenshot'); ?>" width="500" height="281">
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
</section>



<section class="apex-section cutting-edge-program">
    <div class="wrap">
        <h1 class="apex-section-title withSub">Cutting-Edge Programs</h1>
        <p class="apex-section-description"><?php the_field('programs_description'); ?></p>

        <div class="apex-seller-graphic-home programs-apex-seller-wrap">

            <div class="wrap">
                <img src="<?php echo bloginfo('template_url'); ?>/img/apex-seller-product-graphic.webp" alt="Apex Seller" width="450" height="328">
                <div class="programs-apex-graphic">
                    
					<?php if( have_rows('programs') ): while ( have_rows('programs') ) : the_row(); ?>
						<h1><?php the_sub_field('title'); ?></h1>
						<b><?php the_sub_field('subtitle'); ?> <span class="scaleProgbar"></span></b>
						<p><?php the_sub_field('description'); ?></p>
						<a href="<?php the_sub_field('page'); ?>" class="button">Learn More</a>
					<?php endwhile; endif; ?>

                </div>
            </div>

        </div>

        
    
    </div>
</section>



<section class="apex-seller-overwhelmed">
    <div class="wrap">
        <p><?php the_field('footer_pre_title'); ?></p> 
        <h1><?php the_field('footer_title'); ?></h1>
        <a href="<?php the_field('footer_btn_link'); ?>" class="button"><?php the_field('footer_btn_text'); ?></a>
    </div>
</section>

<?php get_footer(); ?>