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
                    <li class="active">Ubah Data Guru</li>
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
                    Form Ubah Data Guru
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $guru['id']; ?>">
                        <div class="row form-group mt-3 ml-3">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">NIP &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            &nbsp; &nbsp;&nbsp;</div>
                                        <input type="text" class="form-control" maxlength="18" name="nip" value="<?= $guru['nip']; ?>">
                                    </div>
                                    <p class="text-danger"><?= form_error('nip'); ?></p>
                                </div>
                            </div>

                            <div class="col-md-5">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">Nama Guru &nbsp; &nbsp;&nbsp;</div>
                                        <input type="text" class="form-control" name="nm_guru" value="<?= $guru['nm_guru']; ?>">
                                    </div>
                                    <p class="text-danger"><?= form_error('nm_guru'); ?></p>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">Alamat &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                        </div>
                                        <input type="text" class="form-control" name="alamat" value="<?= $guru['alamat']; ?>">
                                    </div>
                                    <p class="text-danger"><?= form_error('alamat'); ?></p>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">Jabatan &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</div>
                                        <select class="form-control" name="kd_jab" value="<?= $guru['kd_jab']; ?>">
                                            <?php foreach ($jabatan as $j) : ?>
                                                <?php if ($j['kd_jab'] == $guru['kd_jab']) : ?>
                                                    <option value="<?= $j['kd_jab'] ?>" selected>
                                                        <?= $j['nm_jab'] ?></option>
                                                <?php else : ?>
                                                    <option value="<?= $j['kd_jab'] ?>">
                                                        <?= $j['nm_jab'] ?>
                                                    </option>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">Jenis Kelamin</div>
                                        <div class="col col-md">
                                            <div class="form-check-inline form-check">
                                                <?php if ($guru['jenkel'] == 'L') : ?>
                                                    <label for="jenkel1" class="form-check-label ">
                                                        <input type="radio" name="jenkel" value="L" class="form-check-input" checked required>
                                                        Laki-laki
                                                    </label>
                                                    &nbsp;
                                                    &nbsp;
                                                    <label for="jenkel2" class="form-check-label ">
                                                        <input type="radio" name="jenkel" value="P" class="form-check-input"> Perempuan
                                                    </label>
                                                <?php else : ?>
                                                    <label for="jenkel1" class="form-check-label ">
                                                        <input type="radio" name="jenkel" value="L" class="form-check-input" required>
                                                        Laki-laki
                                                    </label>
                                                    &nbsp;
                                                    &nbsp;
                                                    <label for="jenkel2" class="form-check-label ">
                                                        <input type="radio" name="jenkel" value="P" class="form-check-input" checked> Perempuan
                                                    </label>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-5">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">Agama &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                        </div>
                                        <select class="form-control" name="agama" value="<?= $guru['agama']; ?>">
                                            <?php foreach ($agama as $j) : ?>
                                                <?php if ($j == $guru['agama']) : ?>
                                                    <option value="<?= $j; ?>" selected><?= $j; ?></option>
                                                <?php else : ?>
                                                    <option value="<?= $j; ?>"><?= $j; ?></option>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-5">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">Tempat Lahir</div>
                                        <input type="text" class="form-control" name="tp_lhr" value="<?= $guru['tp_lhr']; ?>">
                                    </div>
                                    <p class="text-danger"><?= form_error('tp_lhr'); ?></p>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">Tanggal Lahir &nbsp;</div>
                                        <input type="date" class="form-control" name="tg_lhr" value="<?= $guru['tg_lhr']; ?>">
                                    </div>
                                    <p class="text-danger"><?= form_error('tg_lhr'); ?></p>
                                </div>
                            </div>

                            <div class="col-md-5">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">No HP &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</div>
                                        <input type="text" class="form-control" name="nohp" value="<?= $guru['nohp']; ?>">
                                    </div>
                                    <p class="text-danger"><?= form_error('nohp'); ?></p>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">Email &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            &nbsp;</div>
                                        <input type="email" class="form-control" name="email" value="<?= $guru['email']; ?>">
                                    </div>
                                    <p class="text-danger"><?= form_error('email'); ?></p>
                                </div>
                            </div>
                        </div>
                        <a href="<?= base_url(); ?>guru" class="btn btn-warning">
                            <i class="fa fa-chevron-left"></i>
                            Kembali
                        </a>
                        <button type="submit" name="ubah" class="btn btn-primary">
                            <i class="fa fa-save"></i>
                            Ubah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>