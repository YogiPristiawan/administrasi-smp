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
                    <li><a href="<?= base_url('mapel'); ?>">Tabel Pengajar</a></li>
                    <li class="active">Tambah Data Pengajar</li>
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
                    Form Tambah Data Pengajar
                </div>
                <div class="card-body">
                    <?php if (isset($status)) : ?>
                        <?php if ($status === TRUE) : ?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <?= $pesan; ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <?php endif; ?>
                    <?php endif; ?>
                    <form action="" method="post">
                        <div class="col">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">Mata Pelajaran &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</div>
                                    <select class="form-control" name="kd_mapel">
                                        <option selected>Pilih Mata Pelajaran</option>
                                        <?php foreach ($mapel as $m) : ?>
                                            <option value="<?= $m['kd_mapel']; ?>">
                                                <?= $m['nm_mapel'] ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">Guru Pengajar &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</div>
                                    <select class="form-control" name="nip">
                                        <option selected>Pilih Guru</option>
                                        <?php foreach ($guru as $g) : ?>
                                            <option value="<?= $g['nip']; ?>">
                                                <?= $g['nm_guru'] ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <a href="<?= base_url(); ?>pengajar" class="btn btn-warning">
                            <i class="fa fa-chevron-left"></i>
                            Kembali
                        </a>
                        <button type="submit" name="ubah" class="btn btn-primary">
                            <i class="fa fa-save"></i>
                            Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>