<?php get_header(); ?>

    <main role="main" class="container default-container single-review-container">
        <div class="wrap clear">
            <section>
                <div class="loader loader1"></div>
                <article id="result_main" style="margin: 0; display: none;">
                
                    <!-- facebook like and share -->
                    <div class="fb-like" 
                        data-href="<?php the_permalink(); ?>" 
                        data-layout="button_count" 
                        data-action="like" 
                        data-size="small" 
                        data-show-faces="false" 
                        data-share="true">
                    </div>

                    <!-- title -->
                    <div id="review_title" class="exc-ttle"></div>

                    <!-- video -->
                    <div id="review_video" class="exc-vid"><</div>

                    <!-- name, location, rating -->
                    <div class="name-loc-rate">
                        <div class="vidInf">
                            <span class="labLe">NAME:</span><span id="review_name" class="exc-nme"></span>
                        </div>
                        <div class="vidInf">
                            <span class="labLe">LOCATION:</span><span id="review_location" class="exc-loc"></span>
                        </div>
                        <div class="vidInf">
                            <span class="labLe">LEVEL:</span><span id="review_level" class="exc-lvl"></span>
                        </div>
                        <div class="vidInf">
                            <span class="labLe">RATING:</span><span class="rate-wrap"><span id="review_rating" class="exc-rate"></span></span>
                        </div>
                    </div>

                    <!-- description -->
                    <div class="vidInf">
                        <span class="labLe">DESCRIPTION:</span>
                        <div id="review_description" class="exc-desc"></div>
                    </div>

                    <!-- transcript -->
                    <div class="vidInf">
                        <span class="labLe">TRANSCRIPT:</span>
                        <div id="review_transcript" class="exc-trans"></div>
                    </div>

                </article>
            </section>
            <aside>
                <?php get_template_part('template-parts/metrics'); ?>
            </aside>
        </div>

        <!-- other reviews -->
        <div class="wrap other-reviews-wrap" style="display: none;">
                
            <div class="vidInf">
                <span class="labLe">OTHER REVIEWS:</span>
            </div>

            <div class="wrap clear " id="display_results">
                <div class="loader loader2"></div>
            </div>

        </div>
    </main>


    <div id="modal">
        <div class="review-excerpt-wrap">
            <span class="close-modal"><i class="icon-cross"></i></span>

            <!-- title -->
            <div class="exc-ttle"></div>

            <!-- video -->
            <div class="exc-vid"></div>

            <!-- name, location, rating -->
            <div class="name-loc-rate">
                <div class="vidInf">
                    <span class="labLe">NAME:</span><span class="exc-nme"></span>
                </div>
                <div class="vidInf">
                    <span class="labLe">LOCATION:</span><span class="exc-loc"></span>
                </div>
                <div class="vidInf">
                    <span class="labLe">LEVEL:</span><span class="exc-lvl"></span>
                </div>
                <div class="vidInf">
                    <span class="labLe">RATING:</span><span class="rate-wrap"><span class="exc-rate star"></span></span>
                </div>
            </div>

            <!-- description -->
            <span class="labLe">DESCRIPTION:</span>
            <div style="margin:  8px 0 30px;" class="exc-desc"></div>

            <!-- button and footer -->
            <div class="revFoot">
                <a href="<?php echo get_site_url(); ?>/case-study" class="button">Free Case Study</a>
                <p>Or, read more about <a class="exc-link" href="#"><span class="exc-nme2">John Doe</span>'s story here.</a></p>
            </div>
            
        </div>
    </div>

    <script>

        const loadPost = () => {

            let postAPI = siteData.homeUrl + '/wp-json/wp/v2/results/<?php echo get_the_ID(); ?>';
                loader1 = document.querySelector(".loader1"),
                loader2 = document.querySelector(".loader2"),
                other_reviews = document.querySelector(".other-reviews-wrap"),
                result_main = document.getElementById("result_main"),
                review_title = document.getElementById("review_title"),
                review_video = document.getElementById("review_video"),
                review_name = document.getElementById("review_name"),
                review_location = document.getElementById("review_location"),
                review_level = document.getElementById("review_level"),
                review_rating = document.getElementById("review_rating"),
                review_description = document.getElementById("review_description"),
                review_transcript = document.getElementById("review_transcript");

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

                            loader1.setAttribute('style', 'display: none;')
                            result_main.setAttribute('style', 'display: block;')
                            other_reviews.setAttribute('style', 'display: block;')

                            review_title.innerHTML = post.ACF.review_title
                            review_video.innerHTML = post.ACF.review_video
                            review_name.innerHTML = post.ACF.review_name
                            review_location.innerHTML = post.ACF.review_location
                            review_level.innerHTML = post.ACF.review_level + ' Figures'
                            review_rating.classList.add('star' + post.ACF.review_rating)
                            review_description.innerHTML = post.ACF.review_description
                            review_transcript.innerHTML = post.ACF.review_transcript

                        })
                    }
                ).catch(function(err) {
                    console.log('Fetch Error :-S', err)
                    alert('Looks like there was a problem. Please reload the page or contact us')
                }
            )
        }

        


        const loadResults = () =>  {

            let resultsApi = siteData.homeUrl + '/wp-json/wp/v2/results?per_page=25',
                main_result = document.getElementById("main_result"),
                display_results = document.getElementById("display_results"),
                loader2 = document.querySelector(".loader2");

                fetch(resultsApi)
                    .then (
                        function(response) {

                            if (response.status !== 200) {
                                alert('Looks like there was a problem. Please reload the page or contact us')
                                return
                            }

                            response.json().then(function(resultsData) {

                                loader2.setAttribute('style', 'display: none;')

                                resultsData.forEach(function (res) {

                                    let review_ID = res.id,
                                        review_video = res.ACF.review_video,
                                        review_title_raw = res.ACF.review_title,
                                        review_title = review_title_raw.replace(/"/g, '&quot;');
                                        review_name = res.ACF.review_name,
                                        review_location = res.ACF.review_location,
                                        review_level = res.ACF.review_level,
                                        review_rating = res.ACF.review_rating,
                                        review_description_raw = res.ACF.review_description,
                                        review_description = review_description_raw.replace(/"/g, '&quot;');
                                        review_link = res.link,
                                        review_screenshot = res.ACF.review_screenshot;

                                        display_results.innerHTML += `<div class="reviews-thumb">
                                                                            <a class="reviews-thumb-wrap blog-thumb"
                                                                                data-id="${review_ID}"
                                                                                data-video='${review_video}'
                                                                                data-title="${review_title}"
                                                                                data-name="${review_name}"
                                                                                data-location="${review_location}"
                                                                                data-level="${review_level}"
                                                                                data-rating="${review_rating}"
                                                                                data-description="${review_description}"
                                                                                href="${review_link}">
                                                                                <span class="play-button"></span>
                                                                                <img src="${review_screenshot}" width="500" height="281" alt="${review_title}">
                                                                                <div class="reviews-info clear">
                                                                                    <div class="exc-rate star${review_rating}"></div>
                                                                                    <div class="rvinfo-lft">
                                                                                        <b>${review_name}</b>
                                                                                        <div>${review_location}</div>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </div>`

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

        loadPost();
        loadResults();
        

    </script>

<?php get_footer(); ?>