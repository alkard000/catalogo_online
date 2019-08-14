<?php  include_once 'funcion/sesiones.php'; ?>

<?php include_once 'funcion/funciones.php'; ?>

<?php include_once 'templates/header.php'; ?>
<?php include_once 'templates/bar.php'; ?>



  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
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
            <h3 class="box-title">Crear un Administrador</h3>

    
            </div>
            <div class="box-body">
            <div class="box box-primary">
                <div class="box-header with-border">
                <h3 class="box-title">Quick Example</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" name="guardar-registro" id="guardar-registro" method="POST" action="modelo-admin.php">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="usuario">Usuario:</label>
                            <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuario">
                        </div>
                        <div class="form-group">
                            <label for="Nombre">Nombre:</label>
                            <input type="text" class="form-control" id="Nombre" name="nombre" placeholder="Tu Nombre">
                        </div>
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password para el inicio de sesión">
                        </div>
                        <div class="form-group">
                            <label for="password">Repetir Password:</label>
                            <input type="password" class="form-control" id="repetir_password" name="repetir_password" placeholder="Confirme Password ">
                            <span id="resultado_password" class="help-block"></span>
                        </div>
                        <div class="form-group">
                            <label for="usuario">Rol (1  o  0):</label>
                            <input type="text" class="form-control" id="nivel" name="nivel" placeholder="nivel">
                        </div>
                    

                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <input type="hidden" name="registro" value="nuevo">
                        <button type="submit" class="btn btn-primary" id="crear_registro">Añadir</button>
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



