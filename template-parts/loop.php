<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	<article class="article-content clear">

		<a href="<?php the_permalink(); ?>"><h2 class="article-title"><?php the_title(); ?></h2></a>
		<p class="article-author"><?php the_author(); ?></p>

		<?php if ( has_post_format( 'video' )) { ?>
			
			<div class="blog-thumb video">
				<a href="<?php the_permalink(); ?>" rel="<?php the_title(); ?>" class="play-button"></a>
				<div class="comment-count"><div class="fb-comments-count" data-href="<?php the_permalink(); ?>">0</div><span>comments</span></div>
				<div class="post-link">
					<?php if(has_post_thumbnail()) : the_post_thumbnail(); else :?>
					<img style="width: 100%;" class="trs-four" src="<?php bloginfo('template_url'); ?>/img/no-thumb.png" alt="Thumbnail does not exist">
					<?php endif; ?>
				</div>
		    </div>

		<?php } else { ?>

			<div class="blog-thumb">
				<div class="comment-count"><div class="fb-comments-count" data-href="<?php the_permalink(); ?>">0</div><span>comments</span></div>
				<a href="<?php the_permalink(); ?>" class="post-link">
					<?php if(has_post_thumbnail()) : the_post_thumbnail(); else :?>
					<img style="width: 100%;" class="trs-four" src="<?php bloginfo('template_url'); ?>/img/no-thumb.png" alt="Thumbnail does not exist">
					<?php endif; ?>
				</a>
		    </div>

	    <?php } ?>

		<?php the_excerpt(); ?>


	</article>
<!-- /article-content -->
<?php endwhile; endif; ?>