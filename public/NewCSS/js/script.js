// ActionScript Document
$(function () {
	set_toggle_menu();
	set_go_top();
	set_mobile_menu_toggle();
	set_sidebar();
	set_carousel();
});


function set_toggle_menu() {
	$('.toggle_btn').click(function () {
		$('.toggle_btn').toggleClass('active');
		$('body').toggleClass('nav_active');
		$('#body_overly').toggle();
	});
}


function set_mobile_menu_toggle() {

	$('#mobile_nav li .list .sub_title').click(function () {
		$(this).parent().toggleClass('active');
	});

}

function set_go_top() {

	var iScrollPos = 0;

	$(window).scroll(function () {
		var iCurScrollPos = $(this).scrollTop();
		if (iCurScrollPos > iScrollPos) {
			//Scrolling Down
			$('.back_top').addClass('show');
		} else {
			$('.back_top').removeClass('show');
		}

	});
	$('.back_top').click(function () {
		$('html,body').animate({
			scrollTop: 0
		}, 'slow');
		return false;
	});
}



//.main .outer .row02 .countdown_div .gray_bg
function set_sidebar() {

	set_sidebar_pos(".main .outer .row01 .navi_outer");
	if ($(window).width() > 767) {
		set_sidebar_pos(".main .outer .row02 .countdown_div .countdown_outer");
	}
	$(window).resize(function () {
		set_sidebar_pos(".main .outer .row01 .navi_outer");
		if ($(window).width() > 767) {
			set_sidebar_pos(".main .outer .row02 .countdown_div .countdown_outer");
		}
	});
}


// function set_sidebar_pos(sidebar_id) {
// 	var mainBannerHeight = $(".header_banner").height();
// 	var mainHeader = $(".header").height();
// 	var sidebarHeight = $(".main .outer .row01").height();
// 	var sidebar = $(sidebar_id);
// 	var wid = $(sidebar_id).parent().width();
// 	$(sidebar_id).width(wid);
// 	$(document).on("scroll", function () {
// 		//'stick' sidebar to the bottom of main block if we scroll 'too far'
// 		if ($(window).scrollTop() >= mainBannerHeight + mainHeader) {
// 			sidebar.css({
// 				position: 'fixed',
// 				top: mainHeader
// 			});
// 		}
// 		//'stick' sidebar to the top of main block 
// 		else if ($(window).scrollTop() < mainHeader) {
// 			sidebar.css({
// 				position: 'relative',
// 				top: 0
// 			});
// 		}
// 		//fixed sidebar until it won't reach top or bottom of the main content block
// 		else {
// 			sidebar.css({
// 				position: 'relative',
// 				top: 0
// 			});
// 		}
// 	});
// }

function set_sidebar_pos(sidebar_id) {
	var mainBannerHeight = $(".header_banner").height();
	var mainHeader = $(".header").height();
	var sidebarHeight = $(".main .outer .row01").height();
	var sidebar = $(sidebar_id);
	var wid = $(sidebar_id).parent().width();
	$(sidebar_id).width(wid);
	$(document).on("scroll", function () {
		//直接將導覽列的高設為初始頂部，再以圖片頂部為基準，判定下拉時有無超過
		if ($(window).scrollTop() >= mainBannerHeight) {
			sidebar.css({
				position: 'fixed',
				top: mainHeader
			});
		}
		else if ($(window).scrollTop() < mainBannerHeight) {
			sidebar.css({
				position: 'relative',
				top: mainHeader
			});
		}
	});
	
}



function set_carousel(){
	if($('.news_div .owl-carousel').length>0){
		$('.news_div .owl-carousel').owlCarousel({
			loop:true,			
			responsiveClass:true,
			items:1,
			dots:false,
			responsive:{
				0:{					
					nav:true
				},
				768:{					
					nav:false
				},
				1000:{					
					nav:false,
					autoplay:true
				}
			}
		});
	}	
	if($('.run_event .owl-carousel').length>0){
		$('.run_event .owl-carousel').owlCarousel({
			loop:true,	
			margin:30,			
			responsiveClass:true,
			nav:true,
			dots:false,
			responsive:{
				0:{					
					items:1	
				},
				600:{					
					items:2
				},
				1000:{	
					items:3				

				}
			}
		});
	}
	if($('.photo_event .owl-carousel').length>0){
		$('.photo_event .owl-carousel').owlCarousel({
			loop:true,	
			margin:30,		
			responsiveClass:true,
			nav:true,
			dots:false,
			responsive:{
				0:{					
					items:1	
				},
				600:{					
					items:2
				},
				1000:{	
					items:3				

				}
			}
		});
	}
	if($('.video_mobile .owl-carousel').length>0){

		$('.video_mobile .owl-carousel').owlCarousel({
			loop:true,	
			margin:0,
			nav:true,
			dots:false,
			items:1	
		});

	}
	if($('.commodity_mobile .owl-carousel').length>0){
		$('.commodity_mobile .owl-carousel').owlCarousel({
			loop:true,	
			margin:30,		
			responsiveClass:true,
			nav:true,
			dots:false,
			responsive:{
				0:{					
					items:1	
				},
				600:{					
					items:2
				},
				1000:{	
					items:3				

				}
			}
		});
	}

}


// $(function () {
// 	 $('h3').click(function () {
// 		  if ($(this).next('.fold').hasClass('o') == true) {
// 			  $(this).find('i.fa').removeClass('fa-chevron-down')
// 			         .addClass('fa-chevron-right');
// 			  $(this).next('.fold').removeClass('o')
// 			         .slideUp();
// 		  } else {
// 			  $(this).find('i.fa').removeClass('fa-chevron-right')
// 			         .addClass('fa-chevron-down');
// 			  $(this).next('.fold').addClass('o')
// 			         .slideDown();
// 		  }
// 	 });
//  });



 
   
	
		 
	
	
