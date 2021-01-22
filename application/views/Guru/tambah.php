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
                    <li><a href="<?= base_url('guru'); ?>">Tabel Guru</a></li>
                    <li class="active">Tambah Data Guru</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row mt-3">
        <div class="col-md">
            <div class="card">
                <div class="card-header">
                    Tambah Data Guru
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="row form-group mt-3 ml-3">
                            <div class="col-md-5">
                                <div class="input-group">
                                    <div class="input-group-addon">NIP &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                    </div>
                                    <input type="text" maxlength="18" class="form-control" name="nip">
                                </div>
                                <p class="text-danger"><?= form_error('nip'); ?></p>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">Nama Guru &nbsp; &nbsp; &nbsp;</div>
                                        <input type="text" class="form-control" name="nm_guru">
                                    </div>
                                    <p class="text-danger"><?= form_error('nm_guru'); ?></p>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">Alamat &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</div>
                                        <input type="text" class="form-control" name="alamat">
                                    </div>
                                    <p class="text-danger"><?= form_error('alamat'); ?></p>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">Jabatan &nbsp; &nbsp; &nbsp; &nbsp;</div>
                                        <select class="form-control" name="kd_jab">
                                            <option>Jabatan</option>
                                            <?php foreach ($jabatan as $j) : ?>
                                                <option value="<?= $j['kd_jab'] ?>">
                                                    <?= $j['nm_jab'] ?>
                                                </option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">jenis Kelamin&nbsp;&nbsp;</div>
                                        <div class="col col-md">
                                            <div class="form-check-inline form-check">
                                                <label for="jenkel1" class="form-check-label ">
                                                    <input type="radio" name="jenkel" value="L" class="form-check-input" required>
                                                    Laki-laki
                                                </label>
                                                &nbsp;
                                                &nbsp;
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
                                        <div class="input-group-addon">Agama &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                        </div>
                                        <select class="form-control" id="agama" name="agama">
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
                                        <div class="input-group-addon">Tempat Lahir &nbsp;</div>
                                        <input type="text" class="form-control" name="tp_lhr" id="tp_lhr">
                                        <small class="form-text text-danger">
                                            <?= form_error('tp_lhr'); ?>
                                        </small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">Tanggal Lahir</div>
                                        <input type="date" class="form-control" name="tg_lhr" id="tg_lhr">
                                        <small class="form-text text-danger">
                                        </small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">No HP &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                        </div>
                                        <input type="text" class="form-control" name="nohp" id="nohp">
                                        <small class="form-text text-danger">
                                            <?= form_error('nohp'); ?>
                                        </small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">Email &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                        </div>
                                        <input type="text" class="form-control" name="email" id="email">
                                        <small class="form-text text-danger">
                                            <?= form_error('email'); ?>
                                        </small>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a href="<?= base_url(); ?>guru" class="btn btn-warning">
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