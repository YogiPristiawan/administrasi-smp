<?php date_default_timezone_set("Asia/Jakarta"); ?>
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
                    <li><a href="<?= base_url('admin'); ?>">Halaman Guru</a></li>
                    <li class="active">Input Jurnal dan Presensi</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<?php if ($this->session->flashdata('flash')) : ?>
    <div class="row mt-3">
        <div class="col-md-12">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Jurnal Mengajar dan Presensi Siswa <strong>berhasil</strong>
                <?= $this->session->flashdata('flash'); ?>!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
<?php endif; ?>

<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <strong class="card-title">
                Input Data Jurnal dan Presensi
            </strong>
        </div>

        <form action="<?= base_url() ?>Absensi_siswa/absen/" method="POST">
            <div class="row form-group mt-3 ml-3">
                <div class="col-md-2">
                    <label for="kelas" class="form-control-label">Kelas</label>
                </div>
                <div class="col-md-3">
                    <select class="form-control" name="kd_kelas">
                        <option value="" label="Pilih Kelas">Pilih Kelas</option>
                        <?php foreach ($kelas as $k) : ?>
                            <option value="<?= $k['kd_kelas'] ?>">
                                <?= $k['nm_kelas'] ?>
                            </option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="col-md-2">
                    <label for="th_ajaran" class="form-control-label">Tahun Ajaran</label>
                </div>
                <div class="col-md-3">
                    <select name="th_ajaran" class="form-control" id="th_ajaran">
                        <option value="" label="Pilih Tahun Ajaran">Pilih Tahun Ajaran</option>
                        <option value="2017/2018">2017/2018</option>
                        <option value="2018/2019">2018/2019</option>
                        <option value="2019/2020">2019/2020</option>
                    </select>
                </div>
            </div>
            <div class="row form-group mt-3 ml-3">
                <div class="col-md-2">
                    <label for="tg_jurnal" class="form-control-label">Tanggal</label>
                </div>
                <div class="col-md-3">
                    <input type="text" name="tg_jurnal" value="<?= date('d F Y') ?>" class="form-control" disabled>
                </div>
                <div class="col-md-2">
                    <label for="semester" class="form-control-label">Semester</label>
                </div>
                <div class="col-md-3">
                    <select name="semester" class="form-control" id="semester">
                        <option value="" label="Pilih Semester">Pilih Semester</option>
                        <option value="Ganjil">Ganjil</option>
                        <option value="Genap">Genap</option>
                    </select>
                </div>
            </div>
            <div class="row form-group mt-3 ml-3">
                <div class="col-md-2">
                    <label for="hari" class="form-control-label">Hari</label>
                </div>
                <div class="col-md-3">
                    <input type="text" name="hari" value="<?= $hari ?>" class="form-control" disabled>
                </div>
                <div class="col-md-2">
                    <label for="mapel" class="form-control-label">Mata Pelajaran</label>
                </div>
                <div class="col-md-3">
                    <select class="form-control" name="kd_mapel">
                        <option value="" label="Pilih Mata Pelajaran">Pilih Mata Pelajaran</option>
                        <?php foreach ($mapel as $m) : ?>
                            <option value="<?= $m['kd_mapel'] ?>">
                                <?= $m['nm_mapel'] ?>
                            </option>
                        <?php endforeach ?>
                    </select>
                </div>
            </div>
    </div>
    <a href="<?= base_url(); ?>absensi_siswa/absen/">
        <button type="submit" name="tampilkan" class="btn btn-primary btn-sm float-left ml-2 mb-2">
            <i class=" fa fa-eye"></i> Tampilkan
        </button>
    </a>
    </form>
</div>