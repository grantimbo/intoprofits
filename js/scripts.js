// ---------------------------
// Author : Grant Imbo
// Site : grantimbo.com
// Version : 2.12.3
// Description : Custom Script for intoprofits.com
// ---------------------------


$(function() {


	menuShow = function() {

		// menu function
		$(document).on('click', 'a.icon-menu.mobile-menu', function(e) {
			e.preventDefault();
			$('.header .mobile-menu-wrap').show();
		});

		$(document).on('click', 'a.icon-cross.mobile-menu', function(e) {
			e.preventDefault();
			$('.header .mobile-menu-wrap').hide();
		});

		$(window).resize(function() {
			if ($(window).width() > 768) {
			   $('.header .mobile-menu-wrap').hide();
			}
		});
	},


	menuActive = function() {

		if ( $('body').hasClass('post-type-archive-results') || $('body').hasClass('single-results')) {

			$(".mobile-menu-wrap a:contains('Student Results')").closest('li').addClass('active')
			$(".mobile-menu-wrap a:contains('Channel')").closest('li').removeClass('active')

			$(".desktop-menu-wrap a:contains('Student Results')").closest('li').addClass('active')
			$(".desktop-menu-wrap a:contains('Channel')").closest('li').removeClass('active')
		}


		if ($('body').hasClass('post-type-archive-programs') || $('body').hasClass('single-programs')) {

			$(".mobile-menu-wrap a:contains('Programs')").closest('li').addClass('active')
			$(".mobile-menu-wrap a:contains('Channel')").closest('li').removeClass('active')

			$(".desktop-menu-wrap a:contains('Programs')").closest('li').addClass('active')
			$(".desktop-menu-wrap a:contains('Channel')").closest('li').removeClass('active')
		}


	},


	blogFuntions = function() {

		$(document).on('click', 'a.transcript-readmore', function(e) {
			e.preventDefault();
			$('.video-transcript').toggleClass('expanded');

			$(this).text(($(this).text() == 'Read More') ? 'Read Less' : 'Read More');
		});


		$(document).on('click', 'a.mp3-btn', function(e) {
			e.preventDefault();
			$('.mp3-wrap').toggleClass('expanded');
		});
	},


	openReview = function() {

		$(document).on('click', '.reviews-thumb-wrap', function(e) {
			e.preventDefault();
		
			let title = this.getAttribute('data-title');
			let video = this.getAttribute('data-video');
			let name = this.getAttribute('data-name');
			let location = this.getAttribute('data-location');
			let level = this.getAttribute('data-level');
			let rating = this.getAttribute('data-rating');
			let link = this.getAttribute('href');
			let description = this.getAttribute('data-description');
		
			$('#modal .exc-ttle').html( title )
			$('#modal .exc-vid').html( video )
			$('#modal .exc-nme').html( name )
			$('#modal .exc-nme2').html( name )
			$('#modal .exc-loc').html( location )
			$('#modal .exc-desc').html( description )
			$('#modal .exc-lvl').html( level + ' Figures' )
			document.querySelector('#modal .exc-rate').setAttribute('class', 'exc-rate star' + rating )
			document.querySelector('#modal .exc-link').setAttribute('href', link)
		
		
			$('#modal').toggleClass('open');
			$('html').css('overflow-y','hidden');
			$('body').css('overflow-y','hidden');
		
		});
		
		
		$(document).on('click', 'span.close-modal', function(e) {
			$('#modal').toggleClass('open');
			$('html').css('overflow-y','visible');
			$('body').css('overflow-y','visible');
			$('#modal .exc-vid').html('')
		});

	},


	metricScroll = function() {
		
		$(window).scroll(function (e) {

			const scroll = $(window).scrollTop();
			const containerHeight = $( ".single-review-container aside" ).height() - 50;
			const metricHeight = $( ".single-review-container .metrics" ).height();
			const cutPoint = containerHeight - metricHeight;
		
			if (scroll > cutPoint) {
				
				$('.metrics').addClass('float');
			} else {
				$('.metrics').removeClass('float');
				
			}
		});

	},


	reviewsVideoPlayer = function() {

		// check if the class exist
		if ( $('.results-playlist-main').length ) {

			var firstVid = $('.res-link:first-child')[0].dataset.video

			$('a.res-link:first-child').addClass('active')
			$('.results-playlist-main').html(firstVid)

			// video playlist link
			$(document).on('click', '.results-playlist-vids .res-link', function (e) {
				e.preventDefault();

				let video = this.getAttribute('data-video');

				$('.results-playlist-main').html(video)
				$(this).addClass('active').siblings().removeClass('active')
			})
			
		}

	},

	
	curriculum = function() {

		// add active first child
		$('.curriculum-contents .curriculum-menu:first-child').addClass('active').children('.cur-submen').addClass('active')


		// toggle - collapse all 
		$(document).on('click', '.curriculum-toggle', function (e) {
			e.preventDefault();

			if ($(this).html() == 'Expand All') {
				$(this).html('Collapse All')
				$('.curriculum-menu').addClass('active')
				$('.cur-submen').addClass('active')
				$('.cur-submen-items').addClass('active')
			} else {
				$(this).html('Expand All')
				$('.curriculum-menu').removeClass('active')
				$('.cur-submen').removeClass('active')
				$('.cur-submen-items').removeClass('active')
			}
		})

		// accordion modules
		$(document).on('click', '.curriculum-menu a', function (e) {
			e.preventDefault();

			$(this).siblings('div').toggleClass('active')
			$(this).closest('div').toggleClass('active')

		})

		// accordion modules sub menu
		$(document).on('click', 'span.cur-toggle', function (e) {
			e.preventDefault();

			console.log($(this).toggleClass('active').closest('.cur-submen-title').siblings('.cur-submen').toggleClass('active'))

		})

	},


	lastUpdated = function() {

		const m = new Date();
		m.setDate(m.getDate()-2);

		var dateString =  ("0" + (m.getUTCMonth()+1)).slice(-2) + "/" +  ("0" + m.getUTCDate()).slice(-2) + "/" + m.getUTCFullYear();

		$('.last-updated').html('Last updated: ' + dateString );
	},

		
	

	/*--------------------------------
	    Run functions
	--------------------------------*/
	menuShow();
	menuActive();
	blogFuntions();
	openReview();
	metricScroll();
	reviewsVideoPlayer();
	curriculum();
	lastUpdated();

	console.log('-------------------------------');
	console.log('|    Written by Grant Imbo    |');
	console.log('-------------------------------');


});