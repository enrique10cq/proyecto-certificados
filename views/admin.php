<?php include "../modal/addModal.php" ?>
<?php include "../modal/editModal.php" ?>

<!DOCTYPE html>
<html lang="es">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link rel="stylesheet" href="../assets/css/all.min.css">
   <link rel="stylesheet" href="../assets/css/style.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://cdn.datatables.net/2.0.7/css/dataTables.bootstrap5.css">
</head>

<body data-bs-theme="dark">
   <h1 class="text-center fw-bold">CERTIFICADOS</h1>
   <div class="container container-table">
      <div class="row justify-content-md-center">
         <div class="col-md-12">
            <span class="">
               <button class="btn btn-success" title="Registrar Certificados" data-bs-toggle="modal" data-bs-target="#nuevoModal">
                  <i class="fa-solid fa-circle-plus"></i> Nuevo Registro
               </button>
            </span>
            <hr>
            <div class="table-responsive mt-2">
               <table class="table table-hover table-striped" id="table_certificados">
                  <thead class="">
                     <tr class="">
                        <th scope="col">Alumno</th>
                        <th scope="col">Documento</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Curso</th>
                        <th scope="col">Código</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Acciones</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php
                     require('../config/conexion.php');

                     $sql = "SELECT c.id_certificado, CONCAT(a.nombres, ' ', a.apellidos)
                           AS alumno, a.documento, a.correo, c.curso, c.codigo, c.fecha
                           FROM certificado c JOIN alumno a ON c.id_alumno = a.id_alumno";
                     $resultado = $conn->query($sql);

                     while ($row = $resultado->fetch_assoc()) { ?>
                        <tr>
                           <td><?= $row['alumno'] ?></td>
                           <td><?= $row['documento'] ?></td>
                           <td><?= $row['correo'] ?></td>
                           <td><?= $row['curso'] ?></td>
                           <td><?= $row['codigo'] ?></td>
                           <td><?= $row['fecha'] ?></td>
                           <td>
                              <button class="btn btn-warning" title="Editar Registro" data-bs-id="<?= $row['id_certificado'] ?>" data-bs-toggle="modal" data-bs-target="#editarModal">
                                 <i class="fa-solid fa-pen-to-square"></i>
                              </button>
                              <button class="btn btn-danger" title="Eliminar Registro" data-bs-toggle="modal" data-bs-target="">
                                 <i class="fa-solid fa-trash-can"></i>
                              </button>
                           </td>
                        </tr>
                     <?php } ?>
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

   <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
   <script src="https://cdn.datatables.net/2.0.7/js/dataTables.js"></script>
   <script src="https://cdn.datatables.net/2.0.7/js/dataTables.bootstrap5.js"></script>
   <script src="../assets/js/scriptTable.js"></script>
</body>

</html>