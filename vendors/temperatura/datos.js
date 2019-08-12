
	Highcharts.chart('chartcom1', {
  chart: {
    type: 'line'
  },
  title: {
    text: 'Variaciones Climáticas en el mes de mayo'
  },
  xAxis: {
    categories: [
      '08/05/2018', '09/05/2018', '10/05/2018', '11/05/2018', '12/05/2018', '13/05/2018', '14/05/2018', '15/05/2018', '16/05/2018', '17/05/2018', '18/05/2018', '19/05/2018', '20/05/2018', '21/05/2018', '22/05/2018', '23/05/2018', '24/05/2018', '25/05/2018', '26/05/2018', '27/05/2018', '28/05/2018', '29/05/2018', '30/05/2018', '31/05/2018'

      
    ],
    crosshair: true
  },
  yAxis: {
    min: 0,
    
  },
  tooltip: {
    shared: true
  },
  plotOptions: {
    column: {
      pointPadding: 0.2,
      borderWidth: 0
    }
  },
  series: [{
    name: 'Temperatura Máxima',
    data: [31.9, 31.9, 31.9, 31.9, 31.9, 31.9, 31.9, 31.9, 31.9, 31.9, 31.9, 31.9, 32.5, 32.5, 32.5, 32.5, 32.5, 32.5, 32.5, 32.5, 32.5, 32.5, 32.5, 32.5],
	  tooltip: {
      valueSuffix: ' °c'
    }

  }, {
    name: 'Temperatura Mínima',
    data: [21.8, 15.4, 15.2, 14.6, 13.8, 13.8, 13.6, 13.6, 13.6, 13.6, 13.6, 13.6, 9.8, 9.8, 9.8, 9.8, 9.8, 9.8, 9.8, 9.8, 9.8, 9.8, 9.8, 9.8],
	  tooltip: {
      valueSuffix: ' °c'
    }

  }, {
    name: 'Humedad Relativa Máxima',
    data: [65, 9,5, 95, 9,6, 99, 99, 99, 99, 99, 99, 99, 97.66666667, 96.33333333, 99, 99, 99, 99, 99, 99, 99, 99, 99],
	  tooltip: {
      valueSuffix: ' %'
    }

  }, {
    name: 'Humedad Relativa Mínima',
    data: [39, 39, 39, 39, 35, 35, 35, 35, 35, 35, 33,5, 39, 35, 32, 32, 32, 32, 32, 32, 32, 32, 32, 32],
	  tooltip: {
      valueSuffix: ' %'
    }

  }, {
    name: 'Precipitación',
    data: [9, 11, 27, 3, 4, 17, 5, 10, 9, null, 4, 8, 4, 7, 17, 10, 5, 4, 7, 6, 1, 9, 8],
	  tooltip: {
      valueSuffix: ' ml'
    }

  }]
});
	
	

Highcharts.chart('fertilizantes', {
  chart: {
    type: 'column'
  },
  title: {
    text: 'Datos de los fertilizantes más comerciales'
  },
  xAxis: {
    categories: [
      'DAP (FOSFATO DIAMONICO',
'NUTRIMON * 12 - 24 - 12',
'NUTRIMON Â® UREA G 46 - 0 ',
'NUTRIMON * 10 - 30 - 10',
'CLORURO DE POTASIO 0-0- 60',
'REMITAL - m GRADO 17-6-18- 2',
'SUPERFOSFATO TRIPLE',
'NUTRIMON * SULFATO DE AMONIO ',
'HYDROCOMPLEX',
'Renovador',
'TRIPLE 15',
'NITROMAG',
'Agrimins'

      
    ],
    crosshair: true
  },
  yAxis: {
    min: 0,
    
  },
  tooltip: {
    shared: true
  },
  plotOptions: {
    column: {
      pointPadding: 0.2,
      borderWidth: 0
    }
  },
  series: [{
    name: 'Precio',
    data: [84000, 74000, 65000, 84000, 76000, 68000, 128000, 82000, 92000, 90000, 72000, 76000, 82000],
	  tooltip: {
      valueSuffix: ' $'
    }

  }, {
    name: 'Estatus',
    data: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13],
	  tooltip: {
      valueSuffix: ' '
    }

  }]
});
	