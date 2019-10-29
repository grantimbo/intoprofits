<?php get_header(); ?>

    <main role="main" class="container default-container single-review-container">
        <div class="wrap clear">
            <section style="margin: 0">

                <!-- facebook like and share -->
                <div class="fb-like" 
                    data-href="<?php the_permalink(); ?>" 
                    data-layout="button_count" 
                    data-action="like" 
                    data-size="small" 
                    data-show-faces="false" 
                    data-share="true">
                </div>

                <!-- title -->
                <div class="exc-ttle"><?php the_field('review_title'); ?></div>

                <!-- video -->
                <div class="exc-vid"><?php the_field('review_video'); ?></div>

                <!-- name, location, rating -->
                <div class="name-loc-rate">
                    <div class="vidInf">
                        <span class="labLe">NAME:</span><span class="exc-nme"><?php the_field('review_name'); ?></span>
                    </div>
                    <div class="vidInf">
                        <span class="labLe">LOCATION:</span><span class="exc-loc"><?php the_field('review_location'); ?></span>
                    </div>
                    <div class="vidInf">
                        <span class="labLe">LEVEL:</span><span class="exc-lvl"><?php the_field('review_level'); ?> Figures</span>
                    </div>
                    <div class="vidInf">
                        <span class="labLe">RATING:</span><span class="rate-wrap"><span class="exc-rate star<?php the_field('review_rating'); ?>"></span></span>
                    </div>
                </div>

                <!-- description -->
                <div class="vidInf">
                    <span class="labLe">DESCRIPTION:</span>
                    <div class="exc-desc"><?php the_field('review_description'); ?></div>
                </div>

                <!-- transcript -->
                <div class="vidInf">
                    <span class="labLe">TRANSCRIPT:</span>
                    <div class="exc-trans"><?php the_field('review_transcript'); ?></div>
                </div>


            </section>
            <aside>
                <?php get_template_part('template-parts/metrics'); ?>
            </aside>
        </div>

        <!-- other reviews -->
        <div class="wrap other-reviews-wrap">
                
            <div class="vidInf">
                <span class="labLe">OTHER REVIEWS:</span>
            </div>

            <div class="clear">

                <?php $args = array( 
                    'post_type' => 'results',  
                    'orderby'=> 'menu_order',  
                    'post__not_in' => array (get_the_ID()),
                    'paged' => $paged
                ); 

                $temp = $wp_query; 
                $wp_query = null; 
                $wp_query = new WP_Query(); 
                $wp_query->query( $args ); 

                if($wp_query->have_posts()) : while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>

                <div class="reviews-thumb">
                    <a class="reviews-thumb-wrap blog-thumb"
                        data-id="<?php the_ID(); ?>"
                        data-video='<?php the_field('review_video'); ?>'
                        data-title="<?php the_field('review_title'); ?>"
                        data-name="<?php the_field('review_name'); ?>"
                        data-location="<?php the_field('review_location'); ?>"
                        data-level="<?php the_field('review_level'); ?>"
                        data-rating="<?php the_field('review_rating'); ?>"
                        data-description="<?php the_field('review_description'); ?>"
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
        </div>
    </main>


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