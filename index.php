<?php get_header(); ?>
<main role="main" class="container blogpost-container">
		<div class="wrap clear">
			<section>
				<?php get_template_part('template-parts/loop'); ?>
				<div class="clearfix"></div>
				<?php get_template_part('template-parts/pagination'); ?>
			</section>
			<aside>
				<?php get_template_part('template-parts/metrics'); ?>
			</aside>
		</div>
</main><!-- .container -->
<?php get_footer(); ?>
