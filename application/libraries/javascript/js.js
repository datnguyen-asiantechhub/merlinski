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
   
  /*window.onload = function () {
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
  };*/
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
        
        vAxis: {
          title: 'Popularity'
        },
        width: '600',
        height: '100%',
        colors: ['#7ac142'],

        backgroundColor: { fill:'transparent' }
      };
      var linechart = new google.visualization.LineChart(document.getElementById('line_chart'));

      linechart.draw(linedata, options);

//=======================Pie Chart======================
    var piedata = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          
          ['Roller Coatster',      1],
          ['Others',  3],
          ['Water Park',     11]
          
        ]);

        var options = {          
          backgroundColor: { fill:'transparent' },
          colors: ['#535176','#454564','#31354B'],
          legend: 'none',
           width: '900',
          height: '500'
        };

        var piechart = new google.visualization.PieChart(document.getElementById('pie_chart'));

        piechart.draw(piedata,options);
        /*Homepage pie chart*/
        var piedata1 = google.visualization.arrayToDataTable([
            ['Task', 'Hours per Day'],
            
            ['Roller Coatster',      1],
            ['Others',  3],
            ['Water Park',     11]
            
          ]);

          var options1 = {          
            backgroundColor: { fill:'transparent' },
            colors: ['#535176','#454564','#31354B'],
            legend: 'none',
             width: '200',
            height: '250'
          };

          var piechart1 = new google.visualization.PieChart(document.getElementById('pie_chart1'));

          piechart1.draw(piedata1,options1);
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
/*-------------------------------flexslider----------------*/
var slideIndex = 0;
  showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace("active-slides", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active-slides";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}

