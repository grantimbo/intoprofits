<?php /* Template Name: Coming Soon */ wp_head(); ?>

<div class="cs-wrap">
	<div class="cs">
		<img src="<?php echo bloginfo('template_url'); ?>/img/logo-black.png" alt="Into Profits">
		<?php the_content(); ?>
	</div>
</div>

<style>
	.cs-wrap {
		height: 90vh;
		display: -ms-flexbox;
		display: flex;
		-ms-flex-wrap: wrap;
		flex-wrap: wrap;
		-ms-flex-pack: start;
		justify-content: flex-start;
		-ms-flex-align: center;
		align-items: center;
		padding: 1.25rem;
	}
	.cs {
		text-align: center;
		margin: 0 auto;
	}
	.cs h1 {
		font-size: 48px;
	}
	.cs img {
		margin-bottom: 120px;
	    max-width: 320px;
	    opacity: .13;
	}
	.cs strong {
		font-weight: bold;
		color: #0047ab;
	}
</style>
<?php wp_footer(); ?>