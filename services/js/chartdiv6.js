var options = {
    series: [{
      name:"Profit in %",
     data: [
       [1327359600000,30.95],
       [1327446000000,31.34],
       [1327532400000,31.18],
       [1327618800000,31.05],
       [1327878000000,31.00],
       [1327964400000,30.95],
       [1328050800000,31.24],
       [1328137200000,31.29],
       [1328223600000,31.85],
       [1328482800000,31.86],
       [1328569200000,32.28],
       [1328655600000,32.10],
       [1328742000000,32.65],
       [1328828400000,32.21],
       [1329087600000,32.35],
       [1329174000000,32.44],
       [1329260400000,32.46],
       [1329346800000,32.86],
       [1329433200000,32.75],
       [1329778800000,32.54],
       [1329865200000,32.33],
       [1329951600000,32.97],
       [1330038000000,33.41],
       [1330297200000,33.27],
       [1330383600000,33.27],
       [1330470000000,32.89],
       [1330556400000,33.10],
     [1330642800000,33.73],
       [1330902000000,33.22],
       [1330988400000,31.99],
       [1331074800000,32.41],
       [1331161200000,33.05],
       [1331247600000,33.64],
       [1331506800000,33.56],
       [1331593200000,34.22],
       [1331679600000,33.77],
       [1331766000000,34.17],
       [1331852400000,33.82],
       [1332111600000,34.51],
       [1332198000000,33.16],
      [1332284400000,33.56],
       [1332370800000,33.71],
       [1332457200000,33.81],
   [1332712800000,34.40],
       [1332799200000,34.63],
       [1332885600000,34.46],
       [1332972000000,34.48],
       [1333058400000,34.31],
     [1333317600000,34.70],
       [1333404000000,34.31],
       [1333490400000,33.46],
     [1333576800000,33.59],
       [1333922400000,33.22],
      [1334008800000,32.61],
       [1334095200000,33.01],
       [1334181600000,33.55],
       [1334268000000,33.18],
       [1334527200000,32.84],
       [1334613600000,33.84],
      [1334700000000,33.39],
      [1334786400000,32.91],
      [1334872800000,33.06],
      [1335132000000,32.62],
      [1335218400000,32.40],
      [1335304800000,33.13],
      [1335391200000,33.26],
      [1335477600000,33.58],
      [1335736800000,33.55],
      [1335823200000,33.77],
      [1335909600000,33.76],
      [1335996000000,33.32],
      [1336082400000,32.61],
      [1336341600000,32.52],
       [1336428000000,32.67],
       [1336514400000,32.52],
       [1336600800000,31.92],
       [1336687200000,32.20],
      [1336946400000,32.23],
       [1337032800000,32.33],
       [1337119200000,32.36],
       [1337205600000,32.01],
       [1337292000000,31.31],
       [1337551200000,32.01],

     ]

  }],
  stroke: {
    show: true,
    curve: 'smooth',
    lineCap: 'butt',
    colors: ['#651fff'],
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
      blur: 5,
      opacity: 0.3
    },
    toolbar: {
      show: true,
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
    theme:'dark',
  },
   fill: {
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

  var chart = new ApexCharts(document.querySelector("#portfolio2"), options);
  chart.render();


//   var resetCssClasses = function(activeEl) {
//   var els = document.querySelectorAll('button')
//   Array.prototype.forEach.call(els, function(el) {
//     el.classList.remove('active')
//   })

//   activeEl.target.classList.add('active')
// }

