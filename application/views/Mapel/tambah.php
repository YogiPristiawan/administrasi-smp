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
                    <li><a href="<?= base_url('mapel'); ?>">Tabel Mata Pelajaran</a></li>
                    <li class="active">Tambah Data Mata Pelajaran</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Tambah Data Mata Pelajaran
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
                        <div class="form-group">
                            <label for="nm_mapel">Nama Mata Pelajaran</label>
                            <input type="text" class="form-control" name="nm_mapel">
                            <small class="form-text text-danger">
                                <?= form_error('nm_mapel'); ?>
                            </small>
                        </div>

                        <button class="btn btn-warning btn-sm">
                            <i class="fa fa-chevron-left"></i>
                            <a href="<?= base_url(); ?>mapel">
                                Kembali
                            </a>
                        </button>
                        <button type="submit" name="tambah" class="btn btn-primary btn-sm">
                            <i class="fa fa-save"></i> Tambah
                        </button>
                        <button type="reset" class="btn btn-danger btn-sm">
                            <i class="fa fa-times"></i> Batal
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>