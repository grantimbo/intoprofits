<?php /* Template Name: Home */ get_header(); ?>

<main role="main" class="container homepage-container">
	<div class="wrap">
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			<section>
				<?php the_content(); ?>
			</section>
			
			<?php get_template_part('template-parts/metrics'); ?>

			<!-- /article -->
		<?php endwhile; endif; ?>
	</div>
</main>

<?php get_footer(); ?>