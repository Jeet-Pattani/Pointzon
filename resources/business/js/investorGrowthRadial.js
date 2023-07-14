var optionsCircle1 = {
    chart: {
      type: 'radialBar',
      foreColor: '#fff',
      width: 350,
      zoom: {
        enabled: false
      },
    },
    colors: ['#058049'],
    plotOptions: {
      radialBar: {
        dataLabels: {
          name: {
            show: false
          },
          value: {
            offsetY: 0
          }
        }
      }
    },
    series: [65],
    theme: {
      monochrome: {
        enabled: false
      }
    },
    legend: {
      show: false
    },
    responsive: [{
      breakpoint: 480,
      options: {
        chart: {
          width: 420
        },
      }
    }],
  }
  
  var chartCircle1 = new ApexCharts(document.querySelector('#radialBar1'), optionsCircle1);
  chartCircle1.render();
  