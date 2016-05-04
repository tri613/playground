/***
 
 Slider plugin with jquery
 Author:Trina
 Create:2016/1/30
 
***/

(function( $ ){

	$.fn.slider = function(options){

		return this.each(function(k,this_obj) {
			var methods = options || {};
			var defaultSettings = {
				timer: 5,
				autoSlide:true,
				createNav:true,
				createArrow:false,
				onClickStop:false
			};
	    	var setting = $.extend(defaultSettings, methods);

	    	var classname = {
	    		view: 'slider_view',
	    		slides_wrapper: 'slides_wrapper',
	    		slides: 'slides',
	    		nav_btn_wrapper: 'nav_btn_wrapper',
	    		nav_btn: 'nav_btn',
	    		nav_arrow: 'nav_arrow'
	    	}

	    	var selector = {
	    		nav_btn : '.'+ $(this_obj).attr('class') + ' ' + '.'+classname.nav_btn,
	    		nav_arrow : '.'+ $(this_obj).attr('class') + ' ' + '.'+classname.nav_arrow,
	    		view: '.' + $(this_obj).attr('class') + ' ' + '.'+ classname.view,
	    		slides_wrapper: '.'+ $(this_obj).attr('class')+ ' ' + '.'+classname.slides_wrapper
	    	}

	    	var obj = {
	    		main : $(this_obj),
	    		view: $(selector.view),
	    		slide_wrapper: $(selector.slides_wrapper),
	    		slides: $(this_obj).find('.' + classname.slides),
	    		nav_btn: null,
	    		nav_arrow:null,
	    	}

			var slide = {
				now: 0,
				auto: function(){
						if(this.now < this.length-1){
							this.now++;
						}else{
							this.now = 0;
						}
						this.slideTo(this.now,obj.slide_wrapper);
				},
				slideTo: function(index,this_slide_wrapper){
						margin_left = (-this.width * index)  ;
						this_slide_wrapper.animate({
								'margin-left': margin_left
						},700,'easeOutQuint');
						this_slide_wrapper.parents().eq(1).find('.'+classname.nav_btn).removeClass('active').eq(index).addClass('active');
				}
			};


			var nav = {
				create:function(){
					$ul = $(document.createElement('ul')).addClass(classname.nav_btn_wrapper);
					for(i=1;i<=slide.length;i++){
						$li = $('<li />',{
							class: classname.nav_btn
						});
						$li.appendTo($ul);
					}
					$ul.appendTo(obj.main);
					obj.nav_btn = obj.main.find('.'+classname.nav_btn);
					obj.nav_btn.eq(slide.now).addClass('active');
				},
				click:function(this_btn){
					if(this_btn.hasClass('active')){
						return false;
					}
					var index = this_btn.index();
					var this_slide_wrapper = this_btn.parents().eq(1).find('.'+classname.slides_wrapper);
					slide.now = index;
					slide.slideTo(index,this_slide_wrapper);
				}
			};

			var arrow = {
				create:function(){
					$nav = $(document.createElement('nav')).addClass('nav_arrow_wrapper');
					$left = $('<div class="left" data-value="-1" />').addClass(classname.nav_arrow);
					$right = $('<div class="right" data-value="1" />').addClass(classname.nav_arrow);
					$nav.append($left,$right);
					$nav.appendTo(obj.view);
					obj.nav_arrow = obj.main.find('.'+classname.nav_arrow);
				},
				click:function(direction,this_arrow){
					next_slide = slide.now + parseInt(direction);
					if(next_slide>=slide.length){
						slide.now = 0;
					}else if(next_slide < 0){
						slide.now = slide.length-1;
					}else{
						slide.now = next_slide;
					}
					var this_slide_wrapper = this_arrow.parents().eq(1).find('.'+classname.slides_wrapper);
					slide.slideTo(slide.now,this_slide_wrapper);
				}
			};
			
			var init = function(){
				slide.width = obj.slides.width();
				obj.main.css('width',slide.width);
				slide.length = obj.slides.size();
				obj.slide_wrapper.css('width',(110*slide.length)+'%');
			};

			var main = function(){
				init();

				var timer = 0;
				var auto_slide_timer = setInterval(function(){
					if(setting.autoSlide){
						if(timer == setting.timer){
							slide.auto();
							timer = 0;
						}
					}
					timer++;
				},1000);

				if(setting.createNav){
					nav.create();
					$('body').on('click',selector.nav_btn,function(e){
						if(setting.onClickStop){
							clearInterval(auto_slide_timer);
						}
						timer = 0;
						nav.click($(this));
					});
				}
				if(setting.createArrow){
					arrow.create();
					$('body').on('click',selector.nav_arrow,function(e){
						var dir = $(this).attr('data-value');
						if(setting.onClickStop){
							clearInterval(auto_slide_timer);
						}
						timer = 0;
						arrow.click(dir,$(this));
					});
				}
			}();

	    });

	};

})(jQuery);
