<div class='wrapper'>
<link rel="stylesheet" href="/css/slider.css">

<script src="/js/jquery.easing.1.3.js" type="text/javascript" charset="utf-8" async defer></script>
<script src="/js/slider.jquery.js" type="text/javascript" charset="utf-8"></script>

<style type="text/css" media="screen">
.wrapper{
	padding: 10px;
}
.slides{width: 600px;}

</style>

<div class="slider_wrapper">
	<div class="slider_view">
		<ul class="slides_wrapper">
			<li class="slides">slide 01</li>
			<li class="slides">slide 02</li>
			<li class="slides">slide 03</li>
			<li class="slides">slide 04</li>
			<li class="slides">slide 05</li>
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
		</ul>
	</div>
</div>

<script type="text/javascript">

$(function(){
	$('.slider_wrapper').slider({
		timer: 5,
		autoSlide:true,
		createNav:true,
		createArrow:false,
		onClickStop:false
	});
	$('.slider02').slider({
		createArrow: false,
		autoSlide:true
	});
	
});
</script>

</div>
