<?php get_header(); ?>
<main role="main" class="container blogpost-container">
	<div class="wrap clear">
		<section>
			<?php if (have_posts()): while (have_posts()) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<h2 class="article-title"><?php the_title(); ?></h2>
					<p class="article-author"><div class="fb-like" data-href="<?php the_permalink(); ?>" data-layout="button_count" data-action="like" data-size="small" data-show-faces="false" data-share="true"></div> <?php the_author(); ?></p>

					<?php if( get_field('video') ): ?>
						<div class="embed-container">
							<?php the_field('video'); ?>
						</div>
					<?php else: ?>
						<?php if(has_post_thumbnail()) : the_post_thumbnail(); else :?>
							<img class="trs-four" src="<?php bloginfo('template_url'); ?>/img/no-thumb.png" alt="Thumbnail does not exist">
						<?php endif; ?>
					<?php endif; ?>

					<?php the_content(); // Dynamic Content ?>

					<p class="transcript-title">Transcript / <a href="" class="mp3-btn">Mp3</a></p>
					<div class="mp3-wrap">
						<?php if( get_field('mp3') ): ?>
						    <audio controls>
							  <source src="<?php the_field('mp3'); ?>" type="audio/mpeg">
								Your browser does not support the audio element.
							</audio>
						<?php else: ?>
							<h4>No MP3/Audio File</h4>
						<?php endif; ?>
					</div>
					
					<?php if( get_field('transcript') ): ?>
						<div class="video-transcript">
						    <?php the_field('transcript'); ?>
						    <span class="transcript-readmore-wrap">
								<a class="transcript-readmore">Read More</a>
							</span>
						</div>
					<?php else: ?>
						<div class="video-transcript no-transcript">
							<h4>No Transcript</h4>
						</div>
					<?php endif; ?>
						

					
					<?php edit_post_link(); ?>


				</article><!-- /article -->

			<?php endwhile; endif; ?>

		</section>
		<aside>
			<?php get_template_part('template-parts/metrics'); ?>
		</aside>
	</div><!-- /wrap -->

	<div class="wrap clear">
		<section>
			<div class="fb-comments" width="100%" data-href="<?php the_permalink(); ?>" data-numposts="5"></div>
		</section>
	</div>
</main>
<?php get_footer(); ?>
