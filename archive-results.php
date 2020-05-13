<?php get_header(); ?>

    <!-- reviews head -->
    <main role="main" class="container reviews-head">
        <div class="wrap">
            <h1>Student Results</h1>
            <p>Our students have a unique advantage and they get real-life business results. <br> But you don’t have to take our word for it: Hear what they have to say.</p>
        </div>
    </main>

    <div class="container">

        <div class="wrap result-count">
            <span><?php echo wp_count_posts( 'results' )->publish; ?> reviews</span>
        </div>

        <!-- results query -->
        <div class="wrap clear ">

            <?php $args = array( 
                'post_type' => 'results',
                'post_status' => 'publish',
                'orderby'=> 'menu_order',
                'posts_per_page' => 30,
                // 'nopaging' => true
            ); 

            $temp = $wp_query; 
            $wp_query = null; 
            $wp_query = new WP_Query(); 
            $wp_query->query( $args ); 

            if($wp_query->have_posts()) : while ( $wp_query->have_posts() ) : $wp_query->the_post(); 
            
            $title = get_field('review_title');
            $tempDesc = get_field('review_description');
            $desc = strlen($tempDesc) > 450 ? substr($tempDesc,0,450)."..." : $tempDesc; ?>

            <div class="reviews-thumb">
                <a class="reviews-thumb-wrap blog-thumb"
                    data-id="<?php the_ID(); ?>"
                    data-video='<?php the_field('review_video'); ?>'
                    data-title="<?php echo str_replace('"',"&quot;",$title) ?>"
                    data-name="<?php the_field('review_name'); ?>"
                    data-location="<?php the_field('review_location'); ?>"
                    data-level="<?php the_field('review_level'); ?>"
                    data-rating="<?php the_field('review_rating'); ?>"
                    data-description="<?php echo str_replace('"',"&quot;",$desc) ?>"
                    href="<?php the_permalink(); ?>">
                    <span class="play-button"></span>
                    <img src="<?php the_field('review_screenshot'); ?>">
                    <div class="reviews-info clear">
                        <div class="exc-rate star<?php the_field('review_rating'); ?>"></div>
                        <div class="rvinfo-lft">
                            <b><?php the_field('review_name'); ?></b>
                            <div><?php the_field('review_location'); ?></div>
                        </div>
                    </div>
                </a>
            </div>

            <?php endwhile; endif; wp_reset_postdata(); ?>

        </div>
        
        <!-- review footer -->
        <div class="reviews-footer">
            <a href="<?php echo get_site_url(); ?>/case-study" class="button go-intoprofits">Access The Free Case Study</a>
        </div>
            
    </div>
    
    <div id="modal">
        <div class="review-excerpt-wrap">
            <span class="close-modal"><i class="icon-cross"></i></span>

            <!-- title -->
            <div class="exc-ttle"></div>

            <!-- video -->
            <div class="exc-vid"></div>

            <!-- name, location, rating -->
            <div class="name-loc-rate">
                <div class="vidInf">
                    <span class="labLe">NAME:</span><span class="exc-nme"></span>
                </div>
                <div class="vidInf">
                    <span class="labLe">LOCATION:</span><span class="exc-loc"></span>
                </div>
                <div class="vidInf">
                    <span class="labLe">LEVEL:</span><span class="exc-lvl"></span>
                </div>
                <div class="vidInf">
                    <span class="labLe">RATING:</span><span class="rate-wrap"><span class="exc-rate star"></span></span>
                </div>
            </div>

            <!-- description -->
            <span class="labLe">DESCRIPTION:</span>
            <div style="margin:  8px 0 30px;" class="exc-desc"></div>

            <!-- button and footer -->
            <div class="revFoot">
                <a href="<?php echo get_site_url(); ?>/case-study" class="button">Free Case Study</a>
                <p>Or, read more about <a class="exc-link" href="#"><span class="exc-nme2">John Doe</span>'s story here.</a></p>
            </div>
            
        </div>
    </div>

<?php get_footer(); ?>