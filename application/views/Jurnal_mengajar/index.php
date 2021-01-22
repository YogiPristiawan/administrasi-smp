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
                    <li class="active">Laporan Jurnal Mengajar</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="col-md-12">
    <div class="card mt-3">
        <div class="card-header">
            <strong class="card-title">LAPORAN JURNAL MENGAJAR</strong>
        </div>
        <div class="card-body">
            <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                <thead>
                    <tr align="center">
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Pengajar</th>
                        <th>Mata Pelajaran</th>
                        <th>Jam</th>
                        <th>Materi</th>
                        <th>Catatan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($jurnal as $k) : ?>
                    <tr>
                        <td align="center"><?= $no++ ?></td>
                        <td><?php echo date('d-m-Y', strtotime($k['tg_jurnal'])); ?></td>
                        <td><?= $k['guru'] ?></td>
                        <td><?= $k['mapel'] ?></td>
                        <td align="center">Ke-<?= $k['jam_ke'] ?></td>
                        <td><?= $k['materi'] ?></td>
                        <td><?= $k['catatan'] ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


</div>