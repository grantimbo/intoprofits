<?php get_header(); ?>
<main role="main" class="container blogpost-container">
	<div class="wrap clear">
		<section>
			<div id="postsWrap"></div>
			<div class="loader"></div>
			<button id="load_more" style="display: none;" onclick="loadMore()">Load More Articles</button>
		</section>
		<aside>
			<?php get_template_part('template-parts/metrics'); ?>
		</aside>
	</div>
</main><!-- .container -->


<script>

	let currentPage = 2,
		loadedPosts = 0;
		totalPosts = null;

	const loadPost = () => {

		let postsApi = siteData.homeUrl + '/wp-json/wp/v2/posts',
			postsWrap = document.getElementById('postsWrap'),
			load_more = document.getElementById('load_more'),
			loader = document.querySelector('.loader');

			fetch(postsApi)
				.then (
					function(response) {

						totalPosts = response.headers.get('X-WP-Total')

						if (response.status !== 200) {
							console.log('Looks like there was a problem.')
							alert('Looks like there was a problem. Please reload the page or contact us')
							return
						}

						response.json().then(function(postData) {
							
							loader.setAttribute('style', 'display: none;')
							load_more.setAttribute('style', 'display: block;')
							
							loadedPosts = postData.length

							postData.forEach(function (post) {
								
								let post_title_raw = post.title.rendered,
									post_title = post_title_raw.replace(/"/g, '&quot;');
									post_description_raw = post.excerpt.rendered,
									post_description = post_description_raw.replace(/"/g, '&quot;');
									post_link = post.link,
									post_thumbnail = null,
									featured_media = post.thumbnail;

									// if has thumbnail
									if ( !post.ACF === false ) {

										post_thumbnail = `<div class="blog-thumb video">
															<a href="${post_link}" rel="${post_title}" class="play-button"></a>
															<div class="comment-count"><div class="fb-comments-count" data-href="${post_link}">0</div><span>comments</span></div>
															<div class="post-link">
																<img class="trs-four" src="${featured_media}" width="700" height="394" alt="${post_title}">
															</div>
														</div>`;

									} else {

										post_thumbnail = `<div class="blog-thumb">
															<div class="comment-count"><div class="fb-comments-count" data-href="${post_link}">0</div><span>comments</span></div>
															<a href="${post_link}" class="post-link">
																<img class="trs-four" src="${featured_media}" width="700" height="394" alt="${post_title}">
															</a>
														</div>`
									}



									postsWrap.innerHTML += `<article class="article-content clear">
																<a href="${post_link}"><h2 class="article-title">${post_title}</h2></a>
																<p class="article-author">Daniel Audunsson</p>
																${post_thumbnail}
																${post_description}
																<a class="view-article" href="${post_link}">Read More</a>
															</article>`
								}
							);


						})
					}
				).catch(function(err) {
					console.log('Fetch Error :-S', err)
					alert('Looks like there was a problem. Please reload the page or contact us')
				}
			)
	}
	
	const loadMore = () => {

		let activePage = currentPage++
			postsApi = siteData.homeUrl + '/wp-json/wp/v2/posts?page=' + activePage,
			postsWrap = document.getElementById('postsWrap'),
			load_more = document.getElementById('load_more'),
			loader = document.querySelector('.loader');
			
			
			loader.setAttribute('style', 'display: block;');

			fetch(postsApi)
				.then (
					function(response) {

						if (response.status !== 200) {
							alert('Looks like there was a problem. Please reload the page or contact us')
						}

						response.json().then(function(postData) {
							
							loader.setAttribute('style', 'display: none;')
							loadedPosts = loadedPosts + postData.length

							if ( loadedPosts <= totalPosts ) {
								load_more.setAttribute('style', 'display: none;')
							}

							postData.forEach(function (post) {
								let post_title_raw = post.title.rendered,
									post_title = post_title_raw.replace(/"/g, '&quot;');
									post_description_raw = post.excerpt.rendered,
									post_description = post_description_raw.replace(/"/g, '&quot;');
									post_link = post.link,
									post_thumbnail = null,
									featured_media = post.thumbnail;

									// if has thumbnail
									if ( !post.ACF === false ) {

										post_thumbnail = `<div class="blog-thumb video">
															<a href="${post_link}" rel="${post_title}" class="play-button"></a>
															<div class="comment-count"><div class="fb-comments-count" data-href="${post_link}">0</div><span>comments</span></div>
															<div class="post-link">
																<img class="trs-four" src="${featured_media}" width="700" height="394" alt="${post_title}">
															</div>
														</div>`;

									} else {

										post_thumbnail = `<div class="blog-thumb">
															<div class="comment-count"><div class="fb-comments-count" data-href="${post_link}">0</div><span>comments</span></div>
															<a href="${post_link}" class="post-link">
																<img class="trs-four" src="${featured_media}" width="700" height="394" alt="${post_title}">
															</a>
														</div>`
									}


									postsWrap.innerHTML += `<article class="article-content clear">
																<a href="${post_link}"><h2 class="article-title">${post_title}</h2></a>
																<p class="article-author">Daniel Audunsson</p>
																${post_thumbnail}
																${post_description}
																<a class="view-article" href="${post_link}">Read More</a>
															</article>`
								}
							);


						})
					}
				).catch(function(err) {
					console.log('Fetch Error', err)
					alert('Looks like there was a problem. Please reload the page or contact us')
				}
			)


	}

	loadPost();
	

</script>

<?php get_footer(); ?>
