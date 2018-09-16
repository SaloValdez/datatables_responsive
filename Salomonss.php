<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="shortcut icon" type="image/ico" href="http://www.datatables.net/favicon.ico">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, user-scalable=no">
	<title>Responsive example - Configuration option</title>
<link rel="stylesheet" href="./src/jquery.dataTables.css">
	<link rel="stylesheet" type="text/css" href="./src/responsive.dataTables.css">
<link rel="stylesheet" href="./src/datatable-personalizado.css">

<link rel="stylesheet" href="./src//icomoon/icomoon.css">
<link rel="stylesheet" href="./src//icomoon/icomoon_v1/icomoon_v1.css">

	<script type="text/javascript" language="javascript" src="./src/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" language="javascript" src="./src/jquery.dataTables.js"></script>
	<script type="text/javascript" language="javascript" src="./src/dataTables.responsive.js"></script>
	<script type="text/javascript" language="javascript" src="./ver.js"></script>
<script type="text/javascript" language="javascript" src="./src/modal.js"></script>

</head>
<body >


<div class="abrir-modal" id="abrir-modal">
	<a href="javascript:abriVentana();javascript:mostrarRegistro();">ABRIR</a>
</div>

<div class="modal">
<div class="a">
<span id="cerrar">
	<a href="javascript:cerrarVentana();">cerrar</a>
</span>

</div>


			<div class="contenedor_datatable"  id="contenedor_datatable" >

			</div>

</div>



</body>
</html>
