<!doctype html>
<html lang="en">

<head>
  <title>Habitat</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

</head>

<body>
  <header>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="index.html">Inicio</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="alimentacion.php">Alimentación</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="animal.php">Animal</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="clasificacion.php">Clasificación</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="habitat.php">Hábitat</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <main style="margin-top: 30px;>
<!-- ========== Start formulario ========== -->
<form action="insert\registro_habitat.php" method="post">
  <div class="mb-3">
    <label  class="form-label">Ingresa un Habitat</label>
    <input name="nombre_habitat" type="text" class="form-control" required>
  </div>
  <button type="submit" class="btn btn-primary">Agregar</button>
</form>

<form action="" method="post">
</form>
<!-- ========== End formulario ========== -->

    <!-- ========== Start table ========== -->
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Habitat</th>
      <th scope="col">Animales</th>
      <th scope="col">Eliminar</th>
      <th scope="col">Actualizar</th>
    </tr>
  </thead>
  <tbody>
  <?php
  include('connection/connection.php');
  
  $c=1;
  $consulta = "call p_verHabitat();";
  $query = mysqli_query($conn,$consulta);
 while($fila = mysqli_fetch_array($query)){
  ?>
    <tr> 
      <th scope="row">
        <?php echo $c; ?> 
      </th>
      <td>
        <?php echo $fila ['habitat'];?> 
      </td>
      <td>
        <?php echo $fila ['contador'];?> 
      </td>
      <td>
        <a href="delete/eliminar_habitat.php?id_habitat=<?php echo $fila['id_habitat']; ?>">
          <i class="bi bi-trash2 fill text-danger" style="font-size: 1.5rem;"></i>
      </a>
      </td>

      <td>
      <a href="update/habitats.php?id_habitat=<?php echo $fila['id_habitat']; ?>">
          <i class="bi bi-pencil-square text-warning" style="font-size: 1.5rem;"></i>
      </a>
      </td>
    </tr>

    <?php $c++; } ?>
  </tbody>
</table>
    <!-- ========== End table ========== -->

  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- DataTables -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<link href="https://cdn.datatables.net/v/bs5/jq-3.6.0/jszip-2.5.0/dt-1.13.4/b-2.3.6/b-colvis-2.3.6/b-html5-2.3.6/b-print-2.3.6/sp-2.1.2/datatables.min.css" rel="stylesheet"/>

<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>

<script src="https://cdn.datatables.net/v/bs5/jq-3.6.0/jszip-2.5.0/dt-1.13.4/b-2.3.6/b-colvis-2.3.6/b-html5-2.3.6/b-print-2.3.6/sp-2.1.2/datatables.min.js"></script>

<script src="datatables.js"></script>
<table id="table" class="table table-striped table-hover" style="width:100%">


  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>