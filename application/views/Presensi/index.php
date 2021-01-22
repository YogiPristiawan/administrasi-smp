<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Halaman Admin</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="<?= base_url('admin'); ?>">Halaman Admin</a></li>
                    <li class="active">Laporan Presensi</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="col-md-12">
    <div class="card mt-3">
        <div class="card-header">
            <strong class="card-title">LAPORAN PRESENSI</strong>
        </div>
        <div class="card-body">
            <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                <thead>
                    <tr align="center">
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Kelas</th>
                        <th>NIS</th>
                        <th>Nama Siswa</th>
                        <th>Kehadiran</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($presensi as $p) : ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?php echo date('d-m-Y', strtotime($p['tg_presensi']));   ?></td>
                        <td><?= $p['kelas'] ?></td>
                        <td><?= $p['nis'] ?></td>
                        <td><?= $p['nm_siswa'] ?></td>
                        <td><?= $p['kehadiran'] ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>