<div class='wrapper'>

	<!-- <iframe width="500" height="300" src="http://localhost/tri/pocky/public/strawberry/123"></iframe> -->
	<!-- <iframe width="500" height="300" src="http://localhost/tri/pocky/public/strawberry/top"></iframe> -->


	<script type="text/javascript">
		// $('iframe').load(function(e){
		//     // console.log('error',this);
		//     console.log($(this).contents());
		// });

		// var iframe = $('<iframe />',{width:500,height:300});
		var wrong = 'http://trina-test.is520.com:6169/wrong';
		var right = 'http://trina-test.is520.com:6169/pg/to/music_player';

		$.when($.ajax(wrong),$.ajax(right))
		.done(function(result1, result2){
			console.log(result1, result2);
		}).fail(function(jqXHR, textStatus, errorThrown){
			console.log(jqXHR, textStatus, errorThrown);
		});

		// $.get(wrong,{},function(response,status,xhr){
		// 	console.log(response,status,xhr);
		// });

	</script>


</div>
