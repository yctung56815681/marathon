// ActionScript Document
$(function () {
	set_toggle_menu();
	set_go_top();
	set_mobile_menu_toggle();
	set_sidebar();
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

//(原):
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

//(改):
function set_sidebar_pos(sidebar_id) {
	var mainBannerHeight = $(".header_banner").height();
	var mainHeader = $(".header").height();
	var sidebarHeight = $(".main .outer .row01").height();
	var sidebar = $(sidebar_id);
	var wid = $(sidebar_id).parent().width();
	$(sidebar_id).width(wid);
	$(document).on("scroll", function () {
		//直接將導覽列的高設為初始頂部，再以圖片頂部為基準，判定下拉時有無超過
		if ($(window).scrollTop() > mainBannerHeight+ mainHeader  ) {
			sidebar.css({
				position: 'fixed',
				top: mainHeader
			});
		}
		else if ($(window).scrollTop() < mainBannerHeight+ mainHeader ) {
			sidebar.css({
				position: 'relative',
				top: mainHeader
			});
		}
			
	});
	
}




//向右箭頭及向下箭頭的Font Awesome icon圖案+下拉式文章設定
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



 
   
	
		 
	
	
