<!doctype html>
<html lang="en">

<head>
  <title>Actualiar habitat</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
  <main>
  <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
            <div class="card w-50">
                <div class="card-header">
                    Actualizar habitat
                </div>
                <div class="card-body">
          <!-- ========== Start formulario ========== -->

            <?php
            //print_r($_GET);

            $id_habitat = $_GET['id_habitat'];

            include('../connection/connection.php');

            //$consulta = "SELECT*FROM fabricante WHERE id_fabricante = '$id_fabricante'";
            $consulta ="call ObtenerHabitat('$id_habitat');";

            $query =mysqli_query($conn,$consulta);

            $fila = mysqli_fetch_array($query);

            ?>

          <form action="actualizar_habitat.php" method="post">
            <div class="mb-3">
                <label class="form-label">Ingresa un habitat</label>
                <input name="nombre_habitat" value="<?php echo $fila ['nombre_habitat']  ?>"  type="text" class="form-control" required>
            </div> 
            <input type="hidden" name ="id_habitat" value="<?php echo $fila['id_habitat'] ?>">
            <button type="submit" class="btn btn-primary">Actualizar</button>
            <button type="button" class="btn btn-secondary" onclick="window.history.back()">Cancelar</button>

        </form>

        <form action="" method="post">

        </form>

        <!-- ========== End formulario ========== -->
</div>
</div>
</div>
  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>