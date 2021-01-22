<table class="table table-striped">
    <tr>
        <th>No</th>
        <th>Nis</th>
        <th>Nama</th>
        <th>Alamat</th>
    </tr>
    <?php $no=1; foreach ($siswa as $row): ?>
    <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $row->nis ?></td>
        <td><?php echo $row->nm_siswa ?></td>
        <td><?php echo $row->alamat ?></td>
    </tr>
    <?php endforeach ?>
</table>
<a href="<?= site_url('Cetak_Filter/cetak/'. $kd_kelas) ?>" target="_blank" class="btn btn-warning">Cetak Laporan</a>