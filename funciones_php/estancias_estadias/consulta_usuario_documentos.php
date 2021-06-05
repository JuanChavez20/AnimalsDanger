

<table class="table table-hover text-center">

  <thead>
  <tr>
  
 <th class="text-center">ID_DOCUMENTO</th>
  <th class="text-center">Nombre ALUMNO</th>
  
  <th class="text-center">Telefono</th>
  <th class="text-center">Correo</th>
  <th class="text-center">Direcciòn</th>
  <th class="text-center">Docuemento1</th>
  <th class="text-center">Docuemento1</th>
  <th class="text-center">Docuemento1</th>

  <th class="text-center">Docuemento1</th>
  <th class="text-center">Estado</th>
  </tr>
  </thead>
  <tbody>
  <?php  
  $sql = "SELECT id_doc,  nombre, telefono, correo, direccion, Documento1, Documento2, Documento3, Documento4, estado FROM  documentos ORDER BY id_doc ASC";

  if(isset($_POST['consulta']) ){
    $valor = $_POST['consulta'];

    $sql = "SELECT id_doc,  nombre, telefono, correo, direccion, Documento1, Documento2, Documento3, Documento4, estado FROM  documentos WHERE
     id_doc LIKE '%".$valor."%'  OR 
     nombre LIKE '%".$valor."%' ";

  }

  include('../conexion_bd.php');
  $pdo = connect();
  $query = $pdo->prepare($sql);
  $query->execute();
  $datos= $query->fetchAll();
  foreach ($datos as $fila) {



  
    
  ?>
  <tr>
  

  <td><?php echo $fila['id_doc']; ?></td>
  <td><?php echo $fila['nombre']; ?></td>
  
  <td><?php echo $fila['telefono']; ?></td>
  <td><?php echo $fila['correo']; ?></td>
  <td><?php echo $fila['direccion']; ?></td>
  <td><?php echo $fila['Documento1']; ?></td>
  <td><?php echo $fila['Documento2']; ?></td>
  <td><?php echo $fila['Documento3']; ?></td>
  <td><?php echo $fila['Documento4']; ?></td>
  <td><?php echo $fila['estado']; ?></td>
  </tr>
  
  <?php
  if ($fila['estado']=='desvinculado') {
    echo "<script>
      $('table td:last-child:contains(desvinculado)').parents('tr').css('background-color', 'pink'); </script>";

    // }else{
    //  echo "<script>
    //  $('table td:last-child:contains(activo)').parents('tr').css('background-color', 'green'); </script>";
    }
  }

  ?>
 </tbody>
 </table>

 




