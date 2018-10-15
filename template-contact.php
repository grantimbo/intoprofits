<?php /* Template Name: Contact */ get_header(); ?>


<?php if (have_posts()): while (have_posts()) : the_post(); ?>

<header class="contact-container-header" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');"></header>
<main role="main" class="container contact-container">
	<div class="wrap">
			<section>
				<?php the_content(); ?>
			</section>
			<!-- /article -->
	</div>
</main>

<?php endwhile; endif; ?>
<?php get_footer(); ?>