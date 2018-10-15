<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	<article class="article-content clear">

		<a href="<?php the_permalink(); ?>"><h2 class="article-title"><?php the_title(); ?></h2></a>
		<p class="article-author"><?php the_author(); ?></p>

		<div class="blog-thumb">
			<?php /*<div class="comment-count"><?php comments_number( '0 <span>comment</span>', '1 <span>comment</span>', '% <span>comments</span>' ); ?></div> */ ?>
			<div class="comment-count"><div class="fb-comments-count" data-href="<?php the_permalink(); ?>">0</div><span>comments</span></div>
			<a class="post-link" rel="<?php the_title(); ?>" href="<?php the_permalink(); ?>">
				<?php if(has_post_thumbnail()) : the_post_thumbnail(); else :?>
				<img class="trs-four" src="<?php bloginfo('template_url'); ?>/img/no-thumb.png" alt="Thumbnail does not exist">
				<?php endif; ?>
			</a>
	    </div>

		<?php the_excerpt(); ?>


	</article>
<!-- /article-content -->
<?php endwhile; endif; ?>