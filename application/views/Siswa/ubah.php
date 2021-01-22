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
                    <li class="active">Ubah Data Siswa</li>
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
                    Form Ubah Data siswa
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $siswa['id']; ?>">
                        <div class="row form-group mt-3 ml-3">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">NIS</div>
                                        <input type="text" class="form-control" name="nis" value="<?= $siswa['nis']; ?>">
                                    </div>
                                    <p class="text-danger"><?= form_error('nis'); ?></p>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">Nama siswa</div>
                                        <input type="text" class="form-control" name="nm_siswa" value="<?= $siswa['nm_siswa']; ?>">
                                    </div>
                                    <p class="text-danger"><?= form_error('nm_siswa'); ?></p>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">Alamat</div>
                                        <input type="text" class="form-control" name="alamat" value="<?= $siswa['alamat']; ?>">
                                    </div>
                                    <p class="text-danger"><?= form_error('alamat'); ?></p>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">Kelas</div>
                                        <select class="form-control" name="kelas" value="<?= $siswa['kelas']; ?>" required>
                                            <?php foreach ($kelas as $k) : ?>
                                                <?php if ($k['kd_kelas'] == $siswa['kd_kelas']) : ?>
                                                    <option value="<?= $k['kd_kelas'] ?>" selected>
                                                        <?= $k['nm_kelas'] ?></option>
                                                <?php else : ?>
                                                    <option value="<?= $k['kd_kelas'] ?>">
                                                        <?= $k['nm_kelas'] ?>
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
                                        <div class="input-group-addon">Tempat Lahir</div>
                                        <input type="text" class="form-control" name="tp_lhr" value="<?= $siswa['tp_lhr']; ?>">
                                    </div>
                                    <p class="text-danger"><?= form_error('tp_lhr'); ?></p>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">Tanggal Lahir</div>
                                        <input type="date" class="form-control" name="tg_lhr" value="<?= $siswa['tg_lhr']; ?>">
                                    </div>
                                    <p class="text-danger"><?= form_error('tg_lhr'); ?></p>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">Jenis Kelamin</div>
                                        <div class="col col-md">
                                            <div class="form-check-inline form-check">
                                                <?php if ($siswa['jenkel'] == 'L') : ?>
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
                                        <div class="input-group-addon">Agama</div>
                                        <select class="form-control" name="agama" value="<?= $siswa['agama']; ?>" required>
                                            <?php foreach ($agama as $a) : ?>
                                                <?php if ($a == $siswa['agama']) : ?>
                                                    <option value="<?= $a; ?>" selected><?= $a; ?></option>
                                                <?php else : ?>
                                                    <option value="<?= $a; ?>"><?= $a; ?></option>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">No HP</div>
                                        <input type="text" class="form-control" name="nohp" value="<?= $siswa['nohp']; ?>">
                                    </div>
                                    <p class="text-danger"><?= form_error('nohp'); ?></p>
                                </div>
                            </div>

                            <div class="col-md-5">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">Email</div>
                                        <input type="email" class="form-control" name="email" value="<?= $siswa['email']; ?>">
                                    </div>
                                    <p class="text-danger"><?= form_error('email'); ?></p>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">Tahun Ajaran</div>
                                        <input type="th_ajaran" class="form-control" name="th_ajaran" value="<?= $siswa['th_ajaran']; ?>">
                                    </div>
                                    <p class="text-danger"><?= form_error('th_ajaran'); ?></p>
                                </div>
                            </div>
                        </div>

                        <a href="<?= base_url(); ?>siswa" class="btn btn-warning">
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