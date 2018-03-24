/**
 * ui.js
 * Author : LMJ
 * Date : 16.10.17
 * Update : 18.03.24
 */

if(typeof lmj === 'undefined'){
	lmj = {};
}

lmj.lmj_ui = function(){
	this.init();
};

lmj.lmj_ui.prototype = (function(){

	var $btn_top = $('#top_bt'),
		$btn_tit = $('.title'),
		$nav = $('#nav li'),
		$img_area = $('.image');

	function removeli(){
		$nav.removeClass('active');
	}

	function scrollTopBtn(target){
		target.on('click', function(e){
			e.preventDefault();
			$('body, html').animate({
				scrollTop : 0
			}, 500, 'easeInOutExpo');
		});
	}

	return {
		init : function(){
			this.bindEvent();
		},

		bindEvent: function(){
			this.topAnimation();
			this.scrollPosition();
			this.portfolioScroll();
		},
		topAnimation: function(){
			scrollTopBtn($btn_top);
			scrollTopBtn($btn_tit);
		},
		scrollPosition: function() {
			$(window).scroll(function(){
				var scroll_info = $(window).scrollTop();

				if(scroll_info >= Math.floor($('#about').offset().top)){
					removeli();
					$('.about').addClass('active');
				}

				if(scroll_info >= Math.floor($('#skill').offset().top)){
					removeli();
					$('.skill').addClass('active');
				}

				if(scroll_info >= Math.floor($('#portfolio').offset().top)){
					removeli();
					$('.port').addClass('active');
				}

				/* if(scroll_info >= Math.floor($('#contact').offset().top)){
					removeli();
					$('.contact').addClass('active');
				}*/
			});
		},
		portfolioScroll: function(){
			$img_area.hover(function(){
				var $img_h = $(this).find('img').height() - $img_area.height();
				$(this).find('img').css("transform", "translate3d(0, " + -($img_h) + "px, 0)");
			}, function(){
				$(this).find('img').css("transform", "translate3d(0, 0, 0)");
			});
		}
	};
})();
