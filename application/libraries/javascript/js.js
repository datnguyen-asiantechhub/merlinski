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
*-----------------------Show selected file name + preview---------------------------------
*/
    $('#imageFile').change(function() {
      var file = $(this).prop("files");
      var listImage = $.map(file, function(val){return val.name});
      var countFiles = $(this)[0].files.length;
      var listfilesname = '';
      var imgPath = $(this)[0].value;
      var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
      var image_holder = $("#image-holder");
      image_holder.empty();

      if (extn == "gif" || extn == "png" || extn == "jpg" || extn == "jpeg") {
         if (typeof (FileReader) != "undefined") {

             //loop for each file selected for uploaded.
             for (var i = 0; i < countFiles; i++) {

                 var reader = new FileReader();
                 reader.onload = function (e) {
                     $("<img />", {
                        "src": e.target.result,
                        "class": "thumbnail",
                        "alt": listImage[i]
                     }).appendTo(image_holder);
                 }

                 listfilesname = listfilesname + listImage[i] + ", ";
                 image_holder.show();
                 reader.readAsDataURL($(this)[0].files[i]);
             }$('.image-select').val(listfilesname.slice(0, -2));

         } else {
             alert("This browser does not support FileReader.");
         }
     } else {
         $('.image-select').val("Wrong image format! (Only .gif, .png, .jpg, .jpeg)");
     }
  });

    $(".video-mask").hide();
    $('#videoFile').change(function() {
      var file = $(this).prop("files");
      var listVideo = $.map(file, function(val){return val.name});
      var listfilesname = '';
      var countFiles = $(this)[0].files.length;
      var vidPath = $(this)[0].value;
      var extn = vidPath.substring(vidPath.lastIndexOf('.') + 1).toLowerCase();
      var video_holder = $("#video-holder");
      video_holder.empty();

      if (extn == "mp4") {
         if (typeof (FileReader) != "undefined") {
              $(".video-mask").show();
             //loop for each file selected for uploaded.
             for (var i = 0; i < countFiles; i++) {

                 var reader = new FileReader();
                 reader.onload = function (e) {
                     $("<img />", {
                        "src": e.target.result,
                        "class": "thumbnail",
                        "alt": listVideo[i]
                     }).appendTo(video_holder);
                 }

                 listfilesname = listfilesname + listVideo[i] + ", ";
                 video_holder.show();
                 reader.readAsDataURL($(this)[0].files[i]);
             }$('.video-select').val(listfilesname.slice(0, -2));

         } else {
             alert("This browser does not support FileReader.");
         }
     } else {
         $('.video-select').val("Wrong video format! (Only mp4 file)");
     }
  });

//-------------------------------------------------------------------

/*
*
*-----------------------Plugin Chart----------------------------------
*/
   
//=====================Colume Chart Plugin==============
Highcharts.chart('col_chart', {
    chart: {
        type: 'column',
        height: 200,
        backgroundColor: 'transparent',
        style:{
          fontFamily: 'Century Gothic'
        }
    },
    
    title: {
        text: ''
    },   
    
    xAxis:{
      visible: false
    },

    yAxis: {
        min: 0,
        title: {
            text: ''
        },
        labels: {
            style: {
                color: '#ffffff'
            }
        }
    },
    
    legend: {
        enabled: false
    },
    
    tooltip: {
        pointFormat: 'Visited: <b>{point.y:.1f}</b>'
    },
    
    plotOptions: {
        series: {
            pointWidth:20,
            color: '#c8c8c8',
            borderColor: '#969696',
            borderWidth: '2',
            groupPadding: 0
        }
    },
    
    series: [{
        name: 'Population',
        data: [
            ["water Park", 30],
            ["water Park", 40],
            ["water Park", 50],
            ["water Park", 30],
            ["water Park", 40],
            ["water Park", 50],
            ["water Park", 30],
            ["water Park", 40],
            ["water Park", 50],
            ["water Park", 30],
            ["water Park", 40],
            ["water Park", 50],
            ["water Park", 30],
            ["water Park", 40],
            ["water Park", 50],
            ["water Park", 30],
            ["water Park", 40],
            ["water Park", 50],
            ["water Park", 30],
            ["water Park", 40],
            ["water Park", 50],
            ["water Park", 30],
            ["water Park", 40],
            ["water Park", 50],
            ["water Park", 30],
            ["water Park", 40],
            ["water Park", 50],
            ["water Park", 30],
            ["water Park", 40],
            ["water Park", 50],
            ["water Park", 30],
            ["water Park", 40],
            ["water Park", 50],
            
        ],
        
        dataLabels: {
            enabled: true,
            rotation: 90,
            color: '#FFFFFF',
            align: 'center',
            verticalAlign: 'bottom',
            format: '{point.name}', // one decimal
            y: 50, // 10 pixels down from the top
            style: {
                fontSize: '13px',
                fontFamily: 'Century Gothic'
            }
        }
    }]
});

//---------------------------------------------
  
//=======================Pie Chart======================
    google.charts.load('current', {packages: ['corechart']});
    google.charts.setOnLoadCallback(drawPieChart);
    function drawPieChart() {
    var piedata = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Roller Coatster',    1],
          ['Others',             3],
          ['Water Park',        11]
          
        ]);

        var options = {
          chartArea:{
            left: '50%'
          },
         legend: 'none',
         backgroundColor: { fill:'transparent' },
         colors: ['#535176','#454564','#31354B'],
         width: '300',
         height: '300',
         pieSliceBorderColor: 'transparent'
        };

        var piechart = new google.visualization.PieChart(document.getElementById('pie_chart'));

        piechart.draw(piedata,options);
  }

//--------------------------------------------------------------------------

//=====================line Chart===================
  google.charts.load('current', {packages: ['corechart', 'line']});
  google.charts.setOnLoadCallback(drawLineChart);

  function drawLineChart() {
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
        chartArea:{
          width: '100%',
          left: '10%'
        },
        vAxis: {
          title: 'Popularity'
        },
        width: '650',
        colors: ['#39BA99'],
        legend: 'none',
        backgroundColor: { fill:'transparent' }
      };
      var linechart = new google.visualization.LineChart(document.getElementById('line_chart'));

      linechart.draw(linedata, options);
  }

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

