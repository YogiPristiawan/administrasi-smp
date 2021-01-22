<?php date_default_timezone_set("Asia/Jakarta"); ?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>
        <?= $title; ?>
    </title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>

<body>
    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="<?= base_url('hal_guru'); ?>"><img src="<?= base_url(); ?>assets/images/logo_smp_putih.png" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="<?= base_url(); ?>assets/images/logo2.png" alt="Logo"></a>
            </div>
            <div class="navbar-header mt-3">
                <!-- <img class="user-avatar rounded-circle" width="100" height="100"
                    src="<?= base_url(); ?>assets/images/ava.png" alt="User Avatar"> -->
                <h5>
                    <font color="white">
                        <?= $user['nama']; ?> <br><br>
                        Login sebagai <?= $user['keterangan']; ?>
                    </font>
                </h5>
            </div>

            <div id=" main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <h3 class="menu-title">MENU UTAMA
                    </h3>
                    <li>
                        <a href="<?= base_url('hal_guru'); ?>"> <i class="menu-icon fa fa-lg fa-fw fa-home"></i>DASHBOARD
                        </a>
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <!-- <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false"> <i class="menu-icon fa fa-lg fa-cogs"></i>MASTER</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li>
                                <a href="<?= base_url('guru'); ?>">
                                    <i class="fa-fw fa fa-folder-open-o"></i>Guru
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('siswa'); ?>">
                                    <i class="fa-fw fa fa-folder-open-o"></i>Siswa
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('jabatan'); ?>">
                                    <i class="fa-fw fa fa-folder-open-o"></i>Jabatan
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('kelas'); ?>">
                                    <i class="fa-fw fa fa-folder-open-o"></i>Kelas
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('mapel'); ?>">
                                    <i class="fa-fw fa fa-folder-open-o"></i>Mata Pelajaran
                                </a>
                            </li>
                        </ul>
                    </li> -->

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-lg fa-folder-o"></i>MENU AKADEMIK</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li>
                                <a href="<?= base_url('absensi_siswa'); ?>">
                                    <i class="fa-fw fa fa-folder-open-o"></i>Jurnal dan Presensi
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('jadwal_pelajaran'); ?>">
                                    <i class="fa-fw fa fa-folder-open-o"></i>Jadwal Pelajaran
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-lg fa-file-text-o"></i>CETAK LAPORAN</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li>
                                <a href="<?= base_url('laporan_jurnal_mengajar'); ?>">
                                    <i class="fa-fw fa fa-file"></i>Jurnal Mengajar
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('laporan_absensi_siswa'); ?>">
                                    <i class="fa-fw fa fa-file"></i>Presensi Siswa
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('laporan_jadwal_pelajaran'); ?>">
                                    <i class="fa-fw fa fa-file"></i>Jadwal Pelajaran
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?= base_url('auth/logout'); ?>"> <i class="menu-icon fa fa-lg fa-fw fa-sign-out"></i>LOGOUT
                        </a>
                    </li>

                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>


                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="<?= base_url(); ?>assets/images/ava.png" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="<?= base_url('halaman_guru'); ?>"><i class="fa fa-user"></i>
                                <?= $user['nama']; ?></a>
                            <a class="nav-link" href="<?= base_url('auth/logout'); ?>"><i class="fa fa-power-off"></i>
                                Logout</a>
                        </div>
                    </div>
                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->