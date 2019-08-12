
//gráfico tipo pie para 
Highcharts.chart('container', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Requermirientos nutricionales momento 1'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}Kg/Ha</b>'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} Kg/Ha',
                style: {
                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                }
            }
        }
    },
    series: [{
        name: 'Nutrición',
        colorByPoint: true,
        data: [{
            name: 'Nitrógeno',
            y: 180,
            sliced: true,
            selected: true
        }, {
            name: 'Fosforo',
            y: 60
        }, {
            name: 'Potasio',
            y: 200
        }, {
            name: 'Magnesio',
            y: 20
        }, {
            name: 'Calcio',
            y: 10
        }, {
            name: 'Boro',
            y: 2.2
        }, {
            name: 'Zinc',
            y: 3
        }]
    }]
});