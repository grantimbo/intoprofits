<?php get_header(); ?>
	<main role="main">
		<section>
			<h1><?php _e( 'Archives', 'html5blank' ); ?></h1>
			<?php get_template_part('template-parts/loop'); ?>
			<?php get_template_part('template-parts/pagination'); ?>
		</section>
	</main>
<?php get_footer(); ?>
