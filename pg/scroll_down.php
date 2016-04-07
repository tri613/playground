<div class='wrapper'>

<style type="text/css" media="screen">

body{background: #F7F7EF;}
.slide{
	height: 200px;
	width: 100%;
	background-color: #DCC14A;
	margin: 10px auto;
	position: relative;
	right: 100%;
	transition: all 1s ease-in-out;
	/*transform: rotateX(-340deg) skew(-44deg, 9deg) translate3d(-59px, -37px, 18px) scale(-9.86, -5.17)*/
}
.slide.active{
	background-color: #81D4B1;
	right: 0;
    /*transform: rotateX(0deg) skew(0deg, 0deg) translate3d(0px, 0px, 0px) scale(1, 1);*/

}
.icon{
	width: 30px;height: 30px;
	cursor: pointer;
	margin-top: 10px;margin-left: 10px;
	transition: all 0.3s ease-in-out;
	position: fixed;z-index: 999;
}
.icon_part{
	height: 1px;width: 30px;
	background-color: #000;
	position: relative;
	transition: all 0.3s ease-in-out;

}
.top{top: 0;}
.mid{top: 10px;}
.bot{top: 20px;}
.open.icon{transform: rotate(90deg);}
.open .top{transform:rotate(45deg); top: 10px;}
.open .mid{transform:rotate(-45deg);opacity: 0;}
.open .bot{transform:rotate(-45deg);top: 8px;}

</style>

<div class="icon">
	<div class="top icon_part"></div>
	<div class="mid icon_part"></div>
	<div class="bot icon_part"></div>
</div>
<br><br>
<ul>
	<li class="slide">01</li>
	<li class="slide">02</li>
	<li class="slide">03</li>
	<li class="slide">04</li>
	<li class="slide">05</li>
	<li class="slide">06</li>
	<li class="slide">07</li>
	<li class="slide">08</li>
	<li class="slide">09</li>
	<li class="slide">10</li>
</ul>


<script type="text/javascript">

	var $window = $(window);
	var $slides = $('.slide');
	
	$(function(){

		$window.on('scroll resize',check_if_in_view);
		$window.trigger('scroll');

		$('.icon').click(function(){
			if($(this).hasClass('open')){
				$(this).removeClass('open');
			}else{
				$(this).addClass('open');
			}
		});

	});

	function check_if_in_view(){
		var scrolled = $window.scrollTop(); 
		var win_height_padded  = $window.height();
		$.each($slides,function(i,o){
			$o = $(o);
			var offsetTop = $o.offset().top;
			var offsetBottom = offsetTop + $o.height();
			if(offsetTop < scrolled + win_height_padded && offsetBottom >= scrolled){
				$o.addClass('active');
			}else{
				$o.removeClass('active');
			}
		});
	}
</script>

</div>
