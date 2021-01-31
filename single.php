<?php get_header(); ?>
<main role="main" class="container blogpost-container">
	<div class="wrap clear">
		<section>
            <div class="loader"></div>
            <article style="display: none;">
                <h2 class="article-title"></h2>
                <p class="article-author">
                    <div class="fb-like" 
                        data-href="<?php the_permalink(); ?>"
                        data-layout="button_count"
                        data-action="like"
                        data-size="small"
                        data-show-faces="false"
                        data-share="true">
                    </div>
                    <span>Daniel Audunsson</span>
                </p>
                <div id="featured_media"></div>
                <div id="content"></div>
                <p class="transcript-title">Transcript / <a href="" class="mp3-btn">Mp3</a></p>
                <div class="mp3-wrap"></div>
                <div id="trascript_wrap"></div>
        
            </article>
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

<script>
	const loadPost = () => {

			let postAPI = siteData.homeUrl + '/wp-json/wp/v2/posts/<?php echo get_the_ID(); ?>',
				article_title = document.querySelector('.article-title'),
				content = document.querySelector('#content'),
				article = document.querySelector('article'),
				featured_media = document.querySelector('#featured_media'),
				mp3_wrap = document.querySelector('.mp3-wrap'),
				trascript_wrap = document.querySelector('#trascript_wrap'),
				loadingResults = document.querySelector(".loader");

                console.log(postAPI)

			fetch(postAPI)
				.then (
					function(response) {

						if (response.status !== 200) {
							console.log('Looks like there was a problem.')
							alert('Looks like there was a problem. Please reload the page or contact us')
							return
						}

						response.json().then(function(post) {
							

							console.log(post)

							article_title.innerHTML = post.title.rendered
							content.innerHTML = post.content.rendered
							article.setAttribute('style', 'display: block;')

							// check video
							if ( !post.ACF === false ) {
								featured_media.innerHTML = '<div class="embed-container">' + post.ACF.video + '</div>'
								mp3_wrap.innerHTML = `<audio controls><source src="`+ post.ACF.mp3 +`" type="audio/mpeg">Your browser does not support the audio element.</audio>`
								trascript_wrap.innerHTML = `<div class="video-transcript">` + post.ACF.transcript + `<span class="transcript-readmore-wrap"><a class="button transcript-readmore">Read More</a></span></div>`
							} else {
								featured_media.innerHTML = '<img class="trs-four" src="'+ post.thumbnail+'" alt="'+ post.title.rendered +'">'
								mp3_wrap.innerHTML = '<h4>No MP3/Audio File</h4>'
								trascript_wrap.innerHTML = '<div class="video-transcript no-transcript"><h4>No Transcript</h4></div>'
							}

							loadingResults.setAttribute('style', 'display: none;')

						})
					}
				).catch(function(err) {
					console.log('Fetch Error :-S', err)
					alert('Looks like there was a problem. Please reload the page or contact us')
				}
			)
        }

        loadPost();
</script>
<?php get_footer(); ?>
