<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "sistema_asistencia";


    $conexion =  new mysqli($host,$user,$pass,$dbname);
      // if ($conexion) {
      //     echo "Se conecto correctamente";
      // }else {
      //   echo  "error en la conexion";
      // }

        $consulta = "SELECT * FROM personal";
        $resultado = $conexion->query($consulta);
        // $resultado->fetch_assoc();
        $numerador =0;

?>

    <!-- <div class="demo-html"></div> -->
    <table id="example" class="display nowrap datatable" style="width:100%">
      <thead>
        <tr>
          <th >Nº</th>
          <th>A</th>
          <th>Nombre</th>
          <th>apellido</th>
          <th>dni</th>
          <th>direccion</th>
          <th>Fecha Nacimiento</th>
          <th>correo</th>
          <th>Celular</th>
          <th>Genero</th>
          <th>Imagen</th>
          <th>Tipo Per</th>

        </tr>
      </thead>
      <tbody >
        <?php
        while ($mostrar=mysqli_fetch_row($resultado)) {
$numerador++;
          ?>
          <tr >
            <td style="padding-right:0px;padding-left:25px;" ><?php echo $numerador ?></td>
<td >

<?php ?>
<a href="javascript:cerrarVentana();" class="btnAccion" id="btnAccion" onclick="accionPersonal('<?php echo $mostrar[0] ?>');">

		<span class=" icon icon-chevron-down"></span>
</a>
</td>
            <td ><?php echo $mostrar[1] ?></td>
            <td ><?php echo $mostrar[2] ?></td>
            <td ><?php echo $mostrar[3] ?></td>
            <td ><?php echo $mostrar[4] ?></td>
            <td ><?php echo $mostrar[5] ?></td>
            <td ><?php echo $mostrar[6] ?></td>
            <td ><?php echo $mostrar[7] ?></td>
            <td ><?php echo $mostrar[8] ?></td>
            <td ><?php echo $mostrar[9] ?></td>
            <td ><?php echo $mostrar[10] ?></td>


            <!-- <td>
                <span class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modalEditar" onclick="agregaFrmActualizarCurso('<?php echo $mostrar[0] ?>')">
                  <span class="fa fa-pencil-square-o"></span>
                </span>
              </td>
              <td>
                <span class="btn btn-danger btn-sm" onclick="eliminarDatosCurso('<?php echo $mostrar[0] ?>')">
                  <span class="fa fa-trash"></span>
                </span>
              </td> -->
          </tr>
          <?php
        }
        ?>
      </tbody>
    </table>




	<script type="text/javascript" language="javascript" src="./src/datatable-personalizado.js"></script>
