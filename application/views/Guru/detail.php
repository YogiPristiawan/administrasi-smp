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
                    <li class="active">Detail Guru</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            Detail Data <?= $guru['nm_guru']; ?>
        </div>
        <form action="">
            <div class="row form-group mt-3 ml-3">
                <div class="col-md-5">
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">NIP
                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</div>
                            <input type=" text" name="nip" value="<?= $guru['nip']; ?>" class="form-control" readonly>
                        </div>
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">Nama
                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                            </div>
                            <input type="text" name="nama" value="<?= $guru['nm_guru']; ?>" class="form-control" readonly>
                        </div>
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">Alamat
                                &nbsp;
                                &nbsp; &nbsp; &nbsp; &nbsp;</div>
                            <input type="text" name="alamat" value="<?= $guru['alamat']; ?>" class="form-control" readonly>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">Tempat
                                Lahir
                            </div>
                            <input type="text" name="tp_lhr" value="<?= $guru['tp_lhr']; ?>" class="form-control" readonly>
                        </div>
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">Tanggal
                                Lahir
                            </div>
                            <input type="text" name="tg_lhr" value="<?php echo date('d F Y', strtotime($guru['tg_lhr'])); ?>" class="form-control" readonly>
                        </div>
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">Jabatan
                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</div>
                            <input type="text" name="jabatan" value="<?= $guru['nm_jab']; ?>" class="form-control" readonly>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">Agama
                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</div>
                            <input type="text" name="agama" value="<?= $guru['agama']; ?>" class="form-control" readonly>
                        </div>
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">No HP
                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</div>
                            <input type="text" name="nohp" value="<?= $guru['nohp']; ?>" class="form-control" readonly>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">Jenis
                                Kelamin
                            </div>

                            <?php $jenkel;
                            if ($guru['jenkel'] == 'L') {
                                $jenkel = 'Laki-Laki';
                            } else {
                                $jenkel = "Perempuan";
                            }
                            ?>
                            <input type="text" name="jenkel" value="<?= $jenkel; ?>" class="form-control" readonly>
                        </div>
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">Email
                                &nbsp;
                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</div>
                            <input type="text" name="email" value="<?= $guru['email']; ?>" class="form-control" readonly>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </form>
    <a href="<?= base_url(); ?>guru" class="btn btn-warning" float="right">
        <i class="fa fa-chevron-left"></i>
        Kembali
    </a>
    <div>