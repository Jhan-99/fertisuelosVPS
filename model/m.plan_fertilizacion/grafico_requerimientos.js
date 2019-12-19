
		 $(document).ready(function() {  
			var D_NITROGENO = $("#D_NITROGENO").val();
			var D_FOSFORO = $("#D_FOSFORO").val();
			var D_POTASIO = $("#D_POTASIO").val();
			var D_MAGNESIO = $("#D_MAGNESIO").val();
			var D_CALCIO = $("#D_CALCIO").val();
			var D_AZUFRE = $("#D_AZUFRE").val();
			var D_BORO = $("#D_BORO").val();
			var D_ZINC = $("#D_ZINC").val();
			var D_COBRE = $("#D_COBRE").val();
			var D_HIERRO = $("#D_HIERRO").val();
			 
       Highcharts.chart('container', {
    chart: {
        type: 'spline'
    },
    title: {
        text: 'Monthly Average Temperature'
    },
    subtitle: {
        text: 'Source: WorldClimate.com'
    },
    xAxis: {
        categories: ['N', 'P', 'Ca', 'Mg', 'K', 'Mn',
            'B', 'Zn', 'Cu', 's', 'Cl', 'Fe']
    },
    yAxis: {
        title: {
            text: 'Elementos'
        },
        labels: {
            formatter: function () {
                return this.value + '°';
            }
        }
    },
    tooltip: {
        crosshairs: true,
        shared: true
    },
    plotOptions: {
        spline: {
            marker: {
                radius: 4,
                lineColor: '#666666',
                lineWidth: 1
            }
        }
    },
	
    series: [{
        name: 'Tokyo',
        marker: {
            symbol: 'square'
        },
        data: [7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2, {
            y: 26.5,
            marker: {
                symbol: 'url(https://www.highcharts.com/samples/graphics/sun.png)'
            }
        }, 23.3, 18.3, 13.9, 9.6]

    }, {
        name: 'London',
        marker: {
            symbol: 'diamond'
        },
        data: [{
            y: D_NITROGENO,
    
        }, 4.2, 5.7, 8.5, 11.9, 15.2, 17.0, 16.6, 14.2, 10.3, 6.6, 4.8]
    }]
});
         });
      