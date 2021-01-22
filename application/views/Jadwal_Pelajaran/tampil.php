<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Halaman Guru</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="<?= base_url('admin'); ?>">Halaman Admin</a></li>
                    <li class="active">Laporan Jadwal Pelajaran</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="card mt-3">
    <div class="card-header">
        <strong class="card-title">Laporan Jadwal Pelajaran</strong>
    </div>
    <div class="card-body">
        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Hari</th>
                    <th>Kelas</th>
                    <th>Jam Ke</th>
                    <th>Waktu</th>
                    <th>Mata Pelajaran</th>
                    <th>Pengajar</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                <?php foreach ($jadwal as $row) : ?>
                <tr>
                    <td align="center"><?= $no++ ?></td>
                    <td><?= $row['hari'] ?></td>
                    <td><?= $row['kelas'] ?></td>
                    <td><?= $row['jam_ke'] ?></td>
                    <td><?= date('h:i', strtotime($row['jam_mulai'])). ' - ' .date('h:i', strtotime($row['jam_akhir'])); ?>
                    </td>
                    <td><?= $row['mapel'] ?></td>
                    <td><?= $row['guru'] ?></td>
                </tr>
            </tbody>
            <?php endforeach; ?>
        </table>
    </div>