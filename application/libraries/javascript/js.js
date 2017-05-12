jQuery(document).ready(function($) {
    $('select').select2();
    
   /* var data = {
      series: [5, 3, 4]
    };*/

    var sum = function(a, b) { return a + b };

    
    new Chartist.Pie('.ct-chart', {
      series: [{
        value: 12,
        name: 'Series 1',
        className: 'bg-chart-1',
        meta: 'Meta One'
      }, {
        value: 17,
        name: 'Series 2',
        className: 'bg-chart-2',
        meta: 'Meta Two'
      }, {
        value: 55,
        name: 'Series 3',
        className: 'bg-chart-3',
        meta: 'Meta Three'
      }]
    });

    new Chartist.Bar('.ct-chart2', {
      
      series: [
        [800000, 1200000, 1400000, 1300000]
      ]
    }, {
      stackBars: false,
      axisY: {
        labelInterpolationFnc: function(value) {
          return (value / 1000) + 'k';
        }
      }
    }).on('draw', function(data) {
      if(data.type === 'bar') {
        data.element.attr({
          style: 'stroke-width: 30px'
        });
      }
    });


    var ctx = document.getElementById("skills");
    var data1= {
        labels: [
            "Red",
            "Blue",
            "Yellow"
        ],
        datasets: [
            {
                data: [71,29],
                backgroundColor: [
                    "#65a5e5",
                    "#93bfeb"
                    
                ]
            }]
    };
    var myDoughnutChart = new Chart(ctx, {
        type: 'doughnut',
        data: data1,
        options: {
            responsive: true,
            animation:{
                animateScale:true
            }
        }
    });














});