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
                    <li class="active">Cetak Absensi Siswa</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <strong class="card-title">
                Input Data Laporan Absensi
            </strong>
        </div>
        <div class="row form-group mt-3 ml-3">
            <div class="col-md-2">
                <label for="Pilih Bulan" class="form-control-label">Pilih Bulan</label>
            </div>
            <div class="col-md-2">
                <select name="select" id="select" class="form-control">
                    <option value="0">Pilih Bulan</option>
                    <option value="1">Januari</option>
                    <option value="2">Februari</option>
                    <option value="3">Maret</option>
                </select>
            </div>
            <div class="col-md-1">
                <label for="Tahun" class="form-control-label">Tahun</label>
            </div>
            <div class="col-md-2">
                <select name="select" id="select" class="form-control">
                    <option value="0">Pilih Tahun</option>
                    <option value="1">2016</option>
                    <option value="2">2017</option>
                    <option value="3">2018</option>
                    <option value="4">2019</option>
                </select>
            </div>
        </div>
        <div class="row form-group mt-3 ml-3">
            <div class="col-md-2">
                <label for="Kelas" class="form-control-label">Pilih Kelas</label>
            </div>
            <div class="col-md-3">
                <select name="select" id="select" class="form-control">
                    <option value="0">Kelas</option>
                    <option value="1">7</option>
                    <option value="2">8</option>
                    <option value="3">9</option>
                </select>
            </div>
        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary btn-sm float-left">
                <i class=" fa fa-print"></i> Cetak
            </button>
        </div>
    </div>
</div>