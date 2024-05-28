<?php 
define("BASE_URL","../views");
require_once("../config/conexion.php");
//require_once("../model/Usuario.php");
if(isset($_SESSION["idusuarios"])){
?>

<!DOCTYPE html>
<html lang="en">

<?php include("modulos/head.php");?>
<link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel= "stylesheet">





<body class="hold-transition sidebar-mini layout-fixed" data-panel-auto-height-mode="height">
<div class="wrapper">

  <!-- Navbar -->
  <?php include("modulos/header.php");?>
  <!-- /.n avbar -->

  <!-- Main Sidebar Container -->
  <?php include("modulos/menu.php");?>

  <div class="content-wrapper">

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Experiencia</h1>
          </div>
          
        </div>
      </div>
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title">Admon Experiencia</h3>
              </div>
              <div class="card-body">
                <button type="button" class="btn btn-outline-primary" id="add_button" onclick="nuevo()">Crear
                </button>
                <button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#modal-primary">Cargar</button>
                <div class="col-md-6">


                  <div class="card-body p-0">
                    <table class="table display responsive wrap" id="socialMedia_data">
                      <thead>
                        <tr>
                          <th class="wd-15p">Título Experiencia</th>
                          <th class="wd-15p">Lugar Experiencia</th>
                          <th class="wd-15p">Año de Inicio</th>
                          <th class="wd-15p">Año de Finalización</th>
                          <th class="wd-15p">Tipo Experiencia</th>
                          
                          <!---<th>Icono</th>
                          <th style="width: 40px">Enlace</th>--->
                          <th></th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>

                      </tbody>
                    </table>
                  </div> 
                </div> 
              </div>            
            </div>
          </div>
        </div>
      </div>
    </section>
    
  </div>
  
  <!-- /.content-wrapper -->
  <?php include("modulos/footer.php");?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<?php require_once("Modalexperiencia.php");?> <!-- PENDIENTE MODIFICAR -->
<?php include("modulos/js.php");?>
<script type="text/javascript" src="js/experiencia.js"></script> <!-- PENDIENTE MODIFICAR -->
</body>
</html>

<?php 
}else{
  header("Location:".Conectar::ruta()."views/404.php");
}
?>