<div class='wrapper'>

<style type="text/css" media="screen">
	section{
		padding: 10px 20px;
	}
	::selection{
		background-color: #79D1C5;
	}
	.selectedText{
		background-color: #FFEA80;
		position: relative;
	    min-width: 130px;
	}
	.tool_tip{
		background-color: #F77985;
		padding: 10px 20px;
		position: absolute; left: 0;
	}
</style>

<section>
	<h4>今夜はから騒ぎ</h4>
	みずぎわ干いては満ちて胸騒ぎ<br>
	<br>
	もう屹度潮時よ顔と名前の貸借<br>
	足を洗うべきよ媚と恨みの売買<br>
	<br>
	目尻の真相は語るまじ世の煩い<br>
	涙は見せないで気まぐれまぐれ<br>
	<br>
	当然の報いだよ仇と利息の返済<br>
	手を染めた罰よ恩と喧嘩の売買<br>
	<br>
	裏切りの衝動は秋の夜の恋患い<br>
	項で問わないでさようなら淫ら<br>
	<br>
	浮かばれるか沈むか暗黙のTOKYO港湾<br>
	ずらからにゃパクられてまうああ青息吐息<br>
	<br>
	笑顔がまぶしいね見おさめ小雨<br>
	<br>
	泡沫を喰っちゃ泡沫を吹かす大博打思惑師<br>
	赤プリがもぬけならば名ばかりの紀尾井町<br>
	<br>
	終わりゆく時代へ投げキス毎度あり型通り<br>
	あの八番出口もヨウナシね・・・溜池山王<br>
</section>

<script type="text/javascript">

	var CurrentSelection = {
		Selector:{},
		Classname:{
			Selected:'selectedText',
			Tooltip:'tool_tip'
		}
	};

 	CurrentSelection.Selector.getSelected = function(){
 		var sel = "";
 		if(window.getSelection){
 			sel = window.getSelection();
 		}else if(document.getSelection){
 			sel = document.getSelection();
 		}else  if(document.selection){
		    sel = document.selection.createRange();
		}

		return sel;
 	}

 	CurrentSelection.Selector.mouseup = function(){
 		var selection = CurrentSelection.Selector.getSelected();
 		
 		if(document.selection && !window.getSelection){ //for ie
		    var range = selection;
		    range.pasteHTML("<span class='"+CurrentSelection.Classname.Selected+"'>" + range.htmlText + "</span>");   
		}else{
			var range = selection.getRangeAt(0);
			var newNode = document.createElement("span");
			newNode.setAttribute('class',CurrentSelection.Classname.Selected);
			// range.surroundContents(newNode); //replace selection with '<span class="selection"></span>'
		    newNode.appendChild(range.extractContents());
    		range.insertNode(newNode);

    		if(newNode.innerHTML.length > 0){
				var toolTip = document.createElement("div");
				toolTip.setAttribute('class',CurrentSelection.Classname.Tooltip);
				toolTip.innerHTML = 'this is tool tip!';
				newNode.appendChild(toolTip);		
    		}

    		//Remove Selection: To avoid extra text selection in IE  
    		//!!!!!!!!SUPER IMPORTANT!!!!!!!!!!!
			if (window.getSelection) {
			 	window.getSelection().removeAllRanges();
			}else if (document.selection){ 
				document.selection.empty();
			}
		}

 	}

	$(function(){
		$('section').on('mouseup',function(e){
			var selection;
			$('.'+CurrentSelection.Classname.Selected).contents().unwrap();
			$('.'+CurrentSelection.Classname.Tooltip).remove();
			CurrentSelection.Selector.mouseup();
			
			// if(window.getSelection){
			// 	selection = window.getSelection();	

			// 	if(selection.toString()!=""){
			// 		var range = selection.getRangeAt(0);
			// 		var cloneNode = document.createElement("span");
			// 		$(cloneNode).addClass('selection').text('cloneNode');
			// 		range.surroundContents(cloneNode); //replace selection with '<span class="selection"></span>'
			// 		// range.insertNode(cloneNode);
			// 		// range.collapse(false);

			// 		var toolTip = $(document.createElement("div")).addClass('tool_tip').text('toolTip!');
			// 		toolTip.appendTo('.selection');
			// 	}
				
			// }
		});
	});
</script>

</div>
