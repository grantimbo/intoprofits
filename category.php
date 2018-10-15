<?php get_header(); ?>
<main class="wrap" >
	<?php get_template_part('template-parts/loop'); ?>

	<?php echo paginate_links( $args ); ?>
</main>

<div class="modal">
	<main class="portfolio-container" >
        <a class="icon-cross close" title="Back"></a>
         <header class="project-details">
	        <a class="icon-menu mobile-menu"></a>
	        <div class="project-title-single"></div>
	        <div class="project-desc"></div>
            <a class="icon-cross close" title="Back"></a>
	    </header>
    </main>
</div>

<?php get_footer(); ?>