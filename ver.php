<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MAMITAS PUEBLA</title>
    <link rel="stylesheet" href="dist/css/adminlte.min.css?v=3.2.0">

    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">

    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">

    <?php
        session_start();
        
        if (!isset($_SESSION['usuario']) || !isset($_SESSION['id'])) {
            header('location: index.php');
        }


    ?>


    <!-- Site wrapper -->
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>

            </ul>

        </nav>
        <!-- Navbar -->

        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="dist/img/usuario.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                    style="opacity: .8">
                <span class="brand-text font-weight-light">USUARIO</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="dist/img/creeper.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block"> <?php echo $_SESSION['usuario']; ?> </a>
                    </div>
                </div>

                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Panel de Control
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="interfaz.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Tabla de Estudiantes</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="registro.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Registrar al estudiante</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="notas.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Notas estudiantes</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="cambiar_contra.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Cambiar Contraseña</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="cerrar.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Cerrar Sesion</p>
                                    </a>
                                </li>
                                

                            </ul>
                        </li>
                    </ul>
                </nav>
                
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
        
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>MamitasPuebla.com</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item active">Estudiantes</li>
                                
                            </ol>
                            
                            
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
            
            <!-- Main content -->
            <section class="content">
            
                <!-- Default box -->
                <div class="card col-sm-25">
                    <center><button type="button" class="btn btn-outline-primary card col-sm-.5"><a href="interfaz.php">Volver</a></button>
 </center>
            <center><table class="table table-striped">
 <thead>
    <center><tr>
     <th scope="col">ID</th>
     <th scope="col">Nombre</th>
     <th scope="col">Apellido</th>
     <th scope="col">DPI</th>
     <th scope="col">Viajes Realizados</th>

   </tr></center>
   
 </thead>
 <tbody>


 <?php
include "conexion.php";
$id = $_GET['id'];
$sql = $conn ->query("SELECT * FROM viajes_viajero WHERE id ='$id'");
while($dat = $sql ->fetch_object()){

?>    <tr>
     <th scope="row"><?php echo $dat->id; ?> </th>
     <td><?php echo $dat->nombre; ?></td>
     <td><?php echo $dat->apellido; ?></td>
     <td><?php echo $dat->dpi; ?></td>
     <td><?php echo $dat->destino; ?></td>

     <td>
    
   </tr>
<?php
}
?>
 </tbody>
</table>    
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
 </center>    
 
                    <!-- /.card-footer-->
                </div>
                <!-- /.card -->

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        
        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 1.0.0
            </div>
            <strong>6to Computacion &copy; 2024 <a href="https://adminlte.io">Emanuel y Daniel</a>.</strong> Mamitas Pluebla.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->

    <!-- AdminLTE App -->

    

    <script src="plugins/jquery/jquery.min.js"></script>

    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="plugins/jszip/jszip.min.js"></script>
    <script src="plugins/pdfmake/pdfmake.min.js"></script>
    <script src="plugins/pdfmake/vfs_fonts.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

    <script src="dist/js/adminlte.min.js?v=3.2.0"></script>

    <script src="dist/js/demo.js"></script>

    <script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
    </script>
</body>

</html>