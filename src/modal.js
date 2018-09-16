function abriVentana(){
    $(".modal").slideDown("slow");
}
function mostrarRegistro(){
    $('.contenedor_datatable').load('./datos.php');
}
function cerrarVentana(){
  $(".modal").slideUp("slow");
}
