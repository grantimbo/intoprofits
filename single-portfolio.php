<?php get_header(); ?>
<main class="portfolio-container">
    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
     <header class="project-details">
        <a class="icon-menu mobile-menu"></a>
        <div class="project-title-single"><?php the_title(); ?></div>
        <div class="project-desc"><?php the_excerpt(); ?></div>
        <?php /* <div class="project-date"><?php echo get_the_date(); ?></div> */ ?>
        <a class="icon-cross close" title="Back"></a>
    </header>
    <section class="portfolio-content portfolio-single" >
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <section class="project-content">
                    <?php the_content(); ?>
                </section>
                <footer class="project-footer">
                    <?php 

                        $next_post = get_previous_post(); 
                        $prev_post = get_next_post();


                        if (!empty( $next_post )): ?>
                            <a class="next-post post-link" alt="<?php the_title(); ?>" href="<?php echo get_permalink( $next_post->ID ); ?>" title="Next"><i class="icon-chevron-right"></i></a>
                       
                        <?php endif;

                            if (!empty( $prev_post )): ?>
                            <a class="prev-post post-link" alt="<?php the_title(); ?>" href="<?php echo get_permalink( $prev_post->ID ); ?>" title="Previous"><i class="icon-chevron-left"></i></a>
                        
                        <?php endif; ?>
                </footer>                
            </article>
        <?php endwhile; endif; ?>
    </section><!-- .portfolio-content -->
</main>
<?php get_footer(); ?>

