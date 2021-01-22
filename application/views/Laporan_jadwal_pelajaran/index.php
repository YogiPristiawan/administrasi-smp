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
                    <li class="active">Laporan Jadwal Pelajaran</li>
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
                    Cetak Laporan Jadwal Pelajaran
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label class=" form-control-label">
                                    Jenis Jadwal
                                </label>
                            </div>
                            <div class="col col-md-9">
                                <div class="form-check-inline form-check">
                                    <label for="jadwal_guru" class="form-check-label ">
                                        <input type="radio" id="jadwal_guru" name="jadwal_guru" value="Jadwal Guru"
                                            class="form-check-input">Jadwal Guru
                                    </label>
                                    &nbsp;
                                    &nbsp;
                                    <label for="jadwal_siswa" class="form-check-label ">
                                        <input type="radio" id="jadwal_siswa" name="jadwal_siswa" value="Jadwal Siswa"
                                            class="form-check-input">Jadwal Siswa
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="kelas">Kelas</label>
                            <select class="form-control" id="kelas" name="kelas">
                                <option value="7A">7A</option>
                                <option value="8">8</option>
                                <option value=""></option>
                                <option value=""></option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="mapel">Mata Pelajaran</label>
                            <select class="form-control" id="mapel" name="mapel">
                                <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                                <option value=""></option>
                                <option value=""></option>
                                <option value=""></option>
                            </select>
                        </div>

                        <button type="submit" name="cetak" class="btn btn-success btn-sm">
                            <i class="fa fa-dot-circle-o"></i> Cetak
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>