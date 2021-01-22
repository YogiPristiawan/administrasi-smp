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
                    <li class="active">Cetak Data</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="col-md-12">
    <div class="card mt-3">
        <div class="card-header">
            Cetak Data
        </div>
        <div class="card-body">
            <div class="row form-group ml-3">
                <a href="<?= base_url(); ?>guru/cetak" target=" _blank" class="btn btn-warning">
                    <i class=" fa fa-print"></i> Cetak Data Guru
                </a>
            </div>
            <div class="row form-group mt-3 ml-3">
                <a href="<?= base_url(); ?>jabatan/cetak" target=" _blank" class="btn btn-warning">
                    <i class=" fa fa-print"></i> Cetak Data Jabatan
                </a>
            </div>
            <div class="row form-group mt-3 ml-3">
                <a href="<?= base_url(); ?>kelas/cetak" target=" _blank" class="btn btn-warning">
                    <i class=" fa fa-print"></i> Cetak Data Kelas
                </a>
            </div>
            <div class="row form-group mt-3 ml-3">
                <a href="<?= base_url(); ?>mapel/cetak" target=" _blank" class="btn btn-warning">
                    <i class=" fa fa-print"></i> Cetak Data Mata Pelajaran
                </a>
            </div>
        </div>
    </div>
</div>