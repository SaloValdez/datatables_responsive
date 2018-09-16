$(document).ready(function() {

dtPersonalizado();

} );

function dtPersonalizado(){
  $('#example').DataTable( {
		responsive: true,
		"language": {
	      "emptyTable":			"<i>No hay datos disponibles en la tabla.</i>",
	      "info":		   		"Del _START_ al _END_ de _TOTAL_ ",
	      "infoEmpty":			"Mostrando 0 registros de un total de 0.",
	      "infoFiltered":			"(filtrados de un total de _MAX_ registros)",
	      "infoPostFix":			"(actualizados)",
	      "lengthMenu":			"Mostrar _MENU_ registros  <a href='javascript:cerrarVentana(); ' class='btnCerrarModal'>cerrar</a>",
	      "loadingRecords":		"Cargando...",
	      "processing":			"Procesando...",
	      "search":			"<span style='font-size:15px;'>Buscar:</span>",
	      "searchPlaceholder":		"Dato para buscar",
	      "zeroRecords":			"No se han encontrado coincidencias.",
	      "paginate": {
	        "first":			"Primera",
	        "last":				"Última",
	        "next":				"Siguiente",
	        "previous":			"Anterior"
	      },
	      "aria": {
	        "sortAscending":	"Ordenación ascendente",
	        "sortDescending":	"Ordenación descendente"
	      }
	    },

			"lengthMenu":		[[5, 10, 20, 25, 50, -1], [5, 10, 20, 25, 50, "Todos"]],
			 "iDisplayLength":	5,


			 //
			 // "columnDefs": [ {
       //      "searchable": false,
       //      "orderable": false,
       //      "targets": 0
       //  } ],
       //  "order": [[ 1, 'asc' ]]




	} );
}
