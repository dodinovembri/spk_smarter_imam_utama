//[Dashboard Javascript]

//Project:	Aqua Admin - Responsive Admin Template
//Primary use:   Used only for the main dashboard (index.html)


$(function () {

  'use strict';
	
	
	window.Apex = {
		  stroke: {
			width: 3
		  },
		  markers: {
			size: 0
		  },
		  tooltip: {
			fixed: {
			  enabled: true,
			}
		  }
		};

		var randomizeArray = function (arg) {
		  var array = arg.slice();
		  var currentIndex = array.length,
			temporaryValue, randomIndex;

		  while (0 !== currentIndex) {

			randomIndex = Math.floor(Math.random() * currentIndex);
			currentIndex -= 1;

			temporaryValue = array[currentIndex];
			array[currentIndex] = array[randomIndex];
			array[randomIndex] = temporaryValue;
		  }

		  return array;
		}

		// data for the sparklines that appear below header area
		var sparklineData = [8,10,12,15,19,22,25,21,20,17,16,12,8,9,12,16,18,22,19,21,26,28,26,24];

		var spark2 = {
		  chart: {
			type: 'area',
			height: 160,
			sparkline: {
			  enabled: true
			},
		  },
		  stroke: {		  
			show: true,
			width: 0.5,
			curve: 'smooth'
		  },
		  fill: {
			opacity: 1,
			gradient: {
			  enabled: false
			}
		  },
		  series: [{
			data: randomizeArray(sparklineData)
		  }],
		  labels: [...Array(24).keys()].map(n => `2018-09-0${n+1}`),
		  yaxis: {
			min: 0
		  },
		  xaxis: {
			type: 'datetime',
		  },
		  colors: ['#1bc5bd'],
		  subtitle: {
			offsetX: 0,
			style: {
			  fontSize: '14px',
			  cssClass: 'apexcharts-yaxis-title'
			}
		  }
		}


		var spark2 = new ApexCharts(document.querySelector("#spark2"), spark2);
		spark2.render();
	
	
	
	
	
		
		var ts2 = 1484418600000;
			var dates = [];
			var spikes = [5, -5, 3, -3, 8, -8]
			for (var i = 0; i < 120; i++) {
			  ts2 = ts2 + 86400000;
			  var innerArr = [ts2, dataSeries[1][i].value];
			  dates.push(innerArr)
			}

			var options = {
			  chart: {
				type: 'area',
				stacked: false,
				height: 400,
				zoom: {
				  type: 'x',
				  enabled: true
				},
				toolbar: {
				  autoSelected: 'zoom'
				}
			  },
			  colors: ['#f64e60'],
			  dataLabels: {
				enabled: false
			  },
			  series: [{
				name: 'Stock',
				data: dates
			  }],
			  markers: {
				size: 0,
			  },
			  fill: {
				gradient: {
				  enabled: true,
				  shadeIntensity: 1,
				  inverseColors: false,
				  opacityFrom: 0.9,
				  opacityTo: 0.2,
				  stops: [0, 90, 100]
				},
			  },
			  yaxis: {
				min: 20000000,
				max: 250000000,
				labels: {
				  formatter: function (val) {
					return (val / 1000000).toFixed(0);
				  },
				},
			  },
				
			  xaxis: {
				type: 'datetime',
			  },

			  tooltip: {
				shared: false,
				y: {
				  formatter: function (val) {
					return (val / 1000000).toFixed(0)
				  }
				}
			  }
			}

			var chart = new ApexCharts(
			  document.querySelector("#chart-line"),
			  options
			);

			chart.render();
	
	
	
	
		var options = {
          series: [{
          name: 'Net Profit',
          data: [44, 55, 57, 56, 61, 58, 63]
        }, {
          name: 'Revenue',
          data: [76, 85, 101, 98, 87, 105, 91]
        }],
          chart: {
          type: 'bar',
		  foreColor:"#bac0c7",
          height: 400,
			  toolbar: {
        		show: false,
			  }
        },
        plotOptions: {
          bar: {
            horizontal: false,
            columnWidth: '30%',
            endingShape: 'rounded'
          },
        },
        dataLabels: {
          enabled: false,
        },
		grid: {
			show: true,			
		},
        stroke: {
          show: true,
          width: 2,
          colors: ['transparent']
        },
		colors: ['#f64e60', '#1bc5bd'],
        xaxis: {
          categories: ['Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug'],
			
        },
        yaxis: {
          
        },
		 legend: {
      		show: false,
		 },
        fill: {
          opacity: 1
        },
        tooltip: {
          y: {
            formatter: function (val) {
              return "$ " + val + " thousands"
            }
          },
			marker: {
			  show: false,
		  },
        }
        };

        var chart = new ApexCharts(document.querySelector("#recent_trend"), options);
        chart.render();
	
}); // End of use strict

// easypie chart
	$(function() {
		'use strict'
		$('.easypie').easyPieChart({
			easing: 'easeOutBounce',
			onStep: function(from, to, percent) {
				$(this.el).find('.percent').text(Math.round(percent));
			}
		});
		var chart = window.chart = $('.easypie').data('easyPieChart');
		$('.js_update').on('click', function() {
			chart.update(Math.random()*200-100);
		});
	});// End of use strict
