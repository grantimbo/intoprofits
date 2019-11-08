<?php get_header(); ?>


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
        	<P>We Help Amazon Private Label Sellers That Are Stuck & Overwhelmed</P>
            <h1>Get Hyper-Systemized and Predictably Scale Into 7- and 8-Figures</h1>
        </div>
        <div class="v-graph-button">
            <a href="https://intoprofits.com/case-study" class="btn-seehow"><span>See How</span></a>
        </div>
    </div>
</section>



<section class="apex-section pro-grade">
    <div class="wrap">
        <h1 class="apex-section-title withSub">Professional Grade Private Label Systems</h1>
        <p class="apex-section-description">IntoProfits.com provides proprietary tools and processes that put you in the top 1% of sellers. It’s like upgrading your business from a streetcar into an F1 car on a racetrack.</p>
        <h3>“You master something when it becomes <u>simple</u>”</h3>
        <p class="apex-section-description">Most private label businesses are chaotic and fundamentally weak. We help you upgrade and streamline the foundations of your business. Then we get you fiercely focused on the few things that produce consistent results. Become efficient and effective. Drive performance through data and the scientific method. Optimize over time and win.</p>
    </div>
</section>


<section class="apex-section complete-connected">
	<div class="wrap">
		<h1 class="apex-section-title withSub">Complete & Connected</h1>
		<p class="apex-section-description">Forged in fire, our systems have evolved through continuous application since 2012. Most programs teach you siloed tactics but in the real-world everything is connected. And it’s the correct combination of every component that produces stunning results.</p>
		
		<section class="complete-connected-icons">
			<figure>
				<div class="imgConnected focus"></div>
				<figcaption><b>Focus</b>Knowing what works and where to invest your time, energy and resources is critical for success. Most sellers get distracted and waste time where the ROI is low to none.</figcaption>
			</figure>
			
			<figure>
				<div class="imgConnected strategy"></div>
				<figcaption><b>Product strategy</b>Crafting offers that are strategically superior to the competition is key for long-lasting success on Amazon. Most sellers offer “me-too” products and are fighting for scraps.</figcaption>
			</figure>
			
			<figure>
				<div class="imgConnected chain"></div>
				<figcaption><b>Supply chain</b>Running a professional supply chain that is consistent and produces world-class products at low-cost. Most sellers go out of stock, have quality issues and waste money.</figcaption>
			</figure>
			
			<figure>
				<div class="imgConnected cashflow"></div>
				<figcaption><b>Cash flow</b>Maximizing the cash utilization in your business means faster growth and more profits. Most sellers experience slow growth due to poor usage of cash and low profit-margins.</figcaption>
			</figure>
			
			<figure>
				<div class="imgConnected systemdata"></div>
				<figcaption><b>Systems & data</b>Building leveraged systems, designing your business for growth and using smart data. Most sellers hit a ceiling on growth due to a lack of structure, or one that doesn’t scale.</figcaption>
			</figure>
			
			<figure>
				<div class="imgConnected advertising"></div>
				<figcaption><b>Paid advertising</b>Constructing campaigns at scale, testing, optimizing, expanding market share, dominating your market! Most sellers are stuck in the stone-age with Amazon PPC.</figcaption>
			</figure>
			
			<figure>
				<div class="imgConnected optimization"></div>
				<figcaption><b>Organic optimization</b>Engineering product listings that rank for everything. Keyword usage and priority, indexation, page interactions, and more. Most sellers don’t make love to the machine.</figcaption>
			</figure>
			
			<figure>
				<div class="imgConnected conversion"></div>
				<figcaption><b>Conversions & AOV</b>Resonating with your market, creating offers that jump into the hands of new customers, architecting a higher AOV. Most sellers imitate and don’t know the art of salesmanship.</figcaption>
			</figure>
			
			<figure>
				<div class="imgConnected hiring"></div>
				<figcaption><b>Hiring & managing a team</b>Assembling a force and building a real business that runs and grows without you. Most sellers never decentralize, stay stuck and hire C-players that damage their business.</figcaption>
			</figure>
			
			<figure>
				<div class="imgConnected operations"></div>
				<figcaption><b>Operations</b>Fine-tuning efficient, lean and transparent operations that deliver outstanding results. Most sellers build a bloated machine that drains profits and harms their ability to compete.</figcaption>
			</figure>
			
			<figure>
				<div class="imgConnected automation"></div>
				<figcaption><b>Scaling & automation</b>Identifying leverage points, refining the right parts at the right time, increasing automation. Most sellers can’t scale because their business gets worse if it grows.</figcaption>
			</figure>
			
			<figure>
				<div class="imgConnected evolution"></div>
				<figcaption><b>Product evolution</b>Constantly iterating and improving your products and selection over time. Moving into customization and innovation. Most sellers never add genuine value to the marketplace.</figcaption>
			</figure>
		</section>
	</div>
</section>


<section class="apex-section student-results">
	<div class="wrap">
	    <h1 class="apex-section-title withSub">Proven Student Results</h1>
	    <p class="apex-section-description">Does Apex Seller actually work? There is only one way to find out; by asking our students about their results with it in the real-world.</p>
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
		
				<?php endwhile; endif; wp_reset_postdata(); ?>
		
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
        <p class="apex-section-description">We teach the things that no-one else is teaching. All of our programs are built from the ground-up with our own proprietary systems and processes. They are NEW, innovative and give our students a true competitive advantage.</p>

        <div class="apex-seller-graphic-home programs-apex-seller-wrap">

            <div class="wrap">
                <img src="<?php echo bloginfo('template_url'); ?>/img/apex-seller-product-graphic.png" alt="Apex Seller">
                <div class="programs-apex-graphic">
                    <h1>Apex Seller™</h1>
                    <b>Stage: Scaling Up <span class="scaleProgbar"></span></b>
                    <p>How to scale into 7- and 8-figures by leveraging professional grade systems & data, full-scale PPC advertising, unique products and a world-class team.</p>
                    <a href="<?php echo site_url(); ?>/programs/apex-seller" class="button">Learn More</a>
                </div>
            </div>

        </div>

        
    
    </div>
</section>



<section class="apex-seller-overwhelmed">
    <div class="wrap">
        <p>Stop Being Stuck & Overwhelmed...</p> 
        <h1>Get Hyper-Systemized and Predictably Scale Into 7‑ and 8‑Figures</h1>
        <a href="<?php echo site_url(); ?>/apply" class="button">LEARN HOW</a>
    </div>
</section>


<?php get_footer(); ?>