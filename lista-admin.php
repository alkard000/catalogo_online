<?php  include_once 'funcion/sesiones.php'; ?>
<?php  include_once 'funcion/funciones.php'; ?>
<?php include_once 'templates/header.php'; ?>
<?php include_once 'templates/bar.php'; ?>
<?php include_once 'templates/nav.php'; ?>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Listado de Administradores
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">


          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Configura los usuarios en esta seccion</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="registros" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Usuario</th>
                  <th>Nombre</th>
                  <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                  <?php

                    try{
                      $sql = " SELECT id_admin, usuario, nombre FROM admins ";
                      $resultado = $conn->query($sql);
                    }catch (Exception $e){
                      $error = $e->getMessage();
                      echo $error;
                    }
                    while($admin = $resultado->fetch_assoc()){ ?>
                      <tr>
                        <td>
                          <?php echo $admin['usuario']; ?>
                        </td>
                        <td>
                          <?php echo $admin['nombre']; ?>
                        </td>
                        <td>
                          <a href="editar-admin.php?id=<?php echo $admin['id_admin'] ?>" class="btn bg-orange btn-flat margin">
                            <i class="fa fa-pencil"></i>
                          </a>
                          <a href="#" data-id="<?php echo $admin['id_admin']; ?>" data-tipo="admin" class="btn bg-maroon btn-flat margin borrar_registro">
                            <i class="fa fa-trash"></i>
                          </a>
                        </td>
                      </tr>
                    

                    <?php }; ?>
                </tbody>
                
                <tfoot>
                <tr>
                  <th>Usuario</th>
                  <th>Nombre</th>
                  <th>Acciones</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php include_once 'templates/footer.php'; ?>


  <!-- Control Sidebar -->

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->



