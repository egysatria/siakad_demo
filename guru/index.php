<?php
session_start();
if (empty($_SESSION['username']))
{
    ?>
    <script type="text/javascript">
    alert('Anda Harus Login Terlebih Dahulu');
    window.location.href='login.php';
    </script>
    <?php
}
include '../lib/koneksi.php';
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Dashboard | Admin - SD N BENDUNGAN 2 KARANGMOJO</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="../assets/css/icons.css" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="../assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="../assets/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="../assets/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Dropzone Css -->
    <link href="../assets/plugins/dropzone/dropzone.css" rel="stylesheet">

    <!-- Bootstrap Material Datetime Picker Css -->
    <link href="../assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet" />

    <!-- Wait Me Css -->
    <link href="../assets/plugins/waitme/waitMe.css" rel="stylesheet" />

    <!-- Bootstrap Select Css -->
    <link href="../assets/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

    <!-- JQuery DataTable Css -->
    <link href="../assets/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

    <!-- Morris Chart Css-->
    <link href="../assets/plugins/morrisjs/morris.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="../assets/css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from ../assets/css/themes instead of get all themes -->
    <link href="../assets/css/themes/all-themes.css" rel="stylesheet" />
     <script src="../assets/highcharts.js"></script>
    <script src="../assets/exporting.js"></script>
</head>

<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
 
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar bg-deep-orange">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="index.php">SD N BENDUNGAN 2 KARANGMOJO</a>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="../assets/images/guru/<?php echo $_SESSION['ft'];?>" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['nm'];?></div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="logout.php"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="active">
                        <a href="?hal=dashboard">
                            <i class="material-icons">home</i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="?hal=arsip">
                            <i class="material-icons">archive</i>
                            <span>Arsip</span>
                        </a>
                    </li>
                    <li>
                        <a href="?hal=nilai">
                            <i class="material-icons">insert_drive_file</i>
                            <span>Nilai</span>
                        </a>
                    </li>
                    <li>
                        <a href="logout.php">
                            <i class="material-icons">input</i>
                            <span>Logout</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2018 <a href="#">SD N BENDUNGAN 2 KARANGMOJO</a>.
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
    </section>

               <?php
                error_reporting(0);
                $hal = $_GET['hal'];
                $act = $_GET['act'];
                $aksi = $_GET['aksi'];

                if ($hal == "dashboard" || $hal == "") 
                {
                    include 'dashboard.php';
                }
                elseif ($hal == "guru") 
                {
                    if ($act == "") 
                    {
                        include 'akademik/guru/guru.php';
                    }
                    elseif ($act == "tambah") 
                    {
                        include 'akademik/guru/t_guru.php';
                    } 
                    elseif ($act == "hapus") 
                    {
                        include 'akademik/guru/h_guru.php';
                    }
                    elseif ($act == "ubah") 
                    {
                        include 'akademik/guru/u_guru.php';
                    } 
                    elseif ($act == "detail") 
                    {
                        include 'akademik/guru/det_guru.php';
                    }
                }
                elseif ($hal == "siswa") 
                {
                    if ($act == "") 
                    {
                        include 'akademik/siswa/siswa.php';
                    }
                    elseif ($act == "tambah") 
                    {
                        include 'akademik/siswa/t_siswa.php';
                    } 
                    elseif ($act == "hapus") 
                    {
                        include 'akademik/siswa/h_siswa.php';
                    }
                    elseif ($act == "ubah") 
                    {
                        include 'akademik/siswa/u_siswa.php';
                    }
                     elseif ($act == "detail") 
                    {
                        include 'akademik/siswa/det_siswa.php';
                    }
                    
                }
                elseif ($hal == "mapel") 
                {
                    if ($act == "") 
                    {
                        include 'akademik/mapel/mapel.php';
                    }
                    elseif ($act == "tambah") 
                    {
                        include 'akademik/mapel/t_mapel.php';
                    } 
                    elseif ($act == "hapus") 
                    {
                        include 'akademik/mapel/h_mapel.php';
                    }
                    elseif ($act == "ubah") 
                    {
                        include 'akademik/mapel/u_mapel.php';
                    }
                    
                }
                elseif ($hal == "kelas") 
                {
                    if ($act == "") 
                    {
                        include 'akademik/kelas/kelas.php';
                    }
                    elseif ($act == "tambah") 
                    {
                        include 'akademik/kelas/t_kelas.php';
                    } 
                    elseif ($act == "hapus") 
                    {
                        include 'akademik/kelas/h_kelas.php';
                    }
                    elseif ($act == "ubah") 
                    {
                        include 'akademik/kelas/u_kelas.php';
                    }               
                }
                elseif ($hal == "det_kelas") 
                {
                    if ($act == "") 
                    {
                        include 'akademik/detail/det_kelas.php';
                    }
                    elseif ($act == "tambah") 
                    {
                        include 'akademik/detail/t_det_kelas.php';
                    } 
                    elseif ($act == "hapus") 
                    {
                        include 'akademik/detail/h_det_kelas.php';
                    }
                    elseif ($act == "ubah") 
                    {
                        include 'akademik/detail/u_det_kelas.php';
                    }               
                } 
                elseif ($hal == "arsip") 
                {
                    if ($act == "") 
                    {
                        include 'arsip/arsip.php';
                    }
                    elseif ($act == "tambah") 
                    {
                        include 'arsip/t_arsip.php';
                    } 
                    elseif ($act == "hapus") 
                    {
                        include 'arsip/h_arsip.php';
                    }
                    elseif ($act == "ubah") 
                    {
                        include 'arsip/u_arsip.php';
                    }
                }
                 elseif ($hal == "nilai") 
                {
                    if ($act == "") 
                    {
                        include 'nilai/nilai.php';
                    }
                    elseif ($act == "tambah") 
                    {
                        include 'nilai/t_nilai.php';
                    } 
                    elseif ($act == "hapus") 
                    {
                        include 'nilai/h_nilai.php';
                    }
                    elseif ($act == "ubah") 
                    {
                        include 'nilai/u_nilai.php';
                    }
                }
                elseif ($hal == "admin") 
                {
                    if ($act == "tambah") 
                    {
                        include 'admin/t_admin.php';
                    } 
                    elseif ($act == "hapus") 
                    {
                        include 'admin/h_admin.php';
                    }
                    elseif ($act == "ubah") 
                    {
                        include 'admin/u_admin.php';
                    }
                }
            ?>

    <!-- Jquery Core Js -->
    <script src="../assets/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="../assets/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="../assets/plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="../assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../assets/plugins/node-waves/waves.js"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="../assets/plugins/jquery-countto/jquery.countTo.js"></script>

    <!-- Morris Plugin Js -->
    <script src="../assets/plugins/raphael/raphael.min.js"></script>
    <script src="../assets/plugins/morrisjs/morris.js"></script>

    <!-- ChartJs -->
    <script src="../assets/plugins/chartjs/Chart.bundle.js"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="../assets/plugins/flot-charts/jquery.flot.js"></script>
    <script src="../assets/plugins/flot-charts/jquery.flot.resize.js"></script>
    <script src="../assets/plugins/flot-charts/jquery.flot.pie.js"></script>
    <script src="../assets/plugins/flot-charts/jquery.flot.categories.js"></script>
    <script src="../assets/plugins/flot-charts/jquery.flot.time.js"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="../assets/plugins/jquery-sparkline/jquery.sparkline.js"></script>

    <!-- Jquery DataTable Plugin Js -->
    <script src="../assets/plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="../assets/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="../assets/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="../assets/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="../assets/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="../assets/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="../assets/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="../assets/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="../assets/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>
     <!-- Select Plugin Js -->
    <script src="../assets/plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="../assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../assets/plugins/node-waves/waves.js"></script>

    <!-- Autosize Plugin Js -->
    <script src="../assets/plugins/autosize/autosize.js"></script>

    <!-- Moment Plugin Js -->
    <script src="../assets/plugins/momentjs/moment.js"></script>

     <!-- Bootstrap Notify Plugin Js -->
    <script src="../assets/plugins/bootstrap-notify/bootstrap-notify.js"></script>

    <!-- Bootstrap Material Datetime Picker Plugin Js -->
    <script src="../assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>

    <!-- Custom Js -->
    <script src="../assets/js/admin.js"></script>
    <script src="../assets/js/pages/tables/jquery-datatable.js"></script>
    <script src="../assets/js/pages/forms/basic-form-elements.js"></script>
    <script src="../assets/js/pages/forms/advanced-form-elements.js"></script>
    <script src="../assets/js/pages/index.js"></script>

    <!-- Demo Js -->
    <script src="../assets/js/demo.js"></script>
</body>
</html>