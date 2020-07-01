$(function() {
    "use strict";

	// chart 1
	 
		  var ctx11 = document.getElementById('dash2-chart1').getContext('2d');
		
			var myChart = new Chart(ctx11, {
				type: 'bar',
				data: {
					labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
					datasets: [{
						label: 'Orders',
						data: [25, 23, 27, 15, 27, 23, 31, 41, 31, 25, 35, 25, 30],
						backgroundColor: 'rgba(255, 255, 255, 0.12)',
						borderColor: "transparent",
						borderWidth: 3
					}, {
						label: 'Payments',
						type: 'line',
						data: [10, 8, 12, 5, 12, 8, 16, 25, 15, 10, 20, 10, 15],
						backgroundColor: "rgba(255, 255, 255, 0.12)",
						borderColor: "#fff",
						pointBackgroundColor:'transparent',
                        pointHoverBackgroundColor:'#fff',
						pointBorderWidth :3,
						pointRadius :4,
						pointHoverRadius :4,
						borderWidth: 3
						
					}]
				},
			options: {
				maintainAspectRatio: false,
				legend: {
				  display: false,
				  labels: {
					fontColor: '#ddd',  
					boxWidth:40
				  }
				},
				tooltips: {
				  displayColors:false
				},	
			  scales: {
				  xAxes: [{
					barPercentage: .4,
					ticks: {
						beginAtZero:true,
						fontColor: '#ddd'
					},
					gridLines: {
					  display: true ,
					  color: "rgba(221, 221, 221, 0.08)"
					},
				  }],
				   yAxes: [{
					ticks: {
						beginAtZero:true,
						fontColor: '#ddd'
					},
					gridLines: {
					  display: true ,
					  color: "rgba(221, 221, 221, 0.08)"
					},
				  }]
				 }

			 }
			}); 
			
	//chart epp
	  var options = {
            chart: {
                width: 180,
        //height: 150,
                type: 'radialBar',
            },
            plotOptions: {
                radialBar: {
                    //startAngle: -135,
                    //endAngle: 135,
                    hollow: {
                      margin: 0,
                      size: '65%',
                      background: 'rgba(0, 0, 0, 0.0)',
                      image: undefined,
                      imageOffsetX: 0,
                      imageOffsetY: 0,
                      position: 'front',
                      dropShadow: {
                        enabled: true,
                        top: 3,
                        left: 0,
                        blur: 4,
                        opacity: 0.1
                      }
                    },
                    track: {
                      background: 'rgba(255, 255, 255, 0.12)',
                      strokeWidth: '100%',
                      margin: 0, // margin is in pixels
                      dropShadow: {
                        enabled: true,
                        top: -3,
                        left: 0,
                        blur: 4,
                        opacity: 0.1
                      }
                    },
                    dataLabels: {
                        name: {
                            fontSize: '14px',
                            color: '#fff',
                            offsetY: -10,
              show: false
                        },
                        value: {
                            offsetY: 6,
                            fontSize: '20px',
                            color: '#fff',
                            formatter: function (val) {
                                return val + "%";
                            }
                        }
                    }
                }
            },
            fill: {
                type: 'gradient',
                gradient: {
                    shade: 'dark',
                    shadeIntensity: 0.15,
                    gradientToColors: ['#fff'],
                    inverseColors: false,
                    opacityFrom: 1,
                    opacityTo: 1,
                    stops: [0, 50, 65, 91]
                },
            },
            stroke: {
                dashArray: 4,
            },
            colors: ["#fff"],
            series: [76],
            labels: ['Assignments'],
            
        }

       var chart = new ApexCharts(
            document.querySelector("#assignments"),
            options
        );
        
        chart.render();

	
	
	
	
	//chart respel
	var options = {
            chart: {
                width: 180,
        //height: 150,
                type: 'radialBar',
            },
            plotOptions: {
                radialBar: {
                    //startAngle: -135,
                    //endAngle: 135,
                    hollow: {
                      margin: 0,
                      size: '65%',
                      background: 'rgba(255, 255, 255, 0.0)',
                      image: undefined,
                      imageOffsetX: 0,
                      imageOffsetY: 0,
                      position: 'front',
                      dropShadow: {
                        enabled: true,
                        top: 3,
                        left: 0,
                        blur: 4,
                        opacity: 0.1
                      }
                    },
                    track: {
                      background: 'rgba(255, 255, 255, 0.12)',
                      strokeWidth: '100%',
                      margin: 0, // margin is in pixels
                      dropShadow: {
                        enabled: true,
                        top: -3,
                        left: 0,
                        blur: 4,
                        opacity: 0.1
                      }
                    },
                    dataLabels: {
                        name: {
                            fontSize: '14px',
                            color: '#fff',
                            offsetY: -10,
              show: false
                        },
                        value: {
                            offsetY: 6,
                            fontSize: '20px',
                            color: '#fff',
                            formatter: function (val) {
                                return val + "%";
                            }
                        }
                    }
                }
            },
            fill: {
                type: 'gradient',
                gradient: {
                    shade: 'dark',
                    shadeIntensity: 0.15,
                    gradientToColors: ['#fff'],
                    inverseColors: false,
                    opacityFrom: 1,
                    opacityTo: 1,
                    stops: [0, 50, 65, 91]
                },
            },
            stroke: {
                dashArray: 4,
            },
            colors: ["#fff"],
            series: [83],
            labels: ['interviews'],
            
        }

       var chart = new ApexCharts(
            document.querySelector("#interviews"),
            options
        );
        
        chart.render();

		
   });	 
   