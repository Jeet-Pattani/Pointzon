var options = {
    series: [{
      name:"Profit in %",
      data: [
        {
          x: "02-10-2021 GMT",
          y: 34
        },
        {
          x: "02-11-2021 GMT",
          y: 43
        },
        {
          x: "02-12-2021 GMT",
          y: 31
        },
        {
          x: "02-13-2021 GMT",
          y: 43
        },
        {
          x: "02-14-2021 GMT",
          y: 33
        },
        {
          x: "02-15-2021 GMT",
          y: 52
        }
      ]

  }],
  stroke: {
    show: true,
    curve: 'smooth',
    lineCap: 'butt',
    colors: ['#20e679'],//changes the border color
    width: 1.4,
    dashArray: 0,      
},
    chart: {
    foreColor: '#fff',
    fontFamily: 'Inter',
    id: 'area-datetime',
    type: 'area',
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
      blur: 7,
      opacity: 0.3
    },
    toolbar: {
      show: false,
      offsetX: 0,
      offsetY: 0,
      tools: {
        download: true,
        selection: true,
        zoom: true,
        zoomin: true,
        zoomout: true,
        pan: true,
        reset: true,
        customIcons: []
      },
    },
  },

  dataLabels: {
    enabled: false
  },
  markers: {
    size: 0,
    style: 'hollow',
  },
  xaxis: {
    lines: {
      show: true
    },
    type: 'datetime',
    // min: new Date('01 Mar 2012').getTime(),
  },
  tooltip: {
    x: {
      format: 'dd MMM yyyy'
    },
    theme:"dark",
  },
   fill: {
     type: "gradient",
     gradient: {
      type: "vertical",
       shadeIntensity: 1,
       shade: 'light', 
       inverseColors: false,
       gradientToColors:[ '#00791E', '#004600'],
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
          //color: '#651fff',
          color:'#20e679',
          shadeTo: 'light',
          shadeIntensity: 0
      },
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
                //color: '#90CAF9',
                color:'#20e679',
                opacity: 0.4
              },
              stroke: {
               //color: '#0D47A1',
                color:'#20e679',
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

  var chart = new ApexCharts(document.querySelector("#investorGrowthLine"), options);
  chart.render();


//   var resetCssClasses = function(activeEl) {
//   var els = document.querySelectorAll('button')
//   Array.prototype.forEach.call(els, function(el) {
//     el.classList.remove('active')
//   })

//   activeEl.target.classList.add('active')
// }

