<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title><?= $title; ?> | Enterprise Architecture Planning</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url(); ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url(); ?>assets/css/fonts.min.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url(); ?>assets/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Datepicker -->
    <link href="<?= base_url(); ?>assets/vendor/daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- DataTables -->
    <link href="<?= base_url(); ?>assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/vendor/datatables/buttons/css/buttons.bootstrap4.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/vendor/datatables/responsive/css/responsive.bootstrap4.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/vendor/gijgo/css/gijgo.min.css" rel="stylesheet">

    <style>
        #accordionSidebar,
        .topbar {
            z-index: 1;
        }
    </style>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-white sidebar sidebar-light accordion shadow-sm" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex text-white align-items-center bg-primary justify-content-center" href="<?= base_url('dashboard'); ?>">
                <!-- <div class="sidebar-brand-icon">
                    <i class="fas fa-university"></i>
                </div> -->
                <div class="sidebar-brand-text mx-3">EAP/ARSIP</div>
            </a>

            <!-- Nav Item - Dashboard -->
            <!-- <li class="nav-item">
                <a class="nav-link" href="<?= base_url('dashboard'); ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li> -->

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Menu Utama
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed " href="#" data-toggle="collapse" data-target="#collapseMaster" aria-expanded="true" aria-controls="collapseMaster">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Perkuliahan</span>
                </a>
                
                <div id="collapseMaster" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-light py-2 collapse-inner rounded">
                        
                        <a class="collapse-item" href="<?= base_url('pertemuan/materi1/'); ?>">Pertemuan 1</a>
                        <a class="collapse-item" href="<?= base_url('pertemuan/materi2/'); ?>">Pertemuan 2</a>
                        <a class="collapse-item" href="#">Pertemuan 3</a>
                        <div id="collapseMaster" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-light py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?= base_url('pertemuan/materi3/'); ?>">Materi</a>
                        <a class="collapse-item" href="<?= base_url('pertemuan/contohbsc/'); ?>">Contoh BSC</a>
                        </div>
    </div>
                        <a class="collapse-item" href="<?= base_url('pertemuan/materi4/'); ?>">Pertemuan 4</a>
                        <a class="collapse-item" href="<?= base_url('pertemuan/materi5/'); ?>">Pertemuan 5</a>
                        <a class="collapse-item" href="<?= base_url('pertemuan/materi6/'); ?>">Pertemuan 6</a>
                        <a class="collapse-item" href="<?= base_url('pertemuan/materi7/'); ?>">Pertemuan 7</a>
                        <a class="collapse-item" href="<?= base_url('pertemuan/materi8/'); ?>">Pertemuan 8</a>
                        <a class="collapse-item" href="<?= base_url('pertemuan/materi9/'); ?>">Pertemuan 9</a>
                        <a class="collapse-item" href="<?= base_url('pertemuan/materi10/'); ?>">Pertemuan 10</a>
                        <a class="collapse-item" href="<?= base_url('pertemuan/materi11/'); ?>">Pertemuan 11</a>
                        <a class="collapse-item" href="<?= base_url('pertemuan/materi12/'); ?>">Pertemuan 12</a>
                        <a class="collapse-item" href="<?= base_url('pertemuan/materi13/'); ?>">Pertemuan 13</a>
                        <a class="collapse-item" href="<?= base_url('pertemuan/materi14/'); ?>">Pertemuan 14</a>
                    </div>
                </div>
                
            </li>
 
          
            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
            Enterprise Achitecture dengan TOGAF Framework
            </div>

            <li class="nav-item">
                <a class="nav-link collapsed " href="#" data-toggle="collapse" data-target="#bsc" aria-expanded="true" aria-controls="collapseMaster">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Tahap 1</span>
                </a>
                
                <div id="bsc" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-light py-2 collapse-inner rounded">
                    <a class="collapse-item" href="<?= base_url('arsitektur/visi/'); ?>">Visi Misi</a>
                    <a class="collapse-item" href="<?= base_url('bsc/togaf/'); ?>">Metodelogi TOGAF</a>
                    <a class="collapse-item" href="<?= base_url('bsc/map/'); ?>">Strategi Map</a>
                    <a class="collapse-item" href="#">Balance Score Card</a>
                        <div id="bsc" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-light py-2 collapse-inner rounded">
                    <a class="collapse-item" href="<?= base_url('bsc/per1/'); ?>">Perspektif mahasiswa<br>mitra,masyarakat</a>
                        <a class="collapse-item" href="<?= base_url('bsc/per2/'); ?>">Perspektif bisnis internal</a>
                        <a class="collapse-item" href="<?= base_url('bsc/per3/'); ?>">perspektif Pertumbuhan<br>dan Pembelajaran</a>
                        <a class="collapse-item" href="<?= base_url('bsc/per4/'); ?>">indikator perspektif <br> Keuangan</a>
                        </div>
                        </div>
                     <a class="collapse-item" href="#">Current Portofolio</a>
                        <div id="bsc" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-light py-2 collapse-inner rounded">
                    <a class="collapse-item" href="<?= base_url('bsc/per1/'); ?>">Perspektif mahasiswa<br>mitra,masyarakat</a>
                    <a class="collapse-item" href="<?= base_url('porto/sistem/'); ?>">Sistem Perguruan Tinggi</a>
                        <a class="collapse-item" href="<?= base_url('porto/infra/'); ?>">Infrastruktur</a>
                        <a class="collapse-item" href="<?= base_url('porto/finansial/'); ?>">Finansial</a>
                        <a class="collapse-item" href="<?= base_url('porto/sdm/'); ?>">SDM</a>
                        <a class="collapse-item" href="<?= base_url('porto/si/'); ?>">Sistem Informasi</a>
                        <a class="collapse-item" href="<?= base_url('porto/pro/'); ?>">Procurment Logistic</a>
                    </div>
                        </div>
                        <a class="collapse-item" href="<?= base_url('bsc/poster/'); ?>">Porter's Value chain</a>
                        
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed " href="#" data-toggle="collapse" data-target="#tahap2" aria-expanded="true" aria-controls="collapseMaster">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Tahap 2</span>
                </a>
                
                <div id="tahap2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-light py-2 collapse-inner rounded">
                    <a class="collapse-item" href="<?= base_url('arsitektur/activity/'); ?>">Activity Diagram</a>
                    <a class="collapse-item" href="<?= base_url('arsitektur/usecase/'); ?>">Use Case Diagram</a>
                    <a class="collapse-item" href="<?= base_url('sistem/rencana/'); ?>">Interaksi Model</a>
                    </div>
                </div>
            </li>
            
            <li class="nav-item">
                <a class="nav-link collapsed " href="#" data-toggle="collapse" data-target="#sistem" aria-expanded="true" aria-controls="collapseMaster">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Tahap 3</span>
                </a>
                <div id="sistem" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-light py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?= base_url('sistem/akademik/'); ?>">Sistem Informasi <br>Akademik</a>
                        <a class="collapse-item" href="<?= base_url('sistem/hrdc/'); ?>">Sistem Informasi <br>HRDC</a>
                        <a class="collapse-item" href="<?= base_url('sistem/it/'); ?>">Sistem Informasi <br>I/T Infrastruktur</a>
                        <a class="collapse-item" href="<?= base_url('sistem/uang/'); ?>">Sistem Informasi <br>Keuangan</a>
                        <a class="collapse-item" href="<?= base_url('sistem/koperasi/'); ?>">Sistem Informasi <br>Koperasi</a>
                        <a class="collapse-item" href="<?= base_url('sistem/kurikulum/'); ?>">Sistem Informasi <br>Kurikulum</a>
                        <a class="collapse-item" href="<?= base_url('sistem/lab/'); ?>">Sistem Informasi <br>Laboratorium</a>
                        <a class="collapse-item" href="<?= base_url('sistem/logistik/'); ?>">Sistem Informasi <br>Logistik</a>
                        <a class="collapse-item" href="<?= base_url('sistem/gaji/'); ?>">Sistem Informasi <br>Penggajian</a>
                        <a class="collapse-item" href="<?= base_url('sistem/perpus/'); ?>">Sistem Informasi <br>Perpustakaan</a>
                        <a class="collapse-item" href="<?= base_url('sistem/poliklinik/'); ?>">Sistem Informasi <br>Poliklinik</a>

                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed " href="#" data-toggle="collapse" data-target="#tahap3" aria-expanded="true" aria-controls="collapseMaster">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Tahap 4</span>
                </a>
                
                <div id="tahap3" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-light py-2 collapse-inner rounded">
                    <a class="collapse-item" href="<?= base_url('bsc/cdm/'); ?>">Arsitektur Data</a>
                    <a class="collapse-item" href="<?= base_url('arsitektur/aplikasi/'); ?>">Arsitektur Aplikasi</a>
                    <a class="collapse-item" href="<?= base_url('arsitektur/teknologi/'); ?>">Arsitektur Teknologi</a>
                    <a class="collapse-item" href="<?= base_url('arsitektur/swot/'); ?>">Analisis SWOT</a>
                </div>
                </div>
            </li>
            
            <!-- =========================================baru===================================== -->

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-dark bg-primary topbar mb-4 static-top shadow-sm">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link bg-transparent d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars text-white"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - User Information -->
                        <!-- <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline small text-capitalize">

                                </span>
                                <img class="img-profile rounded-circle" src="">
                            </a> -->
                        <!-- Dropdown - User Information -->
                        <!-- <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href=">
                                    <i class=" fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="">
                                    <i class="fas fa-lock fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Change Password
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul> -->

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">MEDIA PEMBELAJARAN MATA KULIAH ARSITEKTUR SISTEM INFORMASI PERUSAHAAN</h1>

                    <?= $contents; ?>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-light">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Pembelajaran Arsitektur Sistem Informasi Perusahaan <br>2019</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Yakin ingin logout?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Klik "Logout" dibawah ini jika anda yakin ingin logout.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batalkan</button>
                    <a class="btn btn-primary" href="<?= base_url('logout'); ?>">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url(); ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url(); ?>assets/js/sb-admin-2.min.js"></script>

    <!-- Datepicker -->
    <script src="<?= base_url(); ?>assets/vendor/daterangepicker/moment.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/daterangepicker/daterangepicker.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?= base_url(); ?>assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/datatables/buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/datatables/buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/datatables/jszip/jszip.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/datatables/pdfmake/pdfmake.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/datatables/pdfmake/vfs_fonts.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/datatables/buttons/js/buttons.html5.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/datatables/buttons/js/buttons.print.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/datatables/buttons/js/buttons.colVis.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/datatables/responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/datatables/responsive/js/responsive.bootstrap4.min.js"></script>

    <script src="<?= base_url(); ?>assets/vendor/gijgo/js/gijgo.min.js"></script>


</body>

</html>