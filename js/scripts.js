// ---------------------------
// Author : Grant Imbo
// Site : grantimbo.com
// Version : 2.5
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


	/*--------------------------------
	    Run functions
	--------------------------------*/
	menuShow();
	metrics();
	blogFuntions();


	console.log('-------------------------------');
	console.log('|    Written by Grant Imbo    |');
	console.log('-------------------------------');


});