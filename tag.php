<?php get_header(); ?>
<header class="portfolio-header trs-four">
	<?php grantex_nav(); ?>
</header>

<div class="wrap">
	<header class="portfolio-subhead">
		<h1 class="clear">Tag Archive <span><?php echo single_tag_title('', false); ?><b>!</b></span></h1>
	</header>
	<?php get_template_part('template-parts/loop'); ?>
	<?php get_template_part('template-parts/pagination'); ?>
</div>
<?php get_footer(); ?>