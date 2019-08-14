<?php  include_once 'funcion/sesiones.php'; ?>
<?php  include_once 'funcion/funciones-cloth.php'; ?>
<?php include_once 'templates/header.php'; ?>
<?php include_once 'templates/bar.php'; ?>
  <?php include_once 'templates/nav.php'; ?>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Crear Administrador
        <small>Llena el formulario para añadir otro administrador</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section>
    <div class="row">
        <div class="col-md-8">
        <!-- Main content -->
        <section class="content">

        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
            <h3 class="box-title">Inserta un producto</h3>

    
            </div>
            <div class="box-body">
            <div class="box box-primary">
                <div class="box-header with-border">
                <h3 class="box-title">Quick Example</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" name="guardar-producto" id="guardar-producto" method="POST" action="modelo-cloth.php">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="img1">Url de imagen:</label>
                            <input type="text" class="form-control" id="img1" name="img1" placeholder="Inserta imagen 1">
                        </div>
                        <div class="form-group">
                            <label for="img2">Url de segunda imagen:</label>
                            <input type="text" class="form-control" id="img2" name="img2" placeholder="Inserta imagen 2">
                        </div>
                        <div class="form-group">
                            <label for="name">Nombre del Producto:</label>
                            <input type="text" class="form-control" id="name_cloth" name="name_cloth" placeholder="Nombra el Producto">
                        </div>
                        <div class="form-group">
                            <label for="price">Precio del Producto:</label>
                            <input type="text" class="form-control" id="price" name="price" placeholder="Ingrese precio">
                        </div>
                        <div class="form-group">
                            <label for="pass">Pass (Referencia):</label>
                            <input type="text" class="form-control" id="reference" name="reference" placeholder="Ingrese el Codigo">
                        </div>
                        <div class="form-group">
                            <label for="marc">Marca del Producto:</label>
                            <input type="number" class="form-control" id="marca" name="marca" placeholder="Ingrese la Marca">
                        </div>
                        <div class="form-group">
                            <label for="dicipline">Disciplina del Producto:</label>
                            <input type="number" class="form-control" id="dicipline" name="dicipline" placeholder="Tipo de Deporte">
                        </div>
                        <div class="form-group">
                            <label for="category">Categoria del producto:</label>
                            <input type="number" class="form-control" id="category" name="category" placeholder="Tipo de Ropa">
                        </div>
                        <div class="form-group">
                            <label for="genre">Genero del Producto:</label>
                            <input type="number" class="form-control" id="genre" name="genre" placeholder="Para quien va dirigido">
                        </div>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <input type="hidden" name="producto" value="nuevo">
                        <button type="submit" class="btn btn-primary" id="crear-cloth">Añadir Productos</button>
                    </div>
                </form>

            </div>
            </div>
            <!-- /.box-body -->

        </div>
        <!-- /.box -->

        </section>
        <!-- /.content -->
        </div>
    </div>
  </div>
  <!-- /.content-wrapper -->

  <?php include_once 'templates/footer.php'; ?>


  <!-- Control Sidebar -->

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->



