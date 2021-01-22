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
                    <li><a href="<?= base_url('jam'); ?>">Tabel Jam</a></li>
                    <li class="active">Ubah Data Jam</li>
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
                    Form Ubah Data Jam
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
                        <input type="hidden" name="kd_jam" value="<?= $jam['kd_jam']; ?>">
                        <div class="form-group">
                            <label for="jam_ke">Jam Ke</label>
                            <input type="text" class="form-control" name="jam_ke" value="<?= $jam['jam_ke']; ?>">
                            <p class="text-danger"><?= form_error('jam_ke'); ?></p>
                        </div>
                        <div class="form-group">
                            <label for="jam_awal">Jam Awal</label>
                            <input type="time" class="form-control" name="jam_awal" value="<?= $jam['jam_awal']; ?>">
                            <p class="text-danger"><?= form_error('jam_awal'); ?></p>
                        </div>
                        <div class="form-group">
                            <label for="jam_akhir">Jam Akhir</label>
                            <input type="time" class="form-control" name="jam_akhir" value="<?= $jam['jam_akhir']; ?>">
                            <p class="text-danger"><?= form_error('jam_akhir'); ?></p>
                        </div>

                        <a href="<?= base_url(); ?>jam" class="btn btn-warning">
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