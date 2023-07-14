  var options = {
        series: [44, 55, 13, 33],
        labels: ['Apple', 'Mango', 'Orange', 'Watermelon'],
        stroke: {
          show: true,
          curve: 'smooth',
          lineCap: 'butt',
          colors: ['#651fff'],//sets border color
          width: 1.4,
          dashArray: 0,      
      },
          chart: {
          foreColor: '#fff',
          fontFamily: 'Inter',
          id: 'area-datetime',
          background: 'transparent',
          type: 'pie',
          height: 350,
          zoom: {
            enabled: true,
            type: 'x',  
            autoScaleYaxis: false,  
            zoomedArea: {
              fill: {
                color: '#90CAF9',
                opacity: 0.4
              },
              stroke: {
                color: '#0D47A1',
                opacity: 0.4,
                width: 0.5
              }
            }
                },
          dropShadow: {
            enabled: true,
            top: 0,
            left: 0,
            blur: 5,
            opacity: 0.3
          },
          toolbar: {
            show: false,
          },
        },

        dataLabels: {
          enabled: true
        },
        markers: {
          size: 0,
          style: 'hollow',
        },
        xaxis: {
          lines: {
            show: false
          },
          type: 'datetime',
          min: new Date('01 Mar 2012').getTime(),
          tickAmount: 6,
        },
        tooltip: {
          x: {
            format: 'dd MMM yyyy'
          },
          theme:"dark",
        },
         fill: {
           colors: ['#9400D3', '#4B0082', '#8B008B','#9370DB','#702963'],
           type: "gradient",
           gradient: {
            type: "vertical",
             shadeIntensity: 1,
             shade: 'light', 
             inverseColors: false,
             gradientToColors:[ '#5f10a3', '#9600db'],
             opacityFrom: 0.8,
             opacityTo: 0.2,
             stops: [0, 100],
           }
         },
          colors:['#703be3'],
          theme: {
            mode: 'light', 
            palette: 'palette10', 
            monochrome: {
                enabled: true,
                color: '#651fff',
                shadeTo: 'light',
                shadeIntensity: 0
            },
          },
          grid: {
            show: false,
            borderColor: '#90A4AE',
            strokeDashArray: 0,
            position: 'back',
            xaxis: {
                lines: {
                    show: false
                }
            },   
            yaxis: {
                lines: {
                    show: false
                }
            },  
        },
        legend: {
          show: false,
          showForSingleSeries: false,
          showForNullSeries: false,
          showForZeroSeries: false,
        },
        responsive: [
          {
            breakpoint: 426,
            options: {
              chart: {
                zoom: {
                  enabled: true,
                  type: 'x',  
                  autoScaleYaxis: false,  
                  zoomedArea: {
                    fill: {
                      color: '#90CAF9',
                      opacity: 0.4
                    },
                    stroke: {
                      color: '#0D47A1',
                      opacity: 0.4,
                      width: 1
                    }
                  }
              },
                toolbar: {
                  show: true,
                  offsetX: 0,
                  offsetY: 0,
                  tools: {
                    download: false,
                    selection: true,
                    zoom: true,
                    zoomin: true,
                    zoomout: true,
                    pan: true,
                    reset: true,
                  },
                }
              },
             
            }
          }
        ]
      
        };

        var chart = new ApexCharts(document.querySelector("#growthChartPie"), options);
        chart.render();
      
      
      //   var resetCssClasses = function(activeEl) {
      //   var els = document.querySelectorAll('button')
      //   Array.prototype.forEach.call(els, function(el) {
      //     el.classList.remove('active')
      //   })
      
      //   activeEl.target.classList.add('active')
      // }
      
