<!doctype html>
<html lang="en">

<head>
    <title>Editar animales</title>
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
        <?php
        $id_animal = $_GET['id_animal'];
        include('../connection/connection.php');
        
        // Obtener los datos del animal
        $consulta_animal = "CALL p_ObtenerAnimal('$id_animal')";
        $resultado_animal = mysqli_query($conn, $consulta_animal);
        $animal = mysqli_fetch_array($resultado_animal);
        ?>

        <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
            <div class="card w-50">
                <div class="card-header">
                    Actualizar animal seleccionado
                </div>
                <div class="card-body">

                    <!-- ========== Start formulario ========== -->
                    <form action="actualizar_animal.php" method="post">
                        <div class="mb-4">
                            <label class="form-label">Nombre del animal</label>
                            <input name="nombre_animal" value="<?php echo $animal['nombre_animal'] ?>" type="text"
                                class="form-control" required>
                        </div>

                        <div class="mb-4">
                            <label class="form-label">Descripción</label>
                            <input name="descripcion" value="<?php echo $animal['descripcion_animal'] ?>" type="text"
                                class="form-control" required>
                        </div>

      

                        <div class="mb-4">
                            <label class="form-label">Clasificación</label>
                            <select name="id_clasificacion" class="form-select">
                                <?php
                                include('../connection/connection.php');
                                $consulta_clasificacion = "CALL p_selClasificacion()";
                                $resultado_clasificacion = mysqli_query($conn, $consulta_clasificacion);

                                while ($fila = mysqli_fetch_array($resultado_clasificacion)) {
                                    $selected = ($fila['id_clasificacion'] == $animal['id_clasificacion']) ? 'selected' : '';
                                    ?>
                                    <option value="<?php echo $fila['id_clasificacion']; ?>" <?php echo $selected; ?>><?php echo $fila['nombre_clasificacion']; ?></option>
                                <?php } ?>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label class="form-label">Alimentación</label>
                            <select name="id_alimentacion" class="form-select">
                                <?php
                                include('../connection/connection.php');
                                $consulta_alimentacion = "CALL p_selAlimentacion()";
                                $resultado_alimentacion = mysqli_query($conn, $consulta_alimentacion);

                                while ($fila = mysqli_fetch_array($resultado_alimentacion)) {
                                    $selected = ($fila['id_alimentacion'] == $animal['id_alimentacion']) ? 'selected' : '';
                                    ?>
                                    <option value="<?php echo $fila['id_alimentacion']; ?>" <?php echo $selected; ?>><?php echo $fila['tipo_alimento']; ?></option>
                                <?php } ?>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label class="form-label">Hábitat</label>
                            <select name="id_habitat" class="form-select">
                                <?php
                                include('../connection/connection.php');
                                $consulta_habitat = "CALL p_selHabitat()";
                                $resultado_habitat = mysqli_query($conn, $consulta_habitat);

                                while ($fila = mysqli_fetch_array($resultado_habitat)) {
                                    $selected = ($fila['id_habitat'] == $animal['id_habitat']) ? 'selected' : '';
                                    ?>
                                    <option value="<?php echo $fila['id_habitat']; ?>" <?php echo $selected; ?>><?php echo $fila['nombre_habitat']; ?></option>
                                <?php } ?>
                            </select>
                        </div>

                        <div>
                            <input name="id_animal" value="<?php echo $id_animal; ?>" type="hidden">
                        </div>

                        <button type="submit" class="btn btn-primary">Actualizar</button>
                        <button type="button" class="btn btn-secondary" onclick="window.history.back()">Cancelar</button>
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
