<div class='wrapper'>

<style type="text/css" media="screen">
	canvas{
		/*width: 100%;*/
		/*height: 100%;*/
		/*position: fixed;*/
		/*top: 0;left: 0;*/
		z-index: -1;
		background-color: #F7F7EF;
	}
	#content{
		position: absolute;
		top: 0;left: 0;
		z-index: 1;
	}
</style>


<canvas id="canvasOne">
	Your browser doesn't support canvas elements.
</canvas>
<canvas id="tanks">
	Your browser doesn't support canvas elements.
</canvas>
<!-- 
<div id="content_">
	Just testing if canvas could preform as background.
</div>
 -->


<script type="text/javascript">
	// ctx.canvas.width  = window.innerWidth;
	// ctx.canvas.height = window.innerHeight;

	function drawRect(canvas,x,y){
		canvas.fillStyle = 'green';
		canvas.fillRect(x,y,5,5);
	};

	function fading_words(){

		var fadein = false;
		var alpha = 0;

		function alphaControll(){
			if(fadein){
				alpha += 0.05;
				if(alpha >= 1){
					fadein = false;
					alpha = 1;
				}
			}else{
				alpha -= 0.05;
				if(alpha<=0){
					fadein = true;
					alpha = 0;
				}
			}
		}

		function drawScreen() {
			ctx.canvas.width  = window.innerWidth;
	  		ctx.canvas.height = window.innerHeight;
			ctx.globalAlpha = alpha;
			ctx.fillStyle = 'red';
			ctx.font = "30px San-Serif";
			ctx.baseline = 'top';
			ctx.fillText('Hello World!',150,500);
			
			ctx.globalAlpha = 1;
			ctx.strokeStyle  = "black";
			ctx.lineWidth  = 10;
			ctx.lineCap  = 'square';
			ctx.beginPath();
			ctx.moveTo(20, 100);
			ctx.lineTo(100, 100);
			ctx.stroke();
			ctx.closePath();

        	ctx.beginPath();
			ctx.lineWidth  = 1;
			ctx.arc(200,200,100,0,(Math.PI/180)*90,false);
			ctx.stroke();
      		ctx.closePath();

        	ctx.beginPath();
      		ctx.moveTo(500,200);
      		ctx.lineTo(600,300);
      		ctx.arcTo(700,500,650,400,50);
			ctx.stroke();
      		ctx.closePath();

      		ctx.beginPath();
      		ctx.moveTo(200,200);
			ctx.quadraticCurveTo(100,25,200,50);
			ctx.stroke();
      		ctx.closePath();

   		}

   		function fadingLoop(){
   			setTimeout(fadingLoop,50);
   			alphaControll();
   			drawScreen();
   		}

   		var main = function(){
   			fadingLoop();
   		}();
	}

	function tanks(){
		var canvas = document.getElementById('tanks');
		var ctx = canvas.getContext('2d');
		ctx.canvas.width = 320;
		ctx.canvas.height = 320;

		var sheet = new Image();
		sheet.src = "/images/canvas/tanks_sheet.png";
		sheet.addEventListener('load', eventSheetLoaded , false);

		var tile = 32;
		var speed = 3;
		var frameIndex = 1;
		var rotation = 90;
		var x = 0;
		var y = 0;
		var dx = 0;
		var dy = 0;

		var mapRows = 10;
		var mapCols = 10;
		var tileMap = [
	       [32,31,31,31,1,31,31,31,31,32]
	   ,   [1,1,1,1,1,1,1,1,1,1]
	   ,   [32,1,26,1,26,1,26,1,1,32]
	   ,   [32,26,1,1,26,1,1,26,1,32]
	   ,   [32,1,1,1,26,26,1,26,1,32]
	   ,   [32,1,1,26,1,1,1,26,1,32]
	   ,   [32,1,1,1,1,1,1,26,1,32]
	   ,   [1,1,26,1,26,1,26,1,1,1]
	   ,   [32,1,1,1,1,1,1,1,1,32]
	   ,   [32,31,31,31,1,31,31,31,31,32]
	   ];

		function eventSheetLoaded(e){
			startUp();
		}

		function drawScreen() {
			x+=dx;
			y+=dy;
			ctx.fillStyle="#aaaaaa";
			ctx.fillRect(0,0,500,500);

			for (var rowCtr=0;rowCtr<mapRows;rowCtr++) {
			   for (var colCtr=0;colCtr<mapCols;colCtr++){

			      var tileId = tileMap[rowCtr][colCtr]-1;
			      var sourceX = Math.floor(tileId % 8) *32;
			      var sourceY = Math.floor(tileId / 8) *32;
			       ctx.drawImage(sheet, sourceX,sourceY,32,32,colCtr*32,rowCtr*32,32,32);
			   }
			}

 		   var sourceX=Math.floor(frameIndex % 8) *32;
 		   var sourceY=Math.floor(frameIndex / 8) *32;
 		   ctx.save();
		   ctx.setTransform(1,0,0,1,0,0);
		   var rotation_degree = rotation * (Math.PI/180);
		   ctx.translate(x+16,y+16);
		   ctx.rotate(rotation_degree);
		   ctx.drawImage(sheet, sourceX, sourceY,32,32,-16,-16,32,32);
		   ctx.restore();
		}
			
		function boundingBoxCollide(object1, object2) {
		    var left1 = object1.x;
		    var left2 = object2.x;
		    var right1 = object1.x + object1.width;
		    var right2 = object2.x + object2.width;
		    var top1 = object1.y;
		    var top2 = object2.y;
		    var bottom1 = object1.y + object1.height;
		    var bottom2 = object2.y + object2.height;

		    if (bottom1 < top2) return(false);
		    if (top1 > bottom2) return(false);

		    if (right1 < left2) return(false);
		    if (left1 > right2) return(false);

		    return(true);
		}

		function key_down(e){
			moving = true;
    		switch(e.keyCode){
    			case 37: //left
    				rotation = 270;
    				dx = -speed;
    				dy = 0;
    				break;
    			case 38: //up
    				dx = 0;
    				dy = -speed;
    				rotation = 0;
    				break;
    			case 39: //right
    				dx = speed;
    				dy = 0;
    				rotation = 90;
    				break;
    			case 40: //down
    			    dx = 0;
    				dy = speed;
    				rotation = 180;
    				break;
    		} 

			frameIndex ++;
			if (frameIndex == 8) {
	          frameIndex=1;
			}
			drawScreen();
			// gameLoop();
		}

		function gameLoop(){
		}

		function startUp(){
			drawScreen();
			console.log('startUp!');
			window.addEventListener('keydown',key_down,true);
		}
	}

	function balls() {
		function  drawScreen () {
		  context.fillStyle = '#EEEEEE';
		  context.fillRect(0, 0, theCanvas.width, theCanvas.height);

		  //Box
		  context.strokeStyle = '#000000';
		  context.strokeRect(1,  1, theCanvas.width-2, theCanvas.height-2);

		  //Place balls
		  context.fillStyle = "#000000";
		  var ball;

		  for (var i = 0; i <balls.length; i++) {
		     ball = balls[i];
		     ball.x += ball.xunits;
		     ball.y += ball.yunits;

		     context.beginPath();
		     context.arc(ball.x,ball.y,ball.radius,0,Math.PI*2,true);
		     context.closePath();
		     context.fill();

		     if (ball.x > theCanvas.width || ball.x < 0 ) {
		        ball.angle = 180 - ball.angle;
		        updateBall(ball);
		     } else if (ball.y > theCanvas.height || ball.y < 0) {
		        ball.angle = 360 - ball.angle;
		        updateBall(ball);
		     }
		  }
		}

	    function updateBall(ball) {
	      ball.radians = ball.angle * Math.PI/ 180;
	      ball.xunits = Math.cos(ball.radians) * ball.speed;
	      ball.yunits = Math.sin(ball.radians) * ball.speed;
	    }

		var numBalls = 100 ;
		var maxSize = 8;
		var minSize = 5;
		var maxSpeed = maxSize+5;
		var balls = new Array();
		var tempBall;
		var tempX;
		var tempY;
		var tempSpeed;
		var tempAngle;
		var tempRadius;
		var tempRadians;
		var tempXunits;
		var tempYunits;

		theCanvas = document.getElementById("canvasOne");
		context = theCanvas.getContext("2d");
		context.canvas.width  = 500;
		context.canvas.height  = 500;

		for (var i = 0; i < numBalls; i++) {
			tempRadius = Math.floor(Math.random()*maxSize)+minSize;
			tempX = tempRadius*2 + (Math.floor(Math.random()*theCanvas.width)-tempRadius*2);
			tempY = tempRadius*2 + (Math.floor(Math.random()*theCanvas.height)-tempRadius*2);
			tempSpeed = maxSpeed-tempRadius;
			tempAngle = Math.floor(Math.random()*360);
			tempRadians = tempAngle * Math.PI/ 180;
			tempXunits = Math.cos(tempRadians) * tempSpeed;
			tempYunits = Math.sin(tempRadians) * tempSpeed;

			tempBall = {x:tempX,y:tempY,radius:tempRadius, speed:tempSpeed, angle:tempAngle,xunits:tempXunits, yunits:tempYunits}
			balls.push(tempBall);
		}

		function gameLoop() {
			window.setTimeout(gameLoop, 20);
			drawScreen()
		}
		gameLoop();
	}

	$(function(){
		balls();
		tanks();
	});



</script>

</div>
