<!DOCTYPE html>
<html lang="es">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Formularios de Búsqueda</title>
   <link rel="stylesheet" href="assets/css/all.min.css">
   <link rel="stylesheet" href="assets/css/style.css">
   <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="body">
   <h1 class="text-center my-4 fw-bold">CERTIFICADOS VIACT</h1>
      <div class="container mt-5">
      <div class="card-form py-5">
         <form class="form">
            <div class="form-group row">
               <div class="col-sm-3"></div>
               <div class="col-sm-3">
                  <strong style="color:red;">(*)</strong>
                  <label for="tipoDocumento" class="">Tipo Documento:</label>
                  <select id="tipoDocumento" class="form-select">
                     <option selected disabled>-- SELECCIONA --</option>
                     <option value="dni">DNI</option>
                     <option value="pasaporte">Pasaporte</option>
                  </select>
               </div>
               <div class="col-sm-3">
                  <strong style="color:red;">(*)</strong>
                  <label for="numeroDocumento" class="">N° Documento:</label>
                  <input type="text" class="form-control" id="numeroDocumento" placeholder="N° Documento">
               </div>
            </div>
            <div class="form-group row">
               <div class="col-sm-12 text-center">
                  <button type="submit" class="btn btn-outline-primary btn-md mt-4"><i class="fas fa-search"></i> Consultar</button>
               </div>
            </div>
         </form>
      </div>
   </div>

    <!-- Bootstrap JS y dependencias -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script> <!-- Para el icono de búsqueda -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>