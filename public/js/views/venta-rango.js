/*========================================
			RANGO DE FECHAS PAQUETE 
========================================*/
// DATEPIKER CALENDARIO PERSONALIZABLE 
$('#daterange-btn').daterangepicker( 
    {
      ranges   : {
        // MOMENT PRUEBA SI UNA FECHA ES DE HOY DE AYER DENTRO DE UNA SEMANA O DOS SEMANAS
        'Hoy'    : [moment(), moment()],   
        'Ayer'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
        'Últimos 7 días' : [moment().subtract(6, 'days'), moment()],
        'Últimos 30 días': [moment().subtract(29, 'days'), moment()],
        'Este mes'  : [moment().startOf('month'), moment().endOf('month')],
        'Último mes'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
      },
      startDate: moment(),
      endDate  : moment()
    },

    // CAPTURAE EL INICIO Y EL FINAL DE LA FECHA REQUERIDA EN EL REPORTE
    function (start, end) {
      $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));

      var fechaInicial = start.format('YYYY-MM-DD');

      var fechaFinal = end.format('YYYY-MM-DD');

      var capturarRango = $("#daterange-btn span").html();

      $("#fechaInicial").val(fechaInicial);
      $("#fechaFinal").val(fechaFinal);

    }

);
// EJECUCION CON UN METODO MOMENT FUNTIONANONIMA 
$(document).ready(function(){
    var start = moment();
    var end = moment();
    $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
});