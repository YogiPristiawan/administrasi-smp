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
                    <li class="active">Tabel siswa</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="col-md-12">
    <div class="row mt-3">
        <div class="col-md-12">
            <?php if ($this->session->flashdata('flash')) : ?>
                <div class="row mt-3">
                    <div class="col-md-12">
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            Data siswa <strong>berhasil</strong>
                            <?= $this->session->flashdata('flash'); ?>!
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <a href="<?= base_url(); ?>siswa/tambah" class="btn btn-primary float-left"><i class=" fa fa-plus"></i>
                Tambah Data
                Siswa</a>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-header">
            <strong class="card-title">TABEL MASTER SISWA</strong>
        </div>
        <div class="card-body">
            <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                <thead>
                    <tr align="center">
                        <th>No</th>
                        <th>NIS</th>
                        <th>Nama siswa</th>
                        <th>Kelas</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($siswa as $s) : ?>
                        <tr>
                            <td align="center"><?= $no++ ?></td>
                            <td><?= $s['nis'] ?></td>
                            <td><?= $s['nm_siswa'] ?></td>
                            <td><?= $s['nm_kelas'] ?></td>
                            <td align="center">
                                <a href="<?= base_url(); ?>siswa/ubah/<?= $s['id']; ?>" class="badge badge-warning"><i class="btn btn-lg fa fa-lg fa-pencil-square-o"></i>
                                </a>
                                <a href="<?= base_url(); ?>siswa/detail/<?= $s['id']; ?>" class="badge badge-primary"><i class="btn btn-lg fa fa-lg fa-info"></i></i>
                                </a>
                                <a href="<?= base_url(); ?>siswa/hapus/<?= $s['id']; ?>" class="badge badge-danger" onclick="return confirm('Yakin hapus data ini?');"><i class="btn btn-lg fa fa-lg fa-trash-o"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


</div>