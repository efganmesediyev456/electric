$(document).on('ready', function() {
	"use strict";
	//===============Mobile nav Function============
	var manu_btn = $('#menu');
	var navigation = $('.navigation');
	manu_btn.on('click', function() {
		if ($(window).width() <= 767) {
			$('.navigation').slideToggle('normal');
		}
		return false;
	});
	var navigationLink = $('.navigation>ul> li >a');
	var navigationLi = $('.navigation>ul>li');
	var navigationUl = $('.navigation>ul> li >ul');
	navigationLink.on('click', function() {
		if ($(window).width() <= 767) {
			navigationLi.removeClass('on');
			navigationUl.slideUp('normal');
			if ($(this).next().next('ul').is(':hidden') == true) {
				$(this).parent('li').addClass('on');
				$(this).next().next('ul').slideDown('normal');
			}
		}
	});
	var submenuLink = $('.sub-menu >a');
	var submenu = $('.sub-menu');
	var submenuUl = $('.sub-menu >ul');
	submenuLink.on('click', function() {
		if ($(window).width() <= 767) {
			submenu.removeClass('on');
			submenuUl.slideUp('normal');
			if ($(this).next().next('ul').is(':hidden') == true) {
				$(this).parent('li').addClass('on');
				$(this).next().next('ul').slideDown('normal');
			}
		}
	});
	//===============Submenu Function============
	var navigationLink = $('.mobile-menu> li>a');
	var navigationLi = $('.mobile-menu> li');
	var navigationUl = $('.mobile-menu> li>ul');
	navigationLink.on('click', function() {
		if ($(window).width() <= 991) {
			navigationLi.removeClass('on');
			navigationUl.slideUp('normal');
			if ($(this).next().next('ul').is(':hidden') == true) {
				$(this).parent('li').addClass('on');
				$(this).next().next('ul').slideDown('normal');
			}
		}
		//return false;
	});
	/*----------------------------------------------
	 -----------index2 Sticky Header  --------------------
	 -------------------------------------------------*/
	function stricky_headerJs() {
		var stricky_header_top = $('.stricky-header__top');
		if (stricky_header_top.length) {
			var stricky_header_top_Offset = stricky_header_top.offset().top;
			$(window).on('scroll', function() {
				var top_scroll = $(window).scrollTop();
				if (top_scroll > stricky_header_top_Offset) {
					stricky_header_top.addClass('stricky');
				} else {
					stricky_header_top.removeClass('stricky');
				}
			});
		}
	}

	stricky_headerJs();
	$(window).on('resize', function() {
		stricky_headerJs();
	});

	//=============Tab Function=============
	var tb = $('.tab_funct');
	var serviceContent = $('.service-test');
	tb.on('click', function() {
		tb.removeClass('active');
		$(this).addClass('active');
		var tabShow = $(this).data('tab');
		serviceContent.css('display', 'none');
		$('.' + tabShow).css('display', 'block');
		serviceContent.removeClass('active');
		var data_text = $(this).data('tab');
		setTimeout(function() {
			$('.home_one').find('.' + data_text).addClass('active');
		}, 50);
	});
	// testimonial_carosule_home_One
	var testimonial_carosule = $('.testimonial_carosule');
	testimonial_carosule.owlCarousel({
		loop : true,
		margin : 10,
		nav : true,
		dots : false,
		navText : ["<i class='ion-ios-arrow-back'></i>", "<i class='ion-ios-arrow-forward'></i>"],
		responsive : {
			0 : {
				items : 1
			},
			767 : {
				items : 1
			},
			992 : {
				items : 2
			},
			1200 : {
				items : 2
			}
		}
	});
	// About_team
	var About_team = $('#team-carousel');
	About_team.owlCarousel({
		loop : true,
		margin : 10,
		nav : true,
		dots : false,
		navText : ["<i class='ion-ios-arrow-back'></i>", "<i class='ion-ios-arrow-forward'></i>"],
		responsive : {
			0 : {
				items : 1
			},
			767 : {
				items : 1
			},
			992 : {
				items : 2
			},
			1200 : {
				items : 3
			}
		}
	});

	//Home_services_two
	var services_two = $(".services_two");
	services_two.owlCarousel({
		loop : true,
		nav : true,
		dots : false,
		margin : 30,
		responsive : {
			0 : {
				items : 1
			},
			767 : {
				items : 2
			},
			992 : {
				items : 3
			},
			1200 : {
				items : 3
			}
		},
		navText : ["<i class='ion-ios-arrow-back'></i>", "<i class='ion-ios-arrow-forward'></i>"]

	});
	/*----------------------------------------------
	-----------Slider Function  --------------------
	-------------------------------------------------*/
	//Blog Slider
	var blog_carousel = $("#blog-carousel");
	blog_carousel.owlCarousel({
		loop : true,
		margin : 10,
		nav : true,
		dots : false,
		center : true,
		autoplay : true,
		autoplayTimeout : 2000,
		autoplayHoverPause : true,
		responsive : {
			0 : {
				items : 1

			},
			600 : {
				items : 1

			},
			1000 : {
				items : 1

			}
		},
		navText : ["<i class='ion-ios-arrow-back'></i>", "<i class='ion-ios-arrow-forward'></i>"]

	});
	//==================Accordion Function===============
	var accordion_title = $(".accordion-title");
	var accordion_content = $(".accordion-content");
	accordion_title.on('click', function() {
		$(this).next().slideToggle("easeOut");
		$(this).toggleClass("active");
		accordion_title.toggleClass("active");
		accordion_content.not($(this).next()).slideUp("easeIn");
		accordion_title.not($(this)).removeClass("active");
	});
	accordion_content.addClass("defualt-hidden");

	//==========================================
	//===============Video Function============
	var videoJs = $('#video-btn');
	var videoFrame = $('.video_frame');
	videoJs.on('click', function() {
		var video_data = $(this).next().attr('data-video');
		var video_frame = $(this).after("<iframe src='' class='video_frame'>  </iframe>");
		videoFrame.attr('src', video_data);
		$(this).hide();
		return false;
	});

	//==========================================
	//===============counter Function========
	var counterJs = $('.counter');
	if (counterJs.length) {
		counterJs.appear(function() {
			counterJs.each(function() {
				var e = $(this),
				    a = e.attr("data-count");
				$({
					countNum : e.text()
				}).animate({
					countNum : a
				}, {
					duration : 8e3,
					easing : "linear",
					step : function() {
						e.text(Math.floor(this.countNum));
					},
					complete : function() {
						e.text(this.countNum);
					}
				});

			});
		});
	}

	//==========================================
	//===============Datepicker Function========
	var datepickerJs = $('.datepicker');
	if (datepickerJs.length) {
		datepickerJs.datepicker();
	}

	//==========================================
	//===============Fancylight box Function========
	/*var galleryJs = $('#gallery');
	var fancylightJs = $(".fancylight");
	if (galleryJs.length) {
		fancylightJs.fancybox({
			openEffect : 'elastic',
			closeEffect : 'elastic',
			helpers : {
				media : {}
			}
		});
		var fancyMedia = $(".fancy-media");
		fancyMedia.fancybox({
			width : 620, // or whatever
			height : 420,
			type : "iframe",
			iframe : {
				preload : false
			}
		});
	}*/

});

//=============Tab Function=============
var tab_link = $('.tab_link');
var servi_test = $('.servi-test');
tab_link.on('click', function() {
	tab_link.removeClass('active');
	$(this).addClass('active');
	var tabShow = $(this).data('tab');
	servi_test.css('display', 'none');
	$('.' + tabShow).css('display', 'block');
	servi_test.removeClass('active');
	var data_text = $(this).data('tab');
	setTimeout(function() {
		$('.home_one').find('.' + data_text).addClass('active');
	}, 50);
});

$(window).on('load', function() {
	//===============Loader Function========
	var preloaderJs = $("#preloader");
	preloaderJs.fadeOut();
	//==========================================
	//===============Doctors filter Function========
	var isotopeJs = $('#isotope');
	if (isotopeJs.length) {
		// init Isotope
		var $grid = $('.isotope').isotope({
			itemSelector : '.item	',
			percentPosition : true,
			layoutMode : 'fitRows',
			fitRows : {
				gutter : 0
			}
		});
		// filter items on button click
		var fbg = $('.filter-button-group');
		var dsSpan = $('.doctor-specialist span');
		fbg.on('click', 'a', function() {
			var filterValue = $(this).attr('data-filter');
			$grid.isotope({
				filter : filterValue
			});
			var text_value = $(this).text();
			dsSpan.text(text_value);
		});
	}
	var masonryJs = $('.masonry');
	if (masonryJs.length) {
		// init Isotope
		var $grid = masonryJs.isotope({
			itemSelector : '.item	',
			percentPosition : true,
			layoutMode : 'fitRows',
			fitRows : {
				gutter : 0
			}
		});
	}
	/* Map address pin function*/
	var mapJs = $('#map');
	if (mapJs.length) {
		var map = new GMaps({
			div : '#map',
			lat : 41.402619,
			lng : -74.333062,
			disableDefaultUI : true,
			zoom : 10,
			scrollwheel : false
		});
		map.drawOverlay({
			lat : map.getCenter().lat(),
			lng : map.getCenter().lng(),
			content : '<a href="#" class="mapmarker"><i class="ion-ios-location"></i></a>',
			verticalAlign : 'top',
			horizontalAlign : 'center'
		});
	}

});

//=============Search-header=============
$('.search-header').on('click' , function(e){
    e.preventDefault();
    $('.search-input-header').addClass('anim');
    $('.search-input-header').animate({
        top: 0 + '%',
        opacity: 1
    })
    
})
