<?php get_header(); ?>

    <!-- reviews head -->
    <main role="main" class="container reviews-head">
        <div class="wrap">
            <h1>Client Results</h1>
            <p>Our clients have a unique advantage and they get real-life business results. <br> But you don’t have to take our word for it: Hear what they have to say.</p>
        </div>
    </main>

    <div class="container">

        <div class="wrap result-count" id="results_count"></div>

        <!-- results query -->
        <div class="wrap clear " id="display_results">
            <div class="loader"></div>
        </div>
        
        <!-- review footer -->
        <div class="reviews-footer">
            <a href="<?php echo get_home_url(); ?>/case-study" class="button go-intoprofits">ACCESS OUR $200M+ CASE STUDY</a>
        </div>
            
    </div>
    
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

        const loadResults = () =>  {

            let resultsApi = siteData.homeUrl + '/wp-json/wp/v2/results?per_page=25',
                main_result = document.getElementById("main_result"),
                display_results = document.getElementById("display_results"),
                results_count = document.getElementById("results_count"),
                loadingResults = document.querySelector(".loader");

                fetch(resultsApi)
                    .then (
                        function(response) {

                            if (response.status !== 200) {
                                alert('Looks like there was a problem. Please reload the page or contact us')
                                return
                            }

                            response.json().then(function(resultsData) {

                                results_count.innerHTML = resultsData.length + ' reviews'
                                loadingResults.setAttribute('style', 'display: none;')

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

        loadResults();
        

    </script>

<?php get_footer(); ?>