am5.ready(function() {

    // Create root element
    // https://www.amcharts.com/docs/v5/getting-started/#Root_element
    var root = am5.Root.new("chartdiv1");
    
    // Set themes
    // https://www.amcharts.com/docs/v5/concepts/themes/
    root.setThemes([
      am5themes_Animated.new(root),
      am5themes_Material.new(root)
    ]);
    
    // Create chart
    // https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/
    var chart = root.container.children.push(
      am5percent.PieChart.new(root, {
        endAngle: 270,
        innerRadius: am5.percent(50)
      })
    );
    
    // Create series
    // https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/#Series
    var series = chart.series.push(
      am5percent.PieSeries.new(root, {
        valueField: "value",
        categoryField: "category",
        endAngle: 270
      })
    );
    
    series.states.create("hidden", {
      endAngle: -90
    });
    
    // Set data
    // https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/#Setting_data
    series.data.setAll([{
      category: "Stocks",
      value: 501.9
    }, {
      category: "Crowdfunding",
      value: 301.9
    }, {
      category: "Real Estate",
      value: 201.1
    }, {
      category: "Forex",
      value: 165.8
    }, {
      category: "Crypto",
      value: 139.9
    }, ]);
    
    series.appear(1000, 100);
    series.labels.template.set("visible", false);
    series.ticks.template.set("visible", false);    
    }); // end am5.ready()

    var chart = root.container.children.push(
        am5percent.PieChart.new(root, {
          radius: am5.percent(95),
          innerRadius: am5.percent(50)
        })
      );
