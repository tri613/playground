<div class='wrapper'>

<div style="margin: 20px;">
	The 'idle event' will be fired if this page is idled more than 5 seconds.<br>
	Mousemoving or keypressing will zero the idle timer.<br>
	Time idled: <span id='timer'></span>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		var idleTime = 0;
		
		/*---idle timer---*/
		var idleTimer = setInterval(function(){
			$('#timer').text(idleTime);
			idleTime++;
			if(idleTime > 5){
				loadingMask.open('<br><br>Idling!');
			}else{
				loadingMask.close();
			}
		},1000);

		/*---zero the idle timer---*/
		$(this).mousemove(function (e) {
         	idleTime = 0;
     	});
	    $(this).keypress(function (e) {
	        idleTime = 0;
	    });
	});
</script>

</div>