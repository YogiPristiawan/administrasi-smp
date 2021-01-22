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
                    <li class="active">Detail Siswa</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            Detail Data <?= $siswa['nm_siswa']; ?>
        </div>
        <form action="">
            <div class="row form-group mt-3 ml-3">
                <div class="col-md-5">
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">NIS &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                            </div>
                            <input type="text" name="nis" value="<?= $siswa['nis']; ?>" class="form-control" readonly>
                        </div>
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">Nama &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</div>
                            <input type="text" name="nama" value="<?= $siswa['nm_siswa']; ?>" class="form-control" readonly>
                        </div>
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">Alamat &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</div>
                            <input type="text" name="alamat" value="<?= $siswa['alamat']; ?>" class="form-control" readonly>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">Tempat Lahir&nbsp;</div>
                            <input type="text" name="tp_lhr" value="<?= $siswa['tp_lhr']; ?>" class="form-control" readonly>
                        </div>
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">Kelas&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</div>
                            <input type="text" name="kelas" value="<?= $siswa['nm_kelas']; ?>" class="form-control" readonly>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">Tanggal Lahir</div>
                            <input type="text" name="tg_lhr" value="<?php echo date('d F Y', strtotime($siswa['tg_lhr'])); ?>" class="form-control" readonly>
                        </div>
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">Jenis Kelamin</div>
                            <input type="text" name="jenkel" value="<?= $siswa['jenkel']; ?>" class="form-control" readonly>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">Agama &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</div>
                            <input type="text" name="agama" value="<?= $siswa['agama']; ?>" class="form-control" readonly>
                        </div>
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">No HP&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</div>
                            <input type="text" name="nohp" value="<?= $siswa['nohp']; ?>" class="form-control" readonly>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">Email&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</div>
                            <input type="text" name="email" value="<?= $siswa['email']; ?>" class="form-control" readonly>
                        </div>
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">Tahun Ajaran&nbsp;</div>
                            <input type="text" name="th_ajaran" value="<?= $siswa['th_ajaran']; ?>" class="form-control" readonly>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <a href="<?= base_url(); ?>siswa" class="btn btn-warning">
        <i class="fa fa-chevron-left"></i>
        Kembali
    </a>
    </form>
    <div>