<?php get_header(); ?>

<main class="container">


<div class="wrap">
    <div class="rslts-plylst clear">
        <div class="rslts-plylst-main"></div>
        <div class="rslts-plylst-vids">
    
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
    
            <a class="res-link"
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
</div>



<div class="wrap">
    <div class="curriculum">
        <span href="#" class="curriculum-toggle">Expand All</span>
        <?php if( have_rows('overall_stats', 'option') ): while( have_rows('overall_stats','option') ): the_row(); ?>
            <span class="curTme"><?php the_sub_field('overall_time'); ?></span>
            <span class="curMod"><?php the_sub_field('all_modules'); ?></span>
        <?php endwhile; endif; ?>

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
                            <div class="cur-submen-title"><span class="dashicons cur-action"></span>Action items<span class="cur-time">10 Items</span></div>

                        <?php elseif( get_row_layout() == 'question_menu' ): ?>
                            <div class="cur-submen-title"><span class="dashicons cur-question"></span>Questions<span class="cur-time">2 live Q&A Calls</span></div>
                        <?php endif; ?>


                    </div>
                <?php endwhile; endif; ?>
                </div>
            
            </div>
        
        <?php endwhile; endif; ?>
       
    </div>
</div>

</main>

<?php get_footer(); ?>


