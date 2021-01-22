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
                    <li class="active">Ubah Data Mata Pelajaran</li>
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
                    Form Ubah Data Mata Pelajaran
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="kd_mapel" value="<?= $mapel['kd_mapel']; ?>">
                        <div class="form-group">
                            <label for="nm_mapel">Nama mapel</label>
                            <input type="text" class="form-control" name="nm_mapel" id="nm_mapel" value="<?= $mapel['nm_mapel']; ?>">
                            <small class="form-text text-danger">
                                <?= form_error('nm_mapel'); ?>
                            </small>
                        </div>
                </div>
            </div>

            <a href="<?= base_url(); ?>mapel" class="btn btn-warning">
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