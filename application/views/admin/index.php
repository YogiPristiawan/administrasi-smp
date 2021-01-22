<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Halaman Administrator</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <?php
                    if (date('l') == "Wednesday") {
                        $hari = "Rabu";
                    } else if (date('l') == "Thursday") {
                        $hari = "Kamis";
                    } else if (date('l') == "Friday") {
                        $hari = "Jumat";
                    } else if (date('l') == "Saturday") {
                        $hari = "Sabtu";
                    } else if (date('l') == "Sunday") {
                        $hari = "Minggu";
                    } else if (date('l') == "Monday") {
                        $hari = "Senin";
                    } else if (date('l') == "Tuesday") {
                        $hari = "Selasa";
                    }
                    ?>
                    <li class="active"><?= $hari ?> / <?= date('d F Y') ?></li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="content mt-3">
    <div class="row">
        <div class="col col-lg-12">
            <section class="card">
                <div class="card-body text-secondary">
                    <h2>Selamat Datang <?= $user['nama']; ?></h2>
                </div>
            </section>
        </div>
    </div>
</div>

<div class="col-sm-12 mb-4">
    <div class="row">
        <div class="col-lg-4">
            <div class="card-body bg-flat-color-3">
                <div class="h1 text-right mb-4">
                    <i class="fa fa-user text-light"></i>
                </div>
                <div class="h4 mb-0 text-light">
                    <span class="count"><?php echo $total_guru; ?></span>
                </div>
                <small class="text-light text-uppercase font-weight-bold">Jumlah Guru</small>
                <div class="progress progress-xs mt-3 mb-0 bg-light" style="width: 40%; height: 5px;"></div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card-body bg-flat-color-5">
                <div class="h1 text-right text-light mb-4">
                    <i class="fa fa-graduation-cap"></i>
                </div>
                <div class="h4 mb-0 text-light">
                    <span class="count"><?php echo $total_siswa; ?></span>
                </div>
                <small class="text-uppercase font-weight-bold text-light">Jumlah Siswa</small>
                <div class="progress progress-xs mt-3 mb-0 bg-light" style="width: 40%; height: 5px;"></div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card-body bg-flat-color-1">
                <div class="h1 text-light text-right mb-4">
                    <i class="fa fa-users"></i>
                </div>
                <div class="h4 mb-0 text-light">
                    <span class="count">2</span>
                </div>
                <small class="text-light text-uppercase font-weight-bold">Pengunjung</small>
                <div class="progress progress-xs mt-3 mb-0 bg-light" style="width: 40%; height: 5px;"></div>
            </div>
        </div>
    </div>

</div>