<div class='wrapper'>

<style type="text/css">
	.music_track{display: inline-block;margin: 10px;}
	.player-control{
		border: 0;
		border-radius: 50%;
		height: 80px;width: 80px;
	}
	.player-control:hover{background-color: #9CE7D1;}
	.playing .player-control{background-color: #F48970;}
	.bg{
		position: fixed;
		height: 100%;width: 100%;
		z-index: -100;
		overflow: hidden;
	}
	.bg-mask{    
		width: 100%;
	    height: 100%;
	    top: 0;
	    left: 0;
	    position: fixed;
	}
	.iframe-wrapper{width: 100%;height: 100%;min-width: 800px;min-height: 600px;}
	iframe{border:0;width: 100%;height: 100%;}
</style>

	<div class="bg">
		<div class="iframe-wrapper">
		<iframe frameborder="0" src="https://www.youtube.com/embed/6gSYiiYmiUM?modestbranding=1&autoplay=1&controls=0&fs=0&iv_load_policy=3&loop=1&rel=0&showinfo=0&disablekb=1&playlist=6gSYiiYmiUM"></iframe>
		</div>
		<div class="bg-mask"></div>
	</div>

	<div id="music_wrapper">
		<div class="music_track" id="music_track01">
			<audio class="music">
				<source src="/audio/akaito.mp3" type="audio/mpeg">
				Your browser does not support the audio element.
			</audio>
			<button class="player-control">track 1</button>
		</div>

		<div class="music_track"  id="music_track02">
			<audio class="music">
				<source src="/audio/恋愛裁判.mp3" type="audio/mpeg">
				Your browser does not support the audio element.
			</audio>
			<button class="player-control">track 2</button>
		</div>
	</div>


	<script type="text/javascript">

	/*---player---*/
	var isplaying = false;
	$('.player-control').click(function(){
		var controller =  $(this).parent('.music_track');
		var track = controller.attr('id');
		var player = $('#'+track).find('audio');

		if(isplaying){
			var controller_now =  $('.playing');
			var track_now = $('.playing').attr('id');
			controller_now.removeClass('playing').find('audio').trigger('pause').prop('currentTime',0);
			isplaying = false;			

			if(track_now != track){
				player.trigger('play');
				controller.addClass('playing');
				isplaying = true;			
			}
		}else{
			if(controller.hasClass('playing')){
				player.trigger('pause').prop('currentTime',0);
				controller.removeClass('playing');
				isplaying = false;
			}else{
				player.trigger('play');
				controller.addClass('playing');
				isplaying = true;
			}
		}
	});

	$(".music").bind('ended', function(){
		$(this).parent().removeClass('playing');
		isplaying = false;
	});



	</script>


</div>
