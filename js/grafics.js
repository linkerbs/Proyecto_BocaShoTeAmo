//Grafica de cantidad
Highcharts.chart('grafico1', {

   
    title: {
      text: 'Ventas por mes'
    },
  
    xAxis: {
      tickInterval: 1,
      type: 'logarithmic'
    },
  
    yAxis: {
      type: 'logarithmic',
      minorTickInterval: 0.5
    },
  
    tooltip: {
      headerFormat: '<b>{series.name}</b><br />',
      pointFormat: 'dia = {point.x}, ventas = {point.y}'
    },
  
    series: [{
      data: [1, 2, 4, 8, 16, 32, 64, 128, 256, 512],
      pointStart: 1
    }]
  });

  