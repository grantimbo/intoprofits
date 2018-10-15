<?php /* Template Name: Terms & Privacy */ get_header(); ?>

<main role="main" class="container terms-privacy-container">
	<div class="wrap clear">
		<aside>
			<?php terms_privacy_nav(); ?>
		</aside>

		<section>
			<?php if (have_posts()): while (have_posts()) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; endif; ?>
		</section>
	</div>
</main>

<?php get_footer(); ?>