<?php /* Template Name: Results */ get_header(); ?>


<main role="main" class="container default-container">
	<div class="wrap clear">
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			<section>
				<?php the_content(); ?>
			</section>
			
			<aside>
				<?php get_template_part('template-parts/metrics'); ?>
			</aside>

			<!-- /article -->
		<?php endwhile; endif; ?>
	</div>
</main>

<main class="container results-container">
	<div class="grid wrap clear">
		<div class="grid-sizer"></div>
				
		<?php 

		$args = array (
			'post_type'              => array( 'results' ),
			'post_status'            => array( 'publish' ),
			'nopaging'               => true,
			'order'                  => 'ASC',
			'orderby'                => 'menu_order',
		);

		$services = new WP_Query( $args );
        if( $services->have_posts() ) : while ( $services->have_posts() ) :  $services->the_post(); ?>

			<div class="results-content">

			<?php if (($services->current_post +1) != ($services->post_count)) { ?>
			  	<a class="lightbox" href="<?php echo get_the_post_thumbnail_url( get_the_ID()); ?>">
					<?php the_post_thumbnail('large'); ?>
				</a>
			<?php } ?>

			<?php if (($services->current_post +1) == ($services->post_count)) { ?>
				<a class="new-image" href="<?php echo get_the_post_thumbnail_url( get_the_ID()); ?>">
					<?php the_post_thumbnail('large'); ?>
				</a>
			<?php } ?>

			</div>

		<?php endwhile; endif; wp_reset_postdata(); ?>

	</div>
</main>

<?php get_footer(); ?>

<script>
	$( document ).ready(function() {
	    var tobi = new Tobi({
		  // Options
		})
		var newElement = document.querySelector('.new-image')

		tobi.add(newElement, function () {
		  console.log('baho kag tae');
		})
	});

	$(window).on('load', function(){   
	  	
	  	$('.results-container .wrap').masonry({
			columnWidth: '.grid-sizer',
			itemSelector: '.results-content',
			gutter: 10,
			horizontalOrder: true,
			percentPosition: true
		});

	});

</script>