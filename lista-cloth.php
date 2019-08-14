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
       Listado de Productos
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
              <h3 class="box-title">Configura tus productos en esta seccion</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="registros" class="table table-bordered table-striped">
                <thead>
                <tr>
                <th>Imagen 1</th>
                <th>Imagen 2</th>
                <th>Nombre Producto</th>
                <th>Precio</th>
                <th>Reference</th>
                <th>Id. de marca</th>
                <th>Id. de deporte</th>
                <th>Id. de tipo</th>
                <th>Id. de genero</th>
                <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                  <?php

                    try{
                      $sql = " SELECT   id_cloth, 
                                        url_images, 
                                        url_image, 
                                        name_cloth,
                                        price, 
                                        pass, 
                                        id_cat_marc, 
                                        id_cat_type, 
                                        id_cloth_cat, 
                                        id_cloth_genre  
                                        FROM info_cloth ";
                      $resultado = $conn->query($sql);
                    }catch (Exception $e){
                      $error = $e->getMessage();
                      echo $error;
                    }
                    while($admin = $resultado->fetch_assoc()){ ?>
                      <tr>
                        <td>
                          <img width="30%" src="<?php echo $admin['url_images'];?>">
                        <td>
                          <img width="30%" src="<?php echo $admin['url_image']; ?>" >
                        </td>
                        <td>
                          <?php echo $admin['name_cloth']; ?>
                        </td>
                        <td>
                          <?php echo $admin['price']; ?>
                        </td>
                        <td>
                          <?php echo $admin['pass']; ?>
                        </td>
                        <td>
                          <?php echo $admin['id_cat_marc']; ?>
                        </td>
                        <td>
                          <?php echo $admin['id_cat_type']; ?>
                        </td>
                        <td>
                          <?php echo $admin['id_cloth_cat']; ?>
                        </td>
                        <td>
                          <?php echo $admin['id_cloth_genre']; ?>
                        </td>
                        <td>
                          <a href="editar-cloth.php?id_cl=<?php echo $admin['id_cloth']; ?>" class="btn bg-orange btn-flat margin">
                            <i class="fas fa-pencil"></i>
                          </a>
                          <a href="#" data-id="<?php echo $admin['id_cloth']; ?>" data-tipo="cloth" class="btn bg-maroon btn-flat margin borrar_cloth">
                            <i class="fas fa-trash"></i>
                          </a>
                        </td>
                      </tr>
                    

                    <?php }; ?>
                </tbody>
                
                <tfoot>
                <tr>
                  <th>Imagen 1</th>
                  <th>Imagen 2</th>
                  <th>Nombre Producto</th>
                  <th>Precio</th>
                  <th>Reference</th>
                  <th>Id. de marca</th>
                  <th>Id. de deporte</th>
                  <th>Id. de tipo</th>
                  <th>Id. de genero</th>
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



