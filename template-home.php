<?php /* Template Name: Home */ 

get_header(); 

$tempLink = get_template_directory_uri(); 
$siteLink = get_home_url();

?>


<section class="home-feature-graph">
    <div class="v-graph-wrap">
        <video autoplay muted loop>
			<source src="<?php echo $tempLink; ?>/videos/graph.mp4" type="video/mp4">
			<source src="<?php echo $tempLink; ?>/videos/graph.ogg" type="video/ogg">
		</video>
    </div>
    <div class="v-graph-overlay"></div>
    <div class="wrap">
        <div class="v-graph-content">
        	<p id='main_pre_title'></p>
            <h1 id="main_title"></h1>
        </div>
        <div class="v-graph-button">
            <a href="<?php echo $siteLink; ?>/case-study" class="btn-seehow"><span id="main_button_text"></span></a>
        </div>
    </div>
</section>



<section class="apex-section pro-grade">
    <div class="wrap">
        <h1 class="apex-section-title withSub" id="pro_grade_title"></h1>
        <p class="apex-section-description" id="pro_grade_p1"></p>
        <h2>“<span id="pro_grade_qoute"></span>”</h2>
        <p class="apex-section-description" id="pro_grade_p2"></p>
    </div>
</section>




<section class="apex-section complete-connected">
	<div class="wrap">
		<h1 class="apex-section-title withSub">Complete & Connected</h1>
		<p class="apex-section-description" id="connected_description"></p>
		
		<section class="complete-connected-icons">
			<figure>
				<div class="imgConnected focus"></div>
				<figcaption><b>Focus</b><span id="focus"></span></figcaption>
			</figure>
			
			<figure>
				<div class="imgConnected strategy"></div>
				<figcaption><b>Product strategy</b><span id="product_strategy"></span></figcaption>
			</figure>
			
			<figure>
				<div class="imgConnected chain"></div>
				<figcaption><b>Supply chain</b><span id="supply_chain"></span></figcaption>
			</figure>
			
			<figure>
				<div class="imgConnected cashflow"></div>
				<figcaption><b>Cash flow</b><span id="cash_flow"></span></figcaption>
			</figure>
			
			<figure>
				<div class="imgConnected systemdata"></div>
				<figcaption><b>Systems & data</b><span id="systems_data"></span></figcaption>
			</figure>
			
			<figure>
				<div class="imgConnected advertising"></div>
				<figcaption><b>Paid advertising</b><span id="paid_advertising"></span></figcaption>
			</figure>
			
			<figure>
				<div class="imgConnected optimization"></div>
				<figcaption><b>Organic optimization</b><span id="organic_optimization"></span></figcaption>
			</figure>
			
			<figure>
				<div class="imgConnected conversion"></div>
				<figcaption><b>Conversions & AOV</b><span id="conversions_aov"></span></figcaption>
			</figure>
			
			<figure>
				<div class="imgConnected hiring"></div>
				<figcaption><b>Hiring & managing a team</b><span id="hiring_managing_a_team"></span></figcaption>
			</figure>
			
			<figure>
				<div class="imgConnected operations"></div>
				<figcaption><b>Operations</b><span id="operations"></span></figcaption>
			</figure>
			
			<figure>
				<div class="imgConnected automation"></div>
				<figcaption><b>Scaling & automation</b><span id="scaling_automation"></span></figcaption>
			</figure>
			
			<figure>
				<div class="imgConnected evolution"></div>
				<figcaption><b>Product evolution</b><span id="product_evolution"></span></figcaption>
			</figure>
		</section>
	</div>
</section>



<section class="apex-section student-results">
	<div class="wrap">
	    <h1 class="apex-section-title withSub">Proven Student Results</h1>
	    <p class="apex-section-description" id="student_results_description"></p>
        <p class="what-they-say">Here is what our students have to say:</p>
        <div class="loader"></div>
	    <div class="results-playlist clear">
            <div class="results-playlist-main" id="main_result"></div>
			<div class="results-playlist-vids" id="display_results"></div>
		</div>

        <ul class="results-featured">
            <li><div class="imgFeatured ratings"></div></li>
            <li><div class="imgFeatured forbes"></div></li>
            <li><div class="imgFeatured huffpost"></div></li>
            <li><div class="imgFeatured bbc"></div></li>
        </ul>

        <a href="<?php echo $siteLink; ?>/results" class="see-reviews">See more of our student success stories</a>

	</div>
</section>



<section class="apex-section cutting-edge-program">
    <div class="wrap">
        <h1 class="apex-section-title withSub">Cutting-Edge Programs</h1>
        <p class="apex-section-description" id="programs_description_top"></p>

        <div class="apex-seller-graphic-home programs-apex-seller-wrap">

            <div class="wrap">
                <img src="<?php echo $tempLink; ?>/img/apex-seller-product-graphic.webp" alt="Apex Seller" width="450" height="328">
                <div class="programs-apex-graphic">
                    
                    <h1 id="programs_title"></h1>
                    <b><span id="programs_subtitle"></span> <span class="scaleProgbar"></span></b>
                    <p id="programs_description"></p>
                    <a id="programs_page" href="" class="button">Learn More</a>

                </div>
            </div>
        </div>
    </div>
</section>



<section class="apex-seller-overwhelmed">
    <div class="wrap">
        <p id="footer_pre_title"></p> 
        <h1 id="footer_title"></h1>
        <a id="footer_btn_link" href="" class="button"><span id="footer_btn_text"></span></a>
    </div>
</section>


<script>
    const loadSite = () => {

        let pageRest = siteData.homeUrl + '/wp-json/wp/v2/pages/2',

            cash_flow = document.getElementById("cash_flow"),
            connected_description = document.getElementById("connected_description"),
            conversions_aov = document.getElementById("conversions_aov"),
            focus = document.getElementById("focus"),
            footer_btn_link = document.getElementById("footer_btn_link"),
            footer_btn_text = document.getElementById("footer_btn_text"),
            footer_pre_title = document.getElementById("footer_pre_title"),
            footer_title = document.getElementById("footer_title"),
            hiring_managing_a_team = document.getElementById("hiring_managing_a_team"),
            main_button_text = document.getElementById("main_button_text"),
            main_pre_title = document.getElementById("main_pre_title"),
            main_title = document.getElementById("main_title"),
            operations = document.getElementById("operations"),
            organic_optimization = document.getElementById("organic_optimization"),
            paid_advertising = document.getElementById("paid_advertising"),
            pro_grade_p1 = document.getElementById("pro_grade_p1"),
            pro_grade_p2 = document.getElementById("pro_grade_p2"),
            pro_grade_qoute = document.getElementById("pro_grade_qoute"),
            pro_grade_title = document.getElementById("pro_grade_title"),
            product_evolution = document.getElementById("product_evolution"),
            product_strategy = document.getElementById("product_strategy"),

            programs_description_top = document.getElementById("programs_description_top"),
            programs_page = document.getElementById("programs_page"),
            programs_subtitle = document.getElementById("programs_subtitle"),
            programs_description = document.getElementById("programs_description"),
            programs_title = document.getElementById("programs_title"),

            scaling_automation = document.getElementById("scaling_automation"),
            student_results_description = document.getElementById("student_results_description"),
            supply_chain = document.getElementById("supply_chain"),
            systems_data = document.getElementById("systems_data");

            fetch(pageRest)
                .then (
                    function(response) {

                        if (response.status !== 200) {
                            console.log('Looks like there was a problem.')
                            alert('Looks like there was a problem. Please reload the page or contact us')
                            return
                        }

                        response.json().then(function(data) {

                            cash_flow.innerHTML = data.ACF.cash_flow
                            connected_description.innerHTML = data.ACF.connected_description
                            conversions_aov.innerHTML = data.ACF.conversions_aov
                            focus.innerHTML = data.ACF.focus
                            footer_btn_link.setAttribute('href', data.ACF.footer_btn_link)
                            footer_btn_text.innerHTML = data.ACF.footer_btn_text
                            footer_pre_title.innerHTML = data.ACF.footer_pre_title
                            footer_title.innerHTML = data.ACF.footer_title
                            hiring_managing_a_team.innerHTML = data.ACF.hiring_managing_a_team
                            main_button_text.innerHTML = data.ACF.main_button_text
                            main_pre_title.innerHTML = data.ACF.main_pre_title
                            main_title.innerHTML = data.ACF.main_title
                            operations.innerHTML = data.ACF.operations
                            organic_optimization.innerHTML = data.ACF.organic_optimization
                            paid_advertising.innerHTML = data.ACF.paid_advertising
                            pro_grade_p1.innerHTML = data.ACF.pro_grade_p1
                            pro_grade_p2.innerHTML = data.ACF.pro_grade_p2
                            pro_grade_qoute.innerHTML = data.ACF.pro_grade_qoute
                            pro_grade_title.innerHTML = data.ACF.pro_grade_title
                            product_evolution.innerHTML = data.ACF.product_evolution
                            product_strategy.innerHTML = data.ACF.product_strategy

                            programs_description_top.innerHTML = data.ACF.programs_description
                            programs_description.innerHTML = data.ACF.programs[0].description
                            programs_page.setAttribute('href', data.ACF.programs[0].page)
                            programs_subtitle.innerHTML = data.ACF.programs[0].subtitle
                            programs_title.innerHTML = data.ACF.programs[0].title
                            
                            scaling_automation.innerHTML = data.ACF.scaling_automation
                            student_results_description.innerHTML = data.ACF.student_results_description
                            supply_chain.innerHTML = data.ACF.supply_chain
                            systems_data.innerHTML = data.ACF.systems_data

                        })
                    }
                ).catch(function(err) {
                    console.log('Fetch Error :-S', err)
                    alert('Looks like there was a problem. Please reload the page or contact us')
                }
            )
    }


    const loadResults = () => {
        let resultsApi = siteData.homeUrl + '/wp-json/wp/v2/results?per_page=25',
            main_result = document.getElementById("main_result"),
            display_results = document.getElementById("display_results");
            loadingResults = document.querySelector(".loader");

            fetch(resultsApi)
                .then (
                    function(response) {

                        if (response.status !== 200) {
                            console.log('Looks like there was a problem.')
                            alert('Looks like there was a problem. Please reload the page or contact us')
                            return
                        }

                        response.json().then(function(resultsData) {

                            main_result.innerHTML = resultsData[0].ACF.review_video
							loadingResults.setAttribute('style', 'display: none;')
							
                            resultsData.forEach(function (res) {

                                let review_name = res.ACF.review_name,
                                    review_video = res.ACF.review_video,
                                    review_screenshot = res.ACF.review_screenshot,
                                    review_link = res.link,
                                    review_level = res.ACF.review_level,
                                    review_rating = res.ACF.review_rating;

                                    display_results.innerHTML += `<a class="res-link" title="${review_name}" data-video='${review_video}' href="${review_link}">
                                                                        <img src="${review_screenshot}" width="246" height="138" alt="${review_name}">
                                                                        <div class="res-info">
                                                                            <b>${review_name}</b>
                                                                            <div class="res-level">${review_level} Figures</div>
                                                                            <div class="res-rate"><div class="exc-rate star${review_rating}"></div></div>
                                                                        </div>
                                                                    </a>`;
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


    loadSite();
    loadResults();
    

</script>


<?php get_footer(); ?>