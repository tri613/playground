<html>
<head>
<meta charset="utf-8" />
  <script src="/js/jquery-1.8.3.min.js"></script>
  <link href="/css/bootstrap.css" rel="stylesheet" type="text/css">
  <title>三分間待ってやる。</title>
  <script type="text/javascript" src="https://www.google.com/jsapi"></script>
  <script type="text/javascript">

    google.load('visualization', '1', {packages: ['corechart','bar','line','timeline']});
    // google.setOnLoadCallback(function(){drawBar(data,'num','總儲值筆數','num');});
    // google.setOnLoadCallback(function(){drawBar(data,'apppu','ARPPU','arppu');});
    google.setOnLoadCallback(function() {
    	drawStackedBar(data);
    	var done = drawBar(data,'num','總儲值筆數','num');
    	var drawnext = function(){
    		setTimeout(function(){
    			if(done){
    				var done2 = drawBar(data,'apa','APA','apa');
    				var drawlast = setTimeout(function(){
    					if(done2){ drawBar(data,'apppu','ARPPU','arppu');}
    					else{ drawlast(); }
    					},300);
    			}else{
    				drawnext();
    			}
    		},300);
    	}();

	});



    var res = {"row":[["2015-10-01","25"],["2015-10-02","26"],["2015-10-03","73"],["2015-10-04","71"],["2015-10-05","19"],["2015-10-06","26"],["2015-10-07","33"]],"dodrow":[["2015-10-01",-7.41],["2015-10-02",4],["2015-10-03",180.77],["2015-10-04",-2.74],["2015-10-05",-73.24],["2015-10-06",36.84],["2015-10-07",26.92]],"eventlist":[{"date_start":"2015-10-01 00:00:00","dummy_start":"2015-10-01 00:00:00","date_end":"2015-10-02 23:59:00","dummy_end":"2015-10-07 00:00:00","id":"155","title":"test"},{"date_start":"2015-10-01 00:00:00","dummy_start":"2015-10-01 00:00:00","date_end":"2015-10-03 23:59:00","dummy_end":"2015-10-07 00:00:00","id":"156","title":"test2"}],"column":"2015-10-01 ~ 2015-10-07","max":100,"min":0,"count":7,"date":["2015-10-01","2015-10-02","2015-10-03","2015-10-04","2015-10-05","2015-10-06","2015-10-07"],"data":[{"dateline":"2015-10-01","game":"fef","server_id":"0","platform":"total","DNU":"25","dod":"-0.0741","WNU":"427","p7dod":"0.0023","MNU":"1490","p30dod":"-0.0027","allmember":"213,618","retention_1d":"12","retention_2d":"8","retention_3d":"4","retention_4d":"2","retention_5d":"5","retention_6d":"2","retention_7d":null,"retention_8d":null,"retention_9d":null,"retention_10d":null,"retention_11d":null,"retention_12d":null,"retention_13d":null,"retention_14d":null,"retention_15d":null,"retention_16d":null,"retention_17d":null,"retention_18d":null,"retention_19d":null,"retention_20d":null,"retention_21d":null,"retention_22d":null,"retention_23d":null,"retention_24d":null,"retention_25d":null,"retention_26d":null,"retention_27d":null,"retention_28d":null,"retention_29d":null,"retention_30d":null,"ooo":-7.41},{"dateline":"2015-10-02","game":"fef","server_id":"0","platform":"total","DNU":"26","dod":"0.0400","WNU":"422","p7dod":"-0.0117","MNU":"1481","p30dod":"-0.0060","allmember":"213,644","retention_1d":"9","retention_2d":"4","retention_3d":"2","retention_4d":"3","retention_5d":"3","retention_6d":null,"retention_7d":null,"retention_8d":null,"retention_9d":null,"retention_10d":null,"retention_11d":null,"retention_12d":null,"retention_13d":null,"retention_14d":null,"retention_15d":null,"retention_16d":null,"retention_17d":null,"retention_18d":null,"retention_19d":null,"retention_20d":null,"retention_21d":null,"retention_22d":null,"retention_23d":null,"retention_24d":null,"retention_25d":null,"retention_26d":null,"retention_27d":null,"retention_28d":null,"retention_29d":null,"retention_30d":null,"ooo":4},{"dateline":"2015-10-03","game":"fef","server_id":"0","platform":"total","DNU":"73","dod":"1.8077","WNU":"449","p7dod":"0.0640","MNU":"1524","p30dod":"0.0290","allmember":"213,717","retention_1d":"29","retention_2d":"11","retention_3d":"8","retention_4d":"8","retention_5d":null,"retention_6d":null,"retention_7d":null,"retention_8d":null,"retention_9d":null,"retention_10d":null,"retention_11d":null,"retention_12d":null,"retention_13d":null,"retention_14d":null,"retention_15d":null,"retention_16d":null,"retention_17d":null,"retention_18d":null,"retention_19d":null,"retention_20d":null,"retention_21d":null,"retention_22d":null,"retention_23d":null,"retention_24d":null,"retention_25d":null,"retention_26d":null,"retention_27d":null,"retention_28d":null,"retention_29d":null,"retention_30d":null,"ooo":180.77},{"dateline":"2015-10-04","game":"fef","server_id":"0","platform":"total","DNU":"71","dod":"-0.0274","WNU":"447","p7dod":"-0.0045","MNU":"1547","p30dod":"0.0151","allmember":"213,788","retention_1d":"20","retention_2d":"11","retention_3d":"13","retention_4d":null,"retention_5d":null,"retention_6d":null,"retention_7d":null,"retention_8d":null,"retention_9d":null,"retention_10d":null,"retention_11d":null,"retention_12d":null,"retention_13d":null,"retention_14d":null,"retention_15d":null,"retention_16d":null,"retention_17d":null,"retention_18d":null,"retention_19d":null,"retention_20d":null,"retention_21d":null,"retention_22d":null,"retention_23d":null,"retention_24d":null,"retention_25d":null,"retention_26d":null,"retention_27d":null,"retention_28d":null,"retention_29d":null,"retention_30d":null,"ooo":-2.74},{"dateline":"2015-10-05","game":"fef","server_id":"0","platform":"total","DNU":"19","dod":"-0.7324","WNU":"369","p7dod":"-0.1745","MNU":"1517","p30dod":"-0.0194","allmember":"213,807","retention_1d":"4","retention_2d":"2","retention_3d":null,"retention_4d":null,"retention_5d":null,"retention_6d":null,"retention_7d":null,"retention_8d":null,"retention_9d":null,"retention_10d":null,"retention_11d":null,"retention_12d":null,"retention_13d":null,"retention_14d":null,"retention_15d":null,"retention_16d":null,"retention_17d":null,"retention_18d":null,"retention_19d":null,"retention_20d":null,"retention_21d":null,"retention_22d":null,"retention_23d":null,"retention_24d":null,"retention_25d":null,"retention_26d":null,"retention_27d":null,"retention_28d":null,"retention_29d":null,"retention_30d":null,"ooo":-73.24},{"dateline":"2015-10-06","game":"fef","server_id":"0","platform":"total","DNU":"26","dod":"0.3684","WNU":"319","p7dod":"-0.1355","MNU":"1462","p30dod":"-0.0363","allmember":"213,833","retention_1d":"6","retention_2d":null,"retention_3d":null,"retention_4d":null,"retention_5d":null,"retention_6d":null,"retention_7d":null,"retention_8d":null,"retention_9d":null,"retention_10d":null,"retention_11d":null,"retention_12d":null,"retention_13d":null,"retention_14d":null,"retention_15d":null,"retention_16d":null,"retention_17d":null,"retention_18d":null,"retention_19d":null,"retention_20d":null,"retention_21d":null,"retention_22d":null,"retention_23d":null,"retention_24d":null,"retention_25d":null,"retention_26d":null,"retention_27d":null,"retention_28d":null,"retention_29d":null,"retention_30d":null,"ooo":36.84},{"dateline":"2015-10-07","game":"fef","server_id":"0","platform":"total","DNU":"33","dod":"0.2692","WNU":"300","p7dod":"-0.0596","MNU":"1411","p30dod":"-0.0349","allmember":"213,866","retention_1d":null,"retention_2d":null,"retention_3d":null,"retention_4d":null,"retention_5d":null,"retention_6d":null,"retention_7d":null,"retention_8d":null,"retention_9d":null,"retention_10d":null,"retention_11d":null,"retention_12d":null,"retention_13d":null,"retention_14d":null,"retention_15d":null,"retention_16d":null,"retention_17d":null,"retention_18d":null,"retention_19d":null,"retention_20d":null,"retention_21d":null,"retention_22d":null,"retention_23d":null,"retention_24d":null,"retention_25d":null,"retention_26d":null,"retention_27d":null,"retention_28d":null,"retention_29d":null,"retention_30d":null,"ooo":26.92}],"yTickOptions":"%'d"};
    var data = {
		        "android": {
		          "money": 590,
		          "num": 1,
		          "apa": 1,
		          "apppu": "590.00"
		        },
		        "ios": {
		          "money": 1000,
		          "num": 4,
		          "apa": 2,
		          "apppu": 500
		        },
		        "is520": {
		          "money": 300,
		          "num": 0,
		          "apa": 0,
		          "apppu": "N/A"
		        }
		    };

    $(function(){
    	// drawChart(res);
    	$('#btn').click(function(){
	    	// drawBar(data,'num','總儲值筆數','num');
	    	drawBar(data,'apa','APA','apa');
	    	// drawBar(data,'apppu','ARPPU','arppu');
    	});
    });

	function drawBar(rawdata,type,title,divid){
		var chart = false;

	    var data = new google.visualization.DataTable();
        data.addColumn('string', title);
        data.addColumn('number', type);
  		data.addColumn({type: 'string', role: 'annotation'});
  		data.addColumn({type: 'string', role: 'style'});
        data.addRows([ 
    		['App store', parseFloat(rawdata.ios[type]), rawdata.ios.money.toString() ,'#3366CC'], 
        	['Google play', parseFloat(rawdata.android[type]), rawdata.android.money.toString(), '#DC3912'], 
        	['iSGame', parseFloat(rawdata.is520[type]), rawdata.is520.money.toString(), '#FF9900']
        ]);

        var options = {
        	legend: {position: 'none'},
        	hAxis:{
        		title: title,
        		titleTextStyle: {
				    italic:false,
				    bold: true
				}
        	}
        };

    	chart = new google.visualization.ColumnChart(document.getElementById(divid));
		chart.draw(data, options);
		return true;
	}

    function drawChart(res) {
	    var data = new google.visualization.DataTable();
        data.addColumn('string', 'EventTitle');
        data.addColumn('date', 'minDate');
        data.addColumn('date', 'Dummy');
        data.addColumn('date', 'Event');
	  
		var count = (res.count < 11) ? res.count+1 : 10;
        var dateMin = new Date(res.date[0]);
        var dateMax = new Date(res.date[res.count-1]);
        var ticks = [];
        $.each(res.date,function(index,value){
            ticks.push(new Date(value));
        });

        $.each(res.eventlist,function(index,row){
            var eventStart = new Date(row['date_start']) - new Date(row['dummy_start']) ;
            var eventEnd = new Date(row['date_end']) - new Date(row['date_start']);
            data.addRows([ 
                [row.title,new Date(row['dummy_start']), {v:new Date(eventStart), f:row['dummy_start']+' ~ '+row['date_start']} , {v:new Date(eventEnd), f:row['date_start']+' ~ '+row['date_end']} ] 
            ]);
        });

        var options = {
            width: width,
            backgroundColor: 'transparent',
            isStacked: true,
            hAxis: {
                baseline: dateMin,
                gridlines:{
                    count:count
                },
                viewWindow:{
                    max: dateMax,
                    min: dateMin
                },
                format:'MM-dd',
                // ticks:ticks
            },
            vAxis:{
                textPosition:'in',
            },
            legend: {position: 'none'},
            series:{
                0:{color:'transparent'},
                1:{color:'transparent'}
            },
            chartArea:{ 
                width:'100%' 
            }
        };

		// Create and draw the visualization.
		new google.charts.Bar(document.getElementById('visualization')).draw(data,options);
    }

    function drawStackedBar(rawdata){
	    var data = new google.visualization.DataTable();
	    data.addColumn('string', '總銷售金額');
	    data.addColumn('number', 'App Store');
	    data.addColumn({type: 'string', role: 'annotation'});
	    data.addColumn('number', 'Google play');
	    data.addColumn({type: 'string', role: 'annotation'});
	    data.addColumn('number', 'iSGame');
	    data.addColumn({type: 'string', role: 'annotation'});
	    data.addRows([ 
	        // ['App store', parseFloat(rawdata.ios.money), rawdata.ios.money.toString()], 
	        // ['Google play', parseFloat(rawdata.android.money), rawdata.android.money.toString()], 
	        // ['iSGame', parseFloat(rawdata.isgame.money), rawdata.isgame.money.toString()]
	        ['總銷售金額',
	         parseFloat(rawdata.ios.money), rawdata.ios.money.toString(),
	         parseFloat(rawdata.android.money),  rawdata.android.money.toString(),
	         parseFloat(rawdata.is520.money),  rawdata.is520.money.toString(),
	         // (rawdata.ios.money+rawdata.android.money+rawdata.is520.money).toString()
	        ]
	    ]);

	    var options = {
	        // legend: {position: 'none'},
	        bars:'horizontal',
	        isStacked: true,
	        hAxis:{
	            title: '總銷售金額',
	            titleTextStyle: {
	                italic:false,
	                bold: true
	            }
	        }
	    };

	    chart = new google.visualization.BarChart(document.getElementById('revenue-chart'));
	    chart.draw(data, options);
	    return true;
	}

    function drawStacked() {
    	var eventlist = [
    		{"date_start":"2015-09-30","dummy_start":"2015-09-01 00:00:00","date_end":"2015-10-06","dummy_end":"2015-10-06","id":"155","title":"test"},
    		{"date_start":"2015-10-01 ","dummy_start":"2015-09-01","date_end":"2015-10-03","dummy_end":"2015-10-06","id":"156","title":"test2"}
    	];

		var data = new google.visualization.DataTable();
		data.addColumn('string', 'City');
		data.addColumn('date', 'minDate');
		data.addColumn('date', 'Dummy');
		data.addColumn('date', 'Event');

		var dateMin = new Date("2015-09-01");
		var dateMax = new Date("2015-10-06");

    	$.each(eventlist,function(index,row){
  			var eventStart = new Date(row['date_start']) - new Date(row['dummy_start']) ;
  			var eventEnd = new Date(row['date_end']) - new Date(row['date_start']);
			data.addRows([ 
				[row.title,new Date(row['dummy_start']), {v:new Date(eventStart), f:row['dummy_start']+' ~ '+row['date_start']} , {v:new Date(eventEnd), f:row['date_start']+' ~ '+row['date_end']} ] 
			]);
			// console.log('date_start:' + new Date(row['date_start']));
			// console.log('dummy_start:' + new Date(row['dummy_start']));
			// console.log(eventStart);
			// console.log(new Date(eventStart));
			// console.log(eventEnd);
			// console.log(new Date(eventEnd));
		});


		var options = {
			isStacked: true,
			hAxis: {
				baseline: dateMin,
				gridlines:{
					count:15
				},
				viewWindow:{
					max: dateMax,
              		min: dateMin
				},
				format:'MM-dd h:i'
			},
			vAxis:{
				textPosition:'in'
			},
			legend: {position: 'none'},
			series:{
				// 0:{color:'transparent'},
				// 1:{color:'transparent'}
			}
		};

		var chart = new google.visualization.BarChart(document.getElementById('visualization'));
		chart.draw(data, options);
    }

    function drawVisualization() {
		// Create and populate the data table.
		var data = new google.visualization.DataTable();
		data.addColumn('string', 'Assignment');
		data.addColumn('date', 'Dummy');
		data.addColumn('date', 'Current Assignment');
		data.addColumn('date', 'Dummy');
		data.addColumn('date', 'Next Assignment');
		data.addRows([
		['Uranus', new Date(1298246400000), {v:new Date(26092800000), f:'2/21-12/20'}, new Date(0), {v:new Date(0), f:'1/0-1/0'}],
		['Thomas Lamonthezie', new Date(1297036800000), {v:new Date(6393600000), f:'2/7-4/22'}, new Date(0), {v:new Date(0), f:'1/0-1/0'}],
		['Shuo Li', new Date(0), {v:new Date(0), f:'1/0-1/0'}, new Date(1303689600000), {v:new Date(2937600000), f:'4/25-5/29'}],
		['Saturne', new Date(1298246400000), {v:new Date(4579200000), f:'2/21-4/15'}, new Date(0), {v:new Date(0), f:'1/0-1/0'}],
		['Roger Erwin', new Date(1301875200000), {v:new Date(1555200000), f:'4/4-4/22'}, new Date(259200000), {v:new Date(2160000000), f:'4/25-5/20'}],
		['Rick Maverick', new Date(1302652800000), {v:new Date(2592000000), f:'4/13-5/13'}, new Date(0), {v:new Date(0), f:'1/0-1/0'}],
		]);

		console.log(new Date(1298246400000));
		console.log(new Date(26092800000));
		console.log(new Date(0));

		//Define date ranges for the chart
		var dateMin = new Date(2010,11,1);
		var dateMax = new Date(2012,0,1);
		var dateToday = new Date(2012,3,15);

		var options = {
		  	width:600, height:400,
		  	bars:'horizontal',
			isStacked: true,
			series: [{color: 'transparent'},{},{color: 'transparent'},{}],
			hAxis: {
				viewWindow: {
				  max: dateMax,
				  min: dateMin,
				},
				baselineColor: 'red'
			}
		  }

		new google.charts.Bar(document.getElementById('visualization')).draw(data,options);
	}

  </script>
</head>
<body>
  <div id="visualization" style="border: 1px solid red;">
  </div>
  <div>
		<div class="inline" id='num'></div>
		<div class="inline" id='apa'></div>
		<div class="inline" id='arppu'></div>
  </div>
  <div id='revenue-chart'></div>
  <input type="button" id='btn' value="draw">
<style type="text/css">
	.inline{
		display: inline-block; 
		/*border: 1px solid blue;*/
	}
</style>


</body>
</html>