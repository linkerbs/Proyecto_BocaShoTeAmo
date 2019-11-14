Highcharts.theme = {
    colors: ['#058DC7', '#50B432', '#ED561B', '#DDDF00', '#24CBE5', '#64E572',   
             '#FF9655', '#FFF263', '#6AF9C4'],
    chart: {
        backgroundColor: {
            linearGradient: [0, 0, 500, 500],
            stops: [
                [0, '#212121'],
                [1, '#212121']
            ]
        },
    },
    title: {
        style: {
            color: '#fff',
            font: 'bold 16px "Trebuchet MS", Verdana, sans-serif'
        }
    },
    subtitle: {
        style: {
            color: '#707070',
            font: 'bold 12px "Trebuchet MS", Verdana, sans-serif'
        }
    },
    legend: {
        itemStyle: {
            font: '9pt Trebuchet MS, Verdana, sans-serif',
            color: 'black'
        },
        itemHoverStyle:{
            color: 'white'
        }   
    }
};
// Apply the theme
Highcharts.setOptions(Highcharts.theme);