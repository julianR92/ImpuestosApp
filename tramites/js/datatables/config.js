function iniciarTabla()
{
	$('#tabla').DataTable({
        paging:true,
        searching:true,
        responsive: true,
        pageLength: 40,
        "language": {
            "emptyTable":     "No hay datos",
            "lengthMenu": "Mostrando _MENU_ elementos por página",
            "processing": "Procesando...",
            "zeroRecords": "No se encontraron registros",
            "search": "Buscar",
            "infoEmpty": "No se encontraron registros",
            "infoFiltered":"(filtrado de un total de _MAX_ registros)",
            "info":"Mostrando registros del _START_ al _END_ para un total de: _TOTAL_ registros.",

            "paginate": {
                "first":    "Primero",
                "last":     "Último",
                "next":     "Siguiente",
                "previous": "Anterior" 
            },
        },
        "dom":'<"row"<"col-md-7 col-sm-12"l><"col-md-3 col-sm-12"f><"col-md-2 col-sm-12 text-right"B>>t<"bottom"<"row"<"col-md-5 col-sm-12"i><"col-md-7 col-sm-12"p>>><"clear">',
        buttons: [
            {
                /*
              extend: 'csv',
              text: 'Exportar',
              charset: 'windows-1251',
              bom: true
              */
            extend:'excelHtml5',
           
            text: 'Exportar',
            charset: 'windows-1251',
            className:'btn-primary btn-md'
            }
        ],
    });
   
} 
$(document).ready(function(){
    iniciarTabla();
});

/* Results in:
    <div class="top">
      {information}
    </div>
    {processing}
    {table}
    <div class="bottom">
      {filter}
      {length}
      {pagination}
    </div>
    <div class="clear"></div>

$('#example').dataTable( {
  "dom": '<"top"i>rt<"bottom"flp><"clear">'
} );
*/