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
                    <li><a href="<?= base_url('jabatan'); ?>"> Tabel Jabatan</a></li>
                    <li class="active">Ubah Data Jabatan</li>
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
                    Form Ubah Data jabatan
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="kd_jab" value="<?= $jabatan['kd_jab']; ?>">
                        <div class="form-group">
                            <label for="kd_jab">Kode Jabatan</label>
                            <input type="text" disabled class="form-control" name="kd_jab" id="kd_jab"
                                value="<?= $jabatan['kd_jab']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="nm_jab">Nama jabatan</label>
                            <input type="text" class="form-control" name="nm_jab" id="nm_jab"
                                value="<?= $jabatan['nm_jab']; ?>">
                            <small class="form-text text-danger">
                                <?= form_error('nm_jab'); ?>
                            </small>
                        </div>

                        <a href="<?= base_url(); ?>jabatan" class="btn btn-warning">
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