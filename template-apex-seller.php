<?php /*
Template Name: Apex Seller
Template Post Type: programs
*/ 

get_header(); 

$templateUrl = get_template_directory_uri();
$homeUrl = get_home_url();

?>



<main class="apex-section container">
    <div class="wrap">
    	<h1 class="apex-section-title" id="main_title"></h1>
		
		<div class="apex-program-content">
			<img class="apex-program-graphic" src="<?php echo $templateUrl; ?>/img/apex-seller-product-graphic.png" width="537" height="392" alt="Apex Seller">

			<div class="apex-side-wrap">
				<h1>Apex Seller&#8482;</h1>
				<div class="ratings"><div class="exc-rate star5"></div><a href="<?php echo $homeUrl; ?>/results" class="see-results">See student results</a></div>
				<span class="last-updated">Last updated: 01/30/2021</span>
				
				<ul id="side_features"></ul>

				<a id="side_btn" href="" class="button"></a> 
				<p id="side_footer_text" class="info"></p>
			</div>
		</div>

    </div>
</main>




<div class="apex-section apex-graphics">
	<div class="wrap">
		<section class="apex-graphics-icons">
			<figure>
				<div class="apex-icon stage"></div>
				<figcaption><b>Stage:</b>Scaling Up</figcaption>
			</figure>

			<figure>
				<div class="apex-icon objective"></div>
				<figcaption><b>Objective:</b>7&#8209; to 8&#8209;Figure Business</figcaption>
			</figure>

			<figure>
				<div class="apex-icon length"></div>
				<figcaption><b>Length:</b>6 Weeks</figcaption>
			</figure>

			<figure>
				<div class="apex-icon format"></div>
				<figcaption><b>Format:</b>Online</figcaption>
			</figure>

			<figure>
				<div class="apex-icon access"></div>
				<figcaption><b>Access:</b> Lifetime</figcaption>
			</figure>
		</section>
		
		
		<div class="apex-what-who-why" id="what_who_why"></div>

	</div>
</div>



<div class="apex-section complete-connected">
	<div class="wrap">
		<h1 class="apex-section-title withSub">Complete & Connected</h1>
		<p class="apex-section-description"><span id="connected_description"></span></p>
		
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
</div>



<div class="apex-section student-results">
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

        <a href="<?php echo $homeUrl; ?>/results" class="see-reviews">See more of our student success stories</a>

	</div>
</div>



<div class="apex-section course-curriculum">
	<div class="wrap">
	
		<h1 class="apex-section-title withSub">Apex Seller&#8482; Course Curriculum</h1>
		<p class="apex-section-description" id="course_curriculum_description"></p>
	
	
	    <div class="curriculum">

	        <span href="#" class="curriculum-toggle">Expand All</span>
	        <?php if( have_rows('overall_stats', 'option') ): while( have_rows('overall_stats','option') ): the_row(); ?>
	            <span class="curTme"><?php the_sub_field('overall_time'); ?></span>
	            <span class="curMod"><?php the_sub_field('all_modules'); ?></span>
			<?php endwhile; endif; ?>

			
			<div class="curriculum-contents">
	
				<?php if( have_rows('modules', 'option') ): while( have_rows('modules','option') ): the_row(); ?>
				
					<div class="curriculum-menu">
						<a href="#"><span class="dashicons"></span> <?php the_sub_field('module_menu'); ?><span class="cur-time"><?php the_sub_field('module_time'); ?></span><span class="cur-modules"><?php the_sub_field('module_count'); ?> Modules</span></a>
						
						<div class="cur-submen">
						<?php if( have_rows('module_submenu') ): while( have_rows('module_submenu') ): the_row(); ?>
							<div class="cur-submen-items">
		
								<?php  if( get_row_layout() == 'sub_menu' ): ?>
									<div class="cur-submen-title"><span class="dashicons cur-vid"></span><?php the_sub_field('module_subitem'); ?><span class="dashicons cur-toggle"></span> <span class="cur-time"><?php the_sub_field('module_subtime'); ?></span></div>
									<div class="cur-submen">
										<?php the_sub_field('module_subcontents'); ?>
									</div>
								<?php elseif( get_row_layout() == 'action_items' ): ?>
									<div class="cur-submen-title"><span class="dashicons cur-action"></span>Action Items<span class="cur-time"><?php the_sub_field('module_action'); ?></span></div>
		
								<?php elseif( get_row_layout() == 'question_menu' ): ?>
									<div class="cur-submen-title"><span class="dashicons cur-question"></span>Questions<span class="cur-time"><?php the_sub_field('module_question'); ?></span></div>
								<?php endif; ?>
		
		
							</div>
						<?php endwhile; endif; ?>
						</div>
					
					</div>
				
				<?php endwhile; endif; ?>
			
			</div>
	       
	    </div>
	</div>
</div>



<div class="apex-section program-components">
	<div class="wrap">
		<h1 class="apex-section-title withSub">Apex Seller&#8482; Program Components</h1>
		<p class="apex-section-description"><span id="components_description"></span></p>
		
		<section class="component-icons">
			<figure>
				<div class="imgComponents portal"></div>
				<figcaption><b>Online Content Portal</b><span id="online_content_portal"></span></figcaption>
			</figure>
			
			<figure class="for-mobile">
				<div class="imgComponents documents"></div>
				<figcaption><b>Proprietary Process Documents</b><span id="proprietary_process_documents"></span></figcaption>
			</figure>

			<figure class="for-desktop">
				<figcaption><b>Proprietary Process Documents</b><span id="proprietary_process_documents2"></span></figcaption>
				<div class="imgComponents documents"></div>
			</figure>
			
			<figure>
				<div class="imgComponents qanda"></div>
				<figcaption><b>Live Q&A Calls</b><span id="live_qa_calls"></span></figcaption>
			</figure>
			
			<figure class="for-mobile">
				<div class="imgComponents community"></div>
				<figcaption><b>Exclusive Student Community</b><span id="exclusive_student_community"></span></figcaption>
			</figure>

			<figure class="for-desktop">
				<figcaption><b>Exclusive Student Community</b><span id="exclusive_student_community2"></span></figcaption>
				<div class="imgComponents community"></div>
			</figure>
			
			<figure>
				<div class="imgComponents software"></div>
				<figcaption><b>Private Industrial Grade Software</b><span id="private_industrial_grade_software"></span></figcaption>
			</figure>
		</section>
		
	</div>
</div>



<div class="apex-section requirements">
	<div class="wrap">
		<h1 class="apex-section-title">Apex Seller&#8482; Entry Requirements</h1>

		<ul>
		
			<li>
				<h5>Program Overview</h5>
				<section class="apex-graphics-icons">
					<figure>
						<div class="apex-icon stage"></div>
						<figcaption><b>Stage:</b>Scaling Up</figcaption>
					</figure>

					<figure>
						<div class="apex-icon objective"></div>
						<figcaption><b>Objective:</b>7- to 8&#8209;Figure Business</figcaption>
					</figure>

					<figure>
						<div class="apex-icon length"></div>
						<figcaption><b>Length:</b>6 Weeks</figcaption>
					</figure>

					<figure>
						<div class="apex-icon format"></div>
						<figcaption><b>Format:</b>Online</figcaption>
					</figure>

					<figure>
						<div class="apex-icon access"></div>
						<figcaption><b>Access:</b> Lifetime</figcaption>
					</figure>
				</section>
			</li>
			
			
			<li>
				<h5>Entry Requirements</h5>
				<span id="entry_requirements"></span>
			</li>
			
			
			<li>
				<h5>Application Process</h5>
				<span id="application_process"></span>
				<a href="" id="btn_app_process" class="button">APPLY NOW</a>
			</li>

		</ul>


	</div>
</div>



<div class="apex-section overview">
	<div class="wrap">
    	<h1 class="apex-section-title" id="footer_title"></h1>
    	
    	<div class="apex-program-content">
			<img class="apex-program-graphic" src="<?php echo $templateUrl; ?>/img/apex-seller-product-graphic.png" alt="Apex Seller">

			<div class="apex-side-wrap">
				<h1>Apex Seller&#8482;</h1>
				<div class="ratings"><div class="exc-rate star5"></div><a href="<?php echo $homeUrl; ?>/results" class="see-results">See student results</a></div>
				<span class="last-updated">Last updated: 01/30/2021</span>
				
				<ul id="side_features2"></ul>

				<p class="info" id="side_footer_text2"></p>
				
			</div>
		</div>

    </div>
</div>



<div class="apex-section get-started">
	<p>Get started for free</p>
	<a href="" class="button" id="btn_footer"></a>
</div>

<script>
    const loadSite = () => {

        let pageRest = siteData.homeUrl + '/wp-json/wp/v2/programs/<?php echo get_the_ID(); ?>',

			main_title = document.getElementById("main_title"),
			side_features = document.getElementById("side_features"),
			side_btn = document.getElementById("side_btn"),
			side_footer_text = document.getElementById("side_footer_text"),
			
			what_who_why = document.getElementById("what_who_why"),

            connected_description = document.getElementById("connected_description"),
			focus = document.getElementById("focus"),
			product_strategy = document.getElementById("product_strategy"),
			supply_chain = document.getElementById("supply_chain"),
			cash_flow = document.getElementById("cash_flow"),
			systems_data = document.getElementById("systems_data"),
			paid_advertising = document.getElementById("paid_advertising"),
			organic_optimization = document.getElementById("organic_optimization"),
			conversions_aov = document.getElementById("conversions_aov"),
			hiring_managing_a_team = document.getElementById("hiring_managing_a_team"),
			operations = document.getElementById("operations"),
			scaling_automation = document.getElementById("scaling_automation"),
			product_evolution = document.getElementById("product_evolution"),

			// Program Components
            components_description = document.getElementById("components_description"),
			online_content_portal = document.getElementById("online_content_portal"),
			proprietary_process_documents = document.getElementById("proprietary_process_documents"),
			proprietary_process_documents2 = document.getElementById("proprietary_process_documents2"),
			live_qa_calls = document.getElementById("live_qa_calls"),
			exclusive_student_community = document.getElementById("exclusive_student_community"),
			exclusive_student_community2 = document.getElementById("exclusive_student_community2"),
			private_industrial_grade_software = document.getElementById("private_industrial_grade_software"),

			// Entry Requirements
			entry_requirements = document.getElementById("entry_requirements"),
			application_process = document.getElementById("application_process"),
			btn_app_process = document.getElementById("btn_app_process"),

			
			side_features2 = document.getElementById("side_features2"),
			side_footer_text2 = document.getElementById("side_footer_text2"),
			

            footer_title = document.getElementById("footer_title"),
			footer_text = document.getElementById("footer_text"),

			btn_footer = document.getElementById("btn_footer");

            fetch(pageRest)
                .then (
                    function(response) {

                        if (response.status !== 200) {
                            console.log('Looks like there was a problem.')
                            alert('Looks like there was a problem. Please reload the page or contact us')
                            return
                        }

                        response.json().then(function(data) {

							main_title.innerHTML = data.ACF.main_title
							data.ACF.side_features.forEach(function (ftrs) {
								side_features.innerHTML += '<li>'+ ftrs.feature_list_text +'</li>'
								side_features2.innerHTML += '<li>'+ ftrs.feature_list_text +'</li>'
							});
							side_btn.innerHTML = data.ACF.side_button_text
							side_btn.setAttribute('href', data.ACF.side_button_link)
							side_footer_text.innerHTML = data.ACF.side_footer_text


							
							data.ACF.features.forEach(function (ftrs) {
								what_who_why.innerHTML += `<h5>` + ftrs.overview_title + `</h5><p>` + ftrs.overview_description + `</p>`
							});

							// Complete ~ Connected
							connected_description.innerHTML = data.ACF.connected_description
							focus.innerHTML = data.ACF.focus
							product_strategy.innerHTML = data.ACF.product_strategy
							supply_chain.innerHTML = data.ACF.supply_chain
							cash_flow.innerHTML = data.ACF.cash_flow
							systems_data.innerHTML = data.ACF.systems_data
							paid_advertising.innerHTML = data.ACF.paid_advertising
							organic_optimization.innerHTML = data.ACF.organic_optimization
							conversions_aov.innerHTML = data.ACF.conversions_aov
							hiring_managing_a_team.innerHTML = data.ACF.hiring_managing_a_team
							operations.innerHTML = data.ACF.operations
							scaling_automation.innerHTML = data.ACF.scaling_automation
							product_evolution.innerHTML = data.ACF.product_evolution

							// Program Components
							components_description.innerHTML = data.ACF.components_description
							online_content_portal.innerHTML = data.ACF.online_content_portal
							proprietary_process_documents.innerHTML = data.ACF.proprietary_process_documents
							proprietary_process_documents2.innerHTML = data.ACF.proprietary_process_documents
							live_qa_calls.innerHTML = data.ACF.live_qa_calls
							exclusive_student_community.innerHTML = data.ACF.exclusive_student_community
							exclusive_student_community2.innerHTML = data.ACF.exclusive_student_community
							private_industrial_grade_software.innerHTML = data.ACF.private_industrial_grade_software

							// Entry Requirements
							entry_requirements.innerHTML = data.ACF.entry_requirements
							application_process.innerHTML = data.ACF.application_process
							btn_app_process.setAttribute('href', data.ACF.side_button_link)
							btn_app_process.innerHTML = data.ACF.side_button_text

							
							side_footer_text2.innerHTML = data.ACF.side_footer_text

							footer_title.innerHTML = data.ACF.footer_title

							btn_footer.innerHTML = data.ACF.footer_text
							btn_footer.setAttribute('href', data.ACF.footer_link)


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
