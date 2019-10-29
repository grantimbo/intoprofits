// ---------------------------
// Author : Grant Imbo
// Site : grantimbo.com
// Version : 2.9
// Description : Custom Script for audunsson.com
// ---------------------------


$(function() {


	metrics = function() {

		function numberWithCommas(number) {
		    var parts = number.toString().split(".");
		    parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
		    return parts.join(".");
		}


		$('.count').each(function () {
		    $(this).prop('Counter',0).animate({
		        Counter: $(this).text()
		    }, {
		        duration: 2000,
		        easing: 'swing',
		        step: function (now) {
		            $(this).text(Math.ceil(now));

		            var num = $(this).text();
	                var commaNum = numberWithCommas(num);
	                $(this).text(commaNum);
		        }
		    });
		});

	},


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

		
	

	/*--------------------------------
	    Run functions
	--------------------------------*/
	menuShow();
	menuActive();
	metrics();
	blogFuntions();
	openReview();
	metricScroll();


	console.log('-------------------------------');
	console.log('|    Written by Grant Imbo    |');
	console.log('-------------------------------');


});