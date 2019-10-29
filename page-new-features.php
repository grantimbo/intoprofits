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




<script>

    var firstVid = $('.res-link:first-child')[0].dataset.video

    $('a.res-link:first-child').addClass('active')
    $('.rslts-plylst-main').html(firstVid)


    $('.curriculum-menu:first-child').addClass('active').children('.cur-submen').addClass('active')


    // video playlist link
    $(document).on('click', '.rslts-plylst-vids .res-link', function(e) {
        e.preventDefault();

        let video = this.getAttribute('data-video');

        $('.rslts-plylst-main').html(video)
        $(this).addClass('active').siblings().removeClass('active')
    })

    // accordion modules
    $(document).on('click', '.curriculum-menu a', function(e) {
        e.preventDefault();

        console.log('tae')

        $(this).siblings('div').toggleClass('active')
        $(this).closest('div').toggleClass('active')


    })

    // accordion modules sub menu
    $(document).on('click', 'span.cur-toggle', function(e) {
        e.preventDefault();

        console.log($(this).toggleClass('active').closest('.cur-submen-title').siblings('.cur-submen').toggleClass('active'))

        


    })

    // toggle - collapse all 
    $(document).on('click', '.curriculum-toggle', function(e) {
        e.preventDefault();

        if ($(this).html() == 'Expand All') {
            $(this).html('Collapse All')
            $('.curriculum-menu').addClass('active')
            $('.cur-submen').addClass('active')
            $('.cur-submen-items').addClass('active')
        } else {
            $(this).html('Expand All')
            $('.curriculum-menu').removeClass('active')
            $('.cur-submen').removeClass('active')
            $('.cur-submen-items').removeClass('active')
        }
    })

</script>




<style>
.rslts-plylst {
    margin: 10px 10px 20px;
    position: relative;
}
.rslts-plylst-main iframe {
    width: 100%;
    height: 200px;
    background: #efefef;
}
.rslts-plylst-vids {
    overflow-x: scroll;
    overflow-y: hidden;
    white-space: nowrap;
}
.res-link {
    width: 124px;
    display: inline-block;
    background: #efefef;
    padding: 5px;
    box-sizing: border-box;
    color: #000;
}
.res-link.active {
    background: #2367c5;
    color: #ffffff;
}
.res-info {
    position: relative;
}
.res-info b {
    white-space: nowrap;
    overflow: hidden !important;
    text-overflow: ellipsis;
    font-size: 12px;
    width: 100%;
    display: block;
    margin: 6px 0;
}
.res-info .res-rate {
    width: 100%;
    height: 20px;
    display: block;
    position: relative;
    margin-top: 4px;
}
.res-info .exc-rate {
    right: auto;
    top: 0;
    left: 0;
}
.res-info .res-level {
    width: 100%;
    font-size: 10px;
    margin-top: 4px;
}


.curriculum {
    margin: 10px;
}
.curriculum-toggle {
    cursor: pointer;
    color: #0047ab;
    padding: 10px 20px;
    font-size: 12px;
    font-weight: bold;
    margin-bottom: 10px;
    background: #efefef;
    display: inline-block;
}
.curriculum a {
    padding: 16px;
    background: #efefef;
    font-size: 16px;
    display: block;
    margin-bottom: 2px;
}
.curriculum-menu.active > a {
    background: #2367c5;
    color: #ffffff;
}
.cur-modules,
.cur-time,
.cur-submen {
    display: none;
}
.cur-submen .cur-modules {
    margin: 0;
}
.cur-submen.active {
    display:block;
}
.cur-submen-items .cur-submen-title {
    padding: 12px 16px;
    background: #f5f5f5;
    font-size: 14px;
    display: block;
    margin-bottom: 2px;
}
.cur-submen-items .cur-submen {
    padding: 1px 20px;
    background: #fbfbfb;
    font-size: 13px;
}
span.curMod,
span.curTme {
    display:none;
    margin-top: 18px;
    font-weight: bold;
}
@media (min-width: 690px) {
    .cur-time {
        float: right;
        display: block;
    }
    span.curTme {
        float: right;
        margin-right: 14px;
        display: block;
    }
}
@media (min-width: 768px) {
    .cur-modules {
        float: right;
        margin-right: 50px;
        display: block;
    }
    span.curMod {
        float: right;
        margin-right: 38px;
        display: block;
    }
}





/* curriculum icons */
.curriculum-menu a .dashicons {
    position: relative;
    top: 2px;
    margin-right: 8px;
}
.curriculum-menu a .dashicons:before {
    content: "\f132";
}
.curriculum-menu.active a .dashicons:before {
    content: "\f460";
}
.dashicons.cur-vid,
.dashicons.cur-action,
.dashicons.cur-question {
    font-size: 18px;
    color: #2367c5;
    margin-right: 10px;
}
.dashicons.cur-vid:before {
    content: "\f236";
}
.dashicons.cur-toggle {
    margin-left: 10px;
    cursor: pointer;
}
.dashicons.cur-toggle:before {
    content: "\f140";
}
.dashicons.cur-toggle.active:before {
    content: "\f142";
}
.dashicons.cur-action:before {
    content: "\f12a";
}
.dashicons.cur-question:before {
    content: "\f348";
}

@media (min-width : 480px) {

    .rslts-plylst-main iframe {
        height: 300px;
    }
}

@media (min-width: 690px) {
    .rslts-plylst-main {
        width: 75%;
        float: left;
    }
    .rslts-plylst-main iframe {
        height: 300px;
    }
    .rslts-plylst-vids {
        padding-left: 10px;
    box-sizing: border-box;
        overflow-x: hidden;
        overflow-y: scroll;
        width: 25%;
        float: right;
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
    }
    .res-link {
        width: 100%;
    display: block;
    margin-bottom: 10px;
    }

    
}


@media (min-width: 768px) {
    .rslts-plylst-main iframe {
        height: 330px;
    }
}


@media (min-width: 992px) {
    .rslts-plylst-main iframe {
        height: 400px;
    }
}

@media (min-width: 1180px) {
    .rslts-plylst-main iframe {
        height: 482px;
    }
}



</style>