jQuery(document).ready(function($) {
  $('select').select2();

/*
*-----------------------Plugin datepicker----------------------------------
*
*/
  $('#datepickerfrom').datepicker({
    	format: 'dd/mm/yyyy'
    }).on('changeDate', function() {
      $('#selectedFromDate').val($('#datepicker').datepicker('getFormattedDate'));
  });

  $('#datepickerto').datepicker({
  	 format: 'dd/mm/yyyy'
    }).on('changeDate', function() {
      $('#selectedToDate').val($('#datepicker').datepicker('getFormattedDate'));
  });

  $('#form_datetime').datepicker({
      format: 'dd/mm/yyyy'
    }).on('changeDate', function() {
      $('#useTime').val($('#datepicker').datepicker('getFormattedDate'));
  });

//--------------------------------------------------------------------------

/*
*
*-----------------------Plugin Chart----------------------------------
*/
   
  window.onload = function () {
  var chart = new CanvasJS.Chart("piechart",
  {
      title:{
          text: "How my time is spent in a week?",
          fontFamily: "arial black"
      },
              animationEnabled: true,
      legend: {
          verticalAlign: "bottom",
          horizontalAlign: "center"
      },
      theme: "theme1",
      data: [
      {        
          type: "pie",
          indexLabelFontFamily: "Garamond",       
          indexLabelFontSize: 20,
          indexLabelFontWeight: "bold",
          startAngle:0,
          indexLabelFontColor: "MistyRose",       
          indexLabelLineColor: "darkgrey", 
          indexLabelPlacement: "inside", 
          toolTipContent: "{name}: {y}hrs",
          showInLegend: true,
          indexLabel: "#percent%",    
          dataPoints: [
              {  y: 52, name: "Time At Work", legendMarkerType: "triangle"},
              {  y: 44, name: "Time At Home", legendMarkerType: "square"},
              {  y: 12, name: "Time Spent Out", legendMarkerType: "circle"}
          ]
      }
      ]
    });
    chart.render();
  };
//=====================Colume Chart==============
  google.charts.load('current', {packages: ['corechart', 'bar']});
  google.charts.setOnLoadCallback(drawBasic);

  function drawBasic() {

    var data = new google.visualization.DataTable();
    data.addColumn('timeofday', 'Time of Day');
    data.addColumn('number');

    data.addRows([
      [{v: [8, 0, 0], f: '8 am'}, 1],
      [{v: [9, 0, 0], f: '9 am'}, 2],
      [{v: [10, 0, 0], f:'10 am'}, 3],
      [{v: [11, 0, 0], f: '11 am'}, 4],
      [{v: [12, 0, 0], f: '12 pm'}, 5],
      [{v: [13, 0, 0], f: '1 pm'}, 6],
      [{v: [14, 0, 0], f: '2 pm'}, 7],
      [{v: [15, 0, 0], f: '3 pm'}, 8],
      [{v: [16, 0, 0], f: '4 pm'}, 9],
      [{v: [17, 0, 0], f: '5 pm'}, 10],
      [{v: [18, 0, 0], f: '6 pm'}, 11],
    ]);

    var options = {
      hAxis: {
        //title: 'Time of Day',
        //format: 'h:mm a',
        viewWindow: {
          min: [7, 30, 0],
          max: [18, 30, 0]
        }
      },
      /*vAxis: {
        title: 'Rating (scale of 1-10)'
      }*/
    };
    var chart = new google.visualization.ColumnChart(
      document.getElementById('col_chart'));

    chart.draw(data, options);

//=====================line Chart===================    
    var linedata = new google.visualization.DataTable();
      linedata.addColumn('number', 'X');
      linedata.addColumn('number', 'Dogs');

      linedata.addRows([
        [0, 0],   [1, 10],  [2, 23],  [3, 17],  [4, 18],  [5, 9],
        [6, 11],  [7, 27],  [8, 33],  [9, 40],  [10, 32], [11, 35],
        [12, 30], [13, 40], [14, 42], [15, 47], [16, 44], [17, 48],
        [18, 52], [19, 54], [20, 42], [21, 55], [22, 56], [23, 57],
        [24, 60], [25, 50], [26, 52], [27, 51], [28, 49], [29, 53],
        [30, 55], [31, 60], [32, 61], [33, 59], [34, 62], [35, 65],
        [36, 62], [37, 58], [38, 55], [39, 61], [40, 64], [41, 65],
        [42, 63], [43, 66], [44, 67], [45, 69], [46, 69], [47, 70],
        [48, 72], [49, 68], [50, 66], [51, 65], [52, 67], [53, 70],
        [54, 71], [55, 72], [56, 73], [57, 75], [58, 70], [59, 68],
        [60, 64], [61, 60], [62, 65], [63, 67], [64, 68], [65, 69],
        [66, 70], [67, 72], [68, 75], [69, 80]
      ]);

      var options = {
        hAxis: {
          title: 'Time'
        },
        vAxis: {
          title: 'Popularity'
        }
      };
      var linechart = new google.visualization.LineChart(document.getElementById('line_chart'));

      linechart.draw(linedata, options);

//=======================Pie Chart======================
    var piedata = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Work',     11],
          ['Eat',      2],
          ['Commute',  2],
          ['Watch TV', 2],
          ['Sleep',    7]
        ]);

        var options = {
          title: 'My Daily Activities'
        };

        var piechart = new google.visualization.PieChart(document.getElementById('pie_chart'));

        piechart.draw(piedata);
  }

//--------------------------------------------------------------------------

/*
*
*----------------------Plugin Handler--------------------------------------
*/
  $( "#spring" ).slider({
      value:100,
      min: 0,
      max: 100,
      step: 1,
      slide: function( event, ui ) { $( "#spring-percent" ).val( ui.value + "%" ); }
    });
  $( "#summer" ).slider({
      value:100,
      min: 0,
      max: 100,
      step: 1,
      slide: function( event, ui ) { $( "#summer-percent" ).val( ui.value + "%" ); }
    });
  $( "#autumn" ).slider({
      value:100,
      min: 0,
      max: 100,
      step: 1,
      slide: function( event, ui ) { $( "#autumn-percent" ).val( ui.value + "%" ); }
    });
  $( "#winter" ).slider({
      value:100,
      min: 0,
      max: 100,
      step: 1,
      slide: function( event, ui ) { $( "#winter-percent" ).val( ui.value + "%" ); }
    });
  $( "#low" ).slider({
      value:100,
      min: 0,
      max: 100,
      step: 1,
      slide: function( event, ui ) { $( "#low-percent" ).val( ui.value + "%" ); }
    });
  $( "#middle" ).slider({
      value:100,
      min: 0,
      max: 100,
      step: 1,
      slide: function( event, ui ) { $( "#middle-percent" ).val( ui.value + "%" ); }
    });
  $( "#high" ).slider({
      value:100,
      min: 0,
      max: 100,
      step: 1,
      slide: function( event, ui ) { $( "#high-percent" ).val( ui.value + "%" ); }
    });
  $( "#max" ).slider({
      value:100,
      min: 0,
      max: 100,
      step: 1,
      slide: function( event, ui ) { $( "#max-percent" ).val( ui.value + "%" ); }
    });
    $( "#spring-percent" ).val( $( "#spring" ).slider( "value" ) + "%" );
    $( "#autumn-percent" ).val( $( "#autumn" ).slider( "value" ) + "%" );
    $( "#summer-percent" ).val( $( "#summer" ).slider( "value" ) + "%" );
    $( "#winter-percent" ).val( $( "#winter" ).slider( "value" ) + "%" );
    $( "#low-percent" ).val( $( "#low" ).slider( "value" ) + "%" );
    $( "#middle-percent" ).val( $( "#middle" ).slider( "value" ) + "%" );
    $( "#high-percent" ).val( $( "#high" ).slider( "value" ) + "%" );
    $( "#max-percent" ).val( $( "#max" ).slider( "value" ) + "%" );
});

