<div>
    <table border="0" width="100%">
        <tr>
            <td width="10%">
            </td>
            <td align="right" width="20%">
                <img src="assets/images/logo.jpg" width="auto" height="100">
            </td>
            <td align="center" width="50%">
                <h3>DATA GURU</h3>
                <p>SMP TARUNA PROBOLINGGO
                    <br>
                    JL. RAYA LECES A3 LECES-PROBOLINGGO
                    <br>
                    Website : www.smptaruna.sch.id email : smptaruna@gmail.com
                </p>
            </td>
            <td width="20%"></td>
        </tr>
    </table>
</div>

<div>

    <table border="1" width="100%">
        <thead>
            <tr>
                <th>No</th>
                <th>NIP</th>
                <th>Nama Guru</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php foreach ($cetak_guru as $g) : ?>
            <tr>
                <td align="center"><?php echo $no++ ?></td>
                <td><?php echo $g->nip ?></td>
                <td><?php echo $g->nm_guru ?></td>
                <td><?php echo $g->jenkel ?></td>
                <td><?php echo $g->alamat ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>