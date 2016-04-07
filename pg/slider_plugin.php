<div class='wrapper'>
<link rel="stylesheet" href="/css/slider.css">

<script src="/js/jquery.easing.1.3.js" type="text/javascript" charset="utf-8" async defer></script>
<script src="/js/slider.jquery.js" type="text/javascript" charset="utf-8"></script>

<style type="text/css" media="screen">
.wrapper{
	padding: 10px;
}
.slider02 .slides{width: 600px;height: 300px;}
.slider02 .nav_btn{
	background-color: red;
}
</style>

<div class="slider_wrapper">
	<div class="slider_view">
		<ul class="slides_wrapper">
			<li class="slides"><img src="https://placeholdit.imgix.net/~text?txtsize=47&txt=01&w=500&h=300"></li>
			<li class="slides"><img src="https://placeholdit.imgix.net/~text?txtsize=47&txt=02&w=500&h=300"></li>
			<li class="slides"><img src="https://placeholdit.imgix.net/~text?txtsize=47&txt=03&w=500&h=300"></li>
			<li class="slides"><img src="https://placeholdit.imgix.net/~text?txtsize=47&txt=04&w=500&h=300"></li>
			<li class="slides"><img src="https://placeholdit.imgix.net/~text?txtsize=47&txt=05&w=500&h=300"></li>
		</ul>
	</div>
</div>

<hr>

<div class="slider02" id="test2">
	<div class="slider_view">
		<ul class="slides_wrapper">
			<li class="slides">slide 06</li>
			<li class="slides">slide 07</li>
			<li class="slides">slide 08</li>
			<li class="slides">slide 09</li>
			<li class="slides">slide 10</li>
			<li class="slides">slide 11</li>
		</ul>
	</div>
</div>

<script type="text/javascript">

$(function(){
	$('.slider_wrapper').slider({
		timer: 5,
		autoSlide:false,
		createNav:true,
		createArrow:true,
		onClickStop:false
	});
	$('.slider02').slider({
		createArrow: false,
		autoSlide:false
	});
	
});
</script>

</div>
