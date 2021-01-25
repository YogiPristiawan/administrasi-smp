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
                    <li><a href="<?= base_url('home'); ?>">Halaman Guru</a></li>
                    <li><a href="<?= base_url('absensi_siswa'); ?>">Input Jurnal dan Absensi</a></li>
                    <li class="active">Jurnal dan Absensi</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg">
                <form action="" method="post">
                    <div class="card">
                        <div class="card-header">
                            <div class="row form-group mt-3 ml-3">
                                <div class="col-md-2">
                                    <label for="kelas" class="form-control-label">Kelas </label>
                                </div>
                                <div class="col-md-3">
                                    <input type="hidden" name="kd_kelas" value="<?= $kelas['kd_kelas']; ?>">
                                    <input type="text" name="kelas" class="form-control" value="Kelas <?= $kelas['nm_kelas'] ?>" readonly>
                                </div>
                                <div class="col-md-2">
                                    <label for="Semester" class="form-control-label">Tahun Ajaran</label>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" name="th_ajaran" class="form-control" value=" <?= $th_ajaran ?>" readonly>
                                </div>
                            </div>
                            <div class="row form-group mt-3 ml-3">
                                <div class="col-md-2">
                                    <label for="tanggal" class="form-control-label">Tanggal
                                    </label>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" class=" form-control" value="<?= date('d F Y') ?>" readonly>
                                </div>
                                <div class="col-md-2">
                                    <label for="Semester" class="form-control-label">Semester</label>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" name="semester" class="form-control" value="<?= $semester ?>" readonly>
                                </div>
                            </div>
                            <div class="row form-group mt-3 ml-3">
                                <div class="col-md-2">
                                    <label for="hari" class="form-control-label">Hari </label>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" name="hari" id="hari" class="form-control" value="<?= $hari ?>" readonly>
                                </div>
                                <div class="col-md-2">
                                    <label for="guru" class="form-control-label">Guru</label>
                                </div>
                                <div class="col-md-3">
                                    <input type="hidden" name="nip_guru" value="<?= $user['nip']; ?>">
                                    <input type="text" class="form-control" value="<?= $user['nama']; ?>" readonly>
                                </div>
                            </div>
                            <div class="row form-group mt-3 ml-3">
                                <div class="col-md-2">
                                    <label for="mapel" class="form-control-label">Mata Pelajaran </label>
                                </div>

                                <div class="col-md-3">
                                    <input type="hidden" name="kd_mapel" class="form-control" value="<?= $mapel['kd_mapel'] ?>">
                                    <input type="text" class="form-control" value="<?= $mapel['nm_mapel']; ?>" readonly>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <strong class="card-title">Input Data Jurnal Mengajar</strong>
                                </div>
                                <div class="card-body">
                                    <!-- Credit Card -->
                                    <div id="jurnal mengajar">
                                        <div class="card-body">
                                            <div class="card-title">
                                            </div>
                                            <div class="row form-group mt-3 ml-3">
                                                <div class="col-md-3">
                                                    <label for="kd_jurnal" class="form-control-label">Kode
                                                        Jurnal</label>
                                                </div>
                                                <div class="col-md-4">
                                                    <input type="text" name="kd_jurnal" class="form-control" value="<?= $kd_jurnal; ?>" readonly>
                                                </div>
                                            </div>
                                            <div class="row form-group mt-3 ml-3">
                                                <div class="col-md-3">
                                                    <label for="kd_jam" class="form-control-label">Jam Ke</label>
                                                </div>
                                                <div class="col-md-4">
                                                    <select class="form-control" name="kd_jam">
                                                        <option value="" label="Pilih Jam Pelajaran">Pilih Jam Pelajaran</option>
                                                        <?php foreach ($jam_ke as $j) : ?>
                                                            <option value="<?= $j['kd_jam'] ?>">
                                                                <?= $j['jam_ke'] ?>.&nbsp;&nbsp;&nbsp;&nbsp;<?= $j['jam_awal']; ?> - <?= $j['jam_akhir']; ?>
                                                            </option>
                                                        <?php endforeach ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row form-group mt-3 ml-3">
                                                <div class="col-md-3">
                                                    <label for="materi" class="form-control-label">Materi yang
                                                        diberikan</label>
                                                </div>
                                                <div class="col-md-8">
                                                    <input type="text" name="materi" id="materi" class="form-control" required>

                                                </div>
                                            </div>
                                            <div class="row form-group mt-3 ml-3">
                                                <div class="col-md-3">
                                                    <label for="catatan" class="form-control-label">Catatan</label>
                                                </div>
                                                <div class="col-md-8">
                                                    <input type="text" name="catatan" id="catatan" class="form-control" required>

                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div> <!-- .card -->
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Input Data Absensi Siswa</strong>
                        </div>
                        <div class="container mt-3">
                            Catatan : <br>
                            T = Terlambat<br>
                            I = Tidak Masuk Ada Surat Ijin Atau Pemberitahuan<br>
                            S = Tidak Masuk Ada Surat Dokter Atau Pemberitahuan<br>
                            H = Hadir
                        </div>
                        <div class=" card-body">
                            <table class="table">
                                <thead>
                                    <tr align="center">
                                        <th>No</th>
                                        <th>NIS</th>
                                        <th>Nama Siswa</th>
                                        <th>Kehadiran</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $jumlah_siswa = count($siswa) ?>
                                    <input type="hidden" name="jumlah_siswa" value="<?= $jumlah_siswa; ?>">

                                    <?php $no = 1;
                                    if ($siswa) { ?>
                                        <?php foreach ($siswa as $s) : ?>
                                            <tr>
                                                <td><?= $no; ?></td>
                                                <td><input type="text" style="border: 0px;" name="nis<?= $no; ?>" value="<?= $s['nis'] ?>" readonly></td>
                                                <td><input type="text" style="border: 0px;" name="nm_siswa<?= $no; ?>" value="<?= $s['nm_siswa'] ?>" readonly>
                                                </td>
                                                <td align="center">
                                                    <div class="form-check-inline form-check">
                                                        <label for="hadir<?= $no; ?>" class="form-check-label ">
                                                            <input type="radio" name="absen<?= $no; ?>" value="h" class="form-check-input">H
                                                        </label>
                                                        &nbsp;
                                                        &nbsp;
                                                        <label for="sakit<?= $no; ?>" class="form-check-label ">
                                                            <input type="radio" name="absen<?= $no; ?>" value="s" class="form-check-input">S
                                                        </label>
                                                        &nbsp;
                                                        &nbsp;
                                                        <label for="izin<?= $no; ?>" class="form-check-label ">
                                                            <input type="radio" name="absen<?= $no; ?>" value="i" class="form-check-input">I
                                                        </label>
                                                        &nbsp;
                                                        &nbsp;
                                                        <label for="terlambat<?= $no; ?>" class="form-check-label ">
                                                            <input type="radio" name="absen<?= $no; ?>" value="t" class="form-check-input" required>T
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php $no++;
                                        endforeach; ?>
                                    <?php } else { ?>
                                        <td scope="row">1</td>
                                        <td>Tidak Ada Data</td>
                                        <td>Tidak Ada Data</td>
                                        <td>Tidak Ada Data</td>
                                </tbody>
                            <?php } ?>
                            </table>

                            <button type="submit" name="simpan" class="btn btn-primary btn-sm float-left">
                                <i class=" fa fa-save"></i> Simpan
                            </button>

                        </div>
                    </div>
                </form>
            </div>
        </div>