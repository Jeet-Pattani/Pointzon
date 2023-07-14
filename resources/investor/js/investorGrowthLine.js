
var options = {
  series: [{
  name: 'Sales',
  data: [4, 3, 10, 9, 29, 19, 22, 9, 12, 7, 19, 5, 13, 9, 17, 2, 7, 5]
}],
  chart: {
  foreColor: '#fff',
  width: 500,
  type: 'line',
  toolbar: {
    show: false,
  },
},
forecastDataPoints: {
  count: 7
},
stroke: {
  width: 5,
  curve: 'smooth'
},
xaxis: {
  type: 'datetime',
  categories: ['1/11/2000', '2/11/2000', '3/11/2000', '4/11/2000', '5/11/2000', '6/11/2000', '7/11/2000', '8/11/2000', '9/11/2000', '10/11/2000', '11/11/2000', '12/11/2000', '1/11/2001', '2/11/2001', '3/11/2001','4/11/2001' ,'5/11/2001' ,'6/11/2001'],
  tickAmount: 10,
  labels: {
    formatter: function(value, timestamp, opts) {
      return opts.dateFormatter(new Date(timestamp), 'dd MMM')
    }
  }
},
title: {
  text: 'Portfolio Growth',
  align: 'center',
  margin: 30,
  style: {
    fontSize: "16px",
    color: '#fff',
  }
},
fill: {
  type: 'gradient',
  gradient: {
    shade: 'dark',
    gradientToColors: [ '#07b567'],
    shadeIntensity: 1,
    type: 'horizontal',
    opacityFrom: 1,
    opacityTo: 1,
    stops: [0, 100, 100, 100]
  },
},
grid: {
  show: true,
},
colors:['#058049'],
tooltip: {
  x: {
    format: 'dd MMM yyyy'
  },
  theme:"dark",
},
yaxis: {
  min: -10,
  max: 40
}
};

var chart = new ApexCharts(document.querySelector("#investorGrowthLine"), options);
chart.render();

