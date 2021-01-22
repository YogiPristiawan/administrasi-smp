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
                    <li class="active">Ubah Data Pengajar</li>
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
                    Form Ubah Data Pengajar
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $pengajar['id']; ?>">
                        <div class="col">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">Mata Pelajaran &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</div>
                                    <select class="form-control" name="kd_mapel" value="<?= $pengajar['kd_mapel']; ?>">
                                        <?php foreach ($mapel as $m) : ?>
                                            <?php if ($m['kd_mapel'] == $pengajar['kd_mapel']) : ?>
                                                <option value="<?= $m['kd_mapel'] ?>" selected>
                                                    <?= $m['nm_mapel'] ?></option>
                                            <?php else : ?>
                                                <option value="<?= $m['kd_mapel'] ?>">
                                                    <?= $m['nm_mapel'] ?>
                                                </option>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">Guru Pengajar &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</div>
                                    <select class="form-control" name="nip" value="<?= $pengajar['nip']; ?>">
                                        <?php foreach ($guru as $g) : ?>
                                            <?php if ($g['nip'] == $pengajar['nip']) : ?>
                                                <option value="<?= $g['nip'] ?>" selected>
                                                    <?= $g['nm_guru'] ?></option>
                                            <?php else : ?>
                                                <option value="<?= $g['nip'] ?>">
                                                    <?= $g['nm_guru'] ?>
                                                </option>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    </select>
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
</div>
</div>