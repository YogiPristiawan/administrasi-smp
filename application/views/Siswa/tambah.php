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
                    <li><a href="<?= base_url('siswa'); ?>">Tabel Siswa</a></li>
                    <li class="active">Tambah Data Siswa</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row mt-3">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Tambah Data Siswa
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="row form-group mt-3 ml-3">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">NIS &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
                                            &nbsp;
                                            &nbsp;</div>
                                        <input type="text" class="form-control" name="nis">
                                    </div>
                                    <p class="text-danger"><?= form_error('nis'); ?></p>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">Nama Siswa&nbsp;</div>
                                        <input type="text" class="form-control" name="nm_siswa">
                                        <p class="text-danger"><?= form_error('nm_siswa'); ?></p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-5">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">Kelas &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;
                                            &nbsp;
                                        </div>
                                        <select class="form-control" name="kelas">
                                            <option>Kelas</option>
                                            <?php foreach ($kelas as $k) : ?>
                                                <option value="<?= $k['kd_kelas'] ?>">
                                                    <?= $k['nm_kelas'] ?>
                                                </option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">Tempat Lahir</div>
                                        <input type="text" class="form-control" name="tp_lhr">
                                    </div>
                                    <p class="text-danger"><?= form_error('tp_lhr'); ?></p>
                                </div>
                            </div>

                            <div class="col-md-5">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">Tanggal Lahir</div>
                                        <input type="date" class="form-control" name="tg_lhr">
                                    </div>
                                    <p class="text-danger"><?= form_error('tg_lhr'); ?></p>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            Jenis Kelamin
                                        </div>
                                        <div class="col col-md">
                                            <div class="form-check-inline form-check">
                                                <label for="jenkel1" class="form-check-label ">
                                                    <input type="radio" name="jenkel" value="L" class="form-check-input" required>
                                                    Laki-laki&nbsp;
                                                </label>
                                                <label for="jenkel2" class="form-check-label ">
                                                    <input type="radio" name="jenkel" value="P" class="form-check-input">
                                                    Perempuan
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-5">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">Agama &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</div>
                                        <select class="form-control" name="agama">
                                            <option> Agama</option>
                                            <option value="Islam">Islam</option>
                                            <option value="Kristen">Kristen</option>
                                            <option value="Hindu">Hindu</option>
                                            <option value="Buddha">Buddha</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">Nomor HP&nbsp; &nbsp; &nbsp;</div>
                                        <input type="text" class="form-control" name="nohp">
                                    </div>
                                    <p class="text-danger"><?= form_error('nohp'); ?></p>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">Alamat&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                        </div>
                                        <input type="text" class="form-control" name="alamat">
                                    </div>
                                    <p class="text-danger"><?= form_error('alamat'); ?></p>
                                </div>
                            </div>

                            <div class="col-md-5">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">Email &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            &nbsp;
                                        </div>
                                        <input type="text" class="form-control" name="email">
                                    </div>
                                    <p class="text-danger"><?= form_error('email'); ?></p>
                                </div>
                            </div>

                            <div class="col-md-5">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">Tahun Ajaran&nbsp;</div>
                                        <input type="text" class="form-control" name="th_ajaran">
                                    </div>
                                    <p class="text-danger"><?= form_error('th_ajaran'); ?></p>
                                </div>
                            </div>
                        </div>
                        <a href="<?= base_url(); ?>siswa" class="btn btn-warning">
                            <i class="fa fa-chevron-left"></i>
                            Kembali
                        </a>
                        <button type="submit" name="tambah" class="btn btn-primary">
                            <i class="fa fa-save"></i> Tambah
                        </button>
                        <button type="reset" class="btn btn-danger">
                            <i class="fa fa-times"></i> Batal
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>