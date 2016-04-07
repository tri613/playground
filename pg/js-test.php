<html>
<head>

<meta charset="utf-8" />
<script src="/js/jquery-1.8.3.min.js"></script>
<script src="/js/base.js"></script>
<link href="/css/bootstrap.css" rel="stylesheet" type="text/css">
<title>三分間待ってやる。</title>
<style type="text/css">
	#wrapper{
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
	}
	.content{
		padding: 10px;
		color: #FFF;
	}

	#page1{
		height: 600px;
		width: 100%;
		background-color: #436388;
	}
	#fixedbtn{
		position: fixed;
		top: 50%;
		left: 50%;
		margin-top: -20px;
		margin-left: -50px;
	}

	.href-btn{
		background-color: #F4A08A;
		height: 50px;
		width: 100px;
		cursor: pointer;
	}

	.href-btn:hover:after{
		content: "";
	    display: block;
	    height: 100%;
	    width: 100%;
	    background: #000;
	    opacity: 0.1;
	}
</style>


</head>

<body>

<div id='wrapper'>

<input type="button" id='createmorebtn' value="create btn!" class="btn btn-default">
<input type="button" id='createmorebtn2' value="create btn!" class="btn btn-default">
<input type="button" id='removemorebtn' value="remove btn!" class="btn btn-default">
<input type="button" id='openmask' value="open mask!" class="btn btn-default" onclick="loadingMask.open()">
<!-- <div id='page1' class="page">
	<div class='content'>
		結構うれしい。どうしよう。ばか。<br>
		<input type="button" id='scrollbtn'value="scroll to ( i think it acts more like jump to ) " class="btn btn-default">
		<br><br>
		<div class='href-btn'></div>
		<input type="button" id='fixedbtn'value="get scroll offset" class="btn">
	</div>
</div> -->

</div>

<script type="text/javascript">

var news = {"brief": "test",
			"date": "2015/09/11",
			"id": "212",
			"pic": "",
			"title": "昱泉國際與唯晶數位雙強聯手，共創手遊新局!",
			"type": "1"
			};

// var createMorebtn = function(){
// 	var morebtn = $('<li />').append($('<div class="mores"/>').text('更多...')).appendTo('#wrapper');
// 	return morebtn;
// };

var morebtn = $('<li />').append($('<div class="mores"/>').text('更多...'));


var createNews = function(news){
  var time = new Date(news.date);
  var month = time.getMonth() + 1;
  var date = time.getDate();

  var $monthDiv = $('<div class="newsMonth font20" />').html(month+'<span>/</span>');
  var $dateDiv = $('<div class="newsDate"/>').text(date);
  var $newsData = $('<div class="newsData_a"/>').append($monthDiv).append($dateDiv);
  
  var $newsTitle = $(' <div class="newsTitle fontB" />').html('<h3>' + news.title + '</h3>');

  var newsobj = $('<a class="newsLine_a"/>').append($newsData).append($newsTitle).append($('<div class="more"/>').text('more'));

  return newsobj;
}

var theMoresbtn = {
    btn: $('<li />').append($('<div class="mores"/>').text('更多...').attr('year','oriyear').attr('start','oristart')),
    show: function(year,start,div){
      if(year==''){
      		theMoresbtn.btn.appendTo(div);
      }else{
      		theMoresbtn.btn.attr('year',year).attr('start',start).appendTo(div);
      }
    },
    hide: function(){
      theMoresbtn.btn.remove();
    }
}

$(function(){
				window.open('/' ,'Export', 'height=200,width=200');

	//var obj = prompt('what is this!?'); //<-これ今知ったｗｗｗｗばかｗｗｗｗ
	//alert(obj);
	//showModalDialog //<-もう使えないじゃん
	// createMask();
});

var createMask = function(){
  var mask = $('#wrapper').append( $('<div />').html('mask'));
  return function(){
  	return mask;
       // return mask || (mask = $('#wrapper' 	).append( $('<div />').html('mask') ) );
  }
}();

$('#createmorebtn').click(function(event){
	// createMorebtn();
	// createNews(news).appendTo('#wrapper');
	// morebtn.appendTo('#wrapper');
	// theMoresbtn.btn.text('test');
	console.log(event);
	theMoresbtn.show('',0,'#wrapper');
});

$('#createmorebtn2').click(function(){
	$('<div />').text('infront').appendTo('#wrapper');
	theMoresbtn.btn.text('test2');
	theMoresbtn.show(2014,5,'#wrapper');
	console.log(theMoresbtn.btn);
});


$('#removemorebtn').click(function(){
	// morebtn.remove();
	theMoresbtn.hide();
});


$('#fixedbtn').click(function(){
	console.log(getScrollOffsets());
	createMask();
});

$('#scrollbtn').click(function(){
	window.scrollTo(100,700);
});

// var b = document.getElementById('scrollbtn');
// b.addEventListener('click',function(){
// 	alert('im clicked');
// });

// b.addEventListener('click',function(){
// 	alert('lalalala');
// });

// function getScrollOffsets(w){
// 	w = w || window;
// 	if(w.pageXOffset!=null) return {x: w.pageXOffset, y:w.pageYOffset};
// }


</script>


</body>
</html>


