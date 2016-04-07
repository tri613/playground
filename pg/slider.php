<div class='wrapper'>
<link rel="stylesheet" href="/css/slider.css">
<script src="/js/jquery.easing.1.3.js" type="text/javascript" charset="utf-8" async defer></script>

<style type="text/css" media="screen">
.wrapper{
	padding: 10px;
}
.slider_wrapper{width: 500px;}
.slides{width: 500px;}
</style>

<div class="slider_wrapper">
	<div class="slider_view">
		<ul class="slides_wrapper">
			<li class="slides"><img width="500" src="https://placeholdit.imgix.net/~text?txtsize=47&txt=01&w=500&h=300"></li>
			<li class="slides"><img src="https://placeholdit.imgix.net/~text?txtsize=47&txt=02&w=500&h=300"></li>
			<li class="slides"><img src="https://placeholdit.imgix.net/~text?txtsize=47&txt=03&w=500&h=300"></li>
			<li class="slides"><img src="https://placeholdit.imgix.net/~text?txtsize=47&txt=04&w=500&h=300"></li>
			<li class="slides"><img src="https://placeholdit.imgix.net/~text?txtsize=47&txt=05&w=500&h=300"></li>
		</ul>
	</div>
</div>

<button id="stop_auto">Stop auto slide</button>

<script type="text/javascript">
	var slider = {
		autoSlide: true,
		createNav:false,
		wrapper : $('.slider_wrapper'),
		slide: {
			wrapper: $('.slides_wrapper'),
			now : 0,
			slides: $('.slides'),
			auto: function(){
					if(this.now < this.length-1){
						this.now++;
					}else{
						this.now = 0;
					}
					this.slideTo(this.now);
			},
			slideTo: function(index){
					margin_left = (-this.width * index);
					this.wrapper.animate({
							'margin-left': margin_left
					},700,'easeOutQuint');
					$(slider.nav.btn).removeClass('active').eq(index).addClass('active');
			}
		},
		nav : {
			create:function(){
				$nav = $(document.createElement('nav')).addClass('nav_arrow_wrapper');
				$left = $('<div class="nav_arrow left" data-value="-1" />');
				$right = $('<div class="nav_arrow right" data-value="1" />');
				$nav.append($left,$right);
				$nav.appendTo('.slider_view');
			},
			btn : '.nav_btn',
			click:function(this_btn){
				if(this_btn.hasClass('active')){
					return false;
				}
				var index = this_btn.index();
				slider.slide.now = index;
				slider.slide.slideTo(index);
			},
		},
		arrow:{
			create:function(){
				$ul = $(document.createElement('ul')).addClass('nav_btn_wrapper');
				for(i=1;i<=slider.slide.length;i++){
					$li = $('<li />',{
						class: 'nav_btn'
					});
					$li.appendTo($ul);
				}

				$ul.appendTo(slider.wrapper);
				$(slider.nav.btn).eq(slider.slide.now).addClass('active');
			},
			click:function(direction){
				next_slide = slider.slide.now + parseInt(direction);
				if(next_slide>=slider.slide.length){
					slider.slide.now = 0;
				}else if(next_slide < 0){
					slider.slide.now = slider.slide.length-1;
				}else{
					slider.slide.now = next_slide;
				}
				slider.slide.slideTo(slider.slide.now);
			}
		},
		init : function(options){
			this.slide.width = slider.wrapper.width();
			this.autoSlide =  (typeof(options.autoSlide) !== 'undefined') ? options.autoSlide : true;
		 	this.createNav = (typeof(options.createNav) !== 'undefined')? options.createNav : true;
		 	this.createArrow = (typeof(options.createNav) !== 'undefined')? options.createNav : false;
			this.slide.length = slider.slide.slides.size();
			this.slide.wrapper.css('width',(100*this.slide.length)+'%');
		}
	};

	var start_slider = function(options){
		options = options || {};
		var user_timer = (typeof(options.timer) !== 'undefined' ) ? options.timer :3000;
		var timer = (user_timer<=1000) ? 1000 : user_timer;
		slider.init(options);
		
		if(slider.createNav){
			slider.nav.create();
		}

		if(slider.createArrow){
			slider.arrow.create();
		}

		var auto_slide_timer = setInterval(function(){
			if(slider.autoSlide){
				slider.slide.auto();
			}
		},timer);

		$body = $('body');

		$body.on('click',slider.nav.btn,function(e){
			// if(slider.autoSlide){
			// 	slider.autoSlide = false;
			// 	setTimeout(function(){
			// 		slider.autoSlide = true;
			// 	},timer);
			// }
			slider.nav.click($(this));
		});

		$body.on('click','.nav_arrow',function(e){
			var dir = $(this).attr('data-value');
			// if(slider.autoSlide){
			// 	slider.autoSlide = false;
			// 	setTimeout(function(){
			// 		slider.autoSlide = true;
			// 	},timer);
			// }
			slider.arrow.click(dir);
		});


		var mouse_drag_start;
		var mouse_drag_end;
		$body.on("dragstart",".slides", function( event ) {
		     mouse_drag_start = event.originalEvent.clientX;
		});

		$body.on("dragend",".slides", function( event ) {
		    mouse_drag_end = event.originalEvent.clientX;
		    console.log(mouse_drag_start);
		    console.log(mouse_drag_end);
		    var dir = (mouse_drag_end > mouse_drag_start) ? 1 : -1 ;
			slider.arrow.click(dir);
		});
	}

	$(function(){
		start_slider({
			timer: 5000,
			createNav:true,
			createArrow:true,
			autoSlide:true
		});


		$('#stop_auto').click(function(){
			slider.autoSlide = false;
		});
	});
</script>

</div>
