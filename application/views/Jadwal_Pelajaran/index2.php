<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Halaman Guru</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="<?= base_url('hal_guru'); ?>">Halaman Guru</a></li>
                    <li class="active">Master Jadwal Pelajaran</li>
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
                        Data Jadwal Pelajaran <strong>berhasil</strong>
                        <?= $this->session->flashdata('flash'); ?>!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md">
                <div class="card">
                    <div class="card-header">
                        Tambah Data Jadwal
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="row form-group mt-3 ml-3">
                                <div class="col-md-2">
                                    <label for="hari" class="form-control-label">Hari</label>
                                </div>
                                <div class="col-md-2">
                                    <select class="form-control" id="hari" name="hari">
                                        <option>Hari</option>
                                        <option value="Senin">Senin</option>
                                        <option value="Selasa">Selasa</option>
                                        <option value="Rabu">Rabu</option>
                                        <option value="kamis">Kamis</option>
                                        <option value="jumat">Jum'at</option>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <label for="Jam Ke" class="form-control-label">Jam Ke</label>
                                </div>
                                <div class="col-md-2">
                                    <select class="form-control" id="jam_ke" name="jam_ke">
                                        <option>Jam Ke</option>
                                        <?php foreach ($jam as $j) : ?>
                                        <option value="<?= $j['kd_jam'] ?>">
                                            <?= $j['jam_ke'] ?>
                                        </option>
                                        <?php endforeach ?>
                                    </select>
                                </div>

                                <!-- <div class="col-md-2">
                                    <label for="Jam Ke" class="form-control-label">Jam Ke</label>
                                </div>
                                <div class="col-md-2">
                                    <select class="form-control" id="jam_ke" name="jam_ke">
                                        <option>Jam Ke</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div> -->
                            </div>
                            <div class="row form-group mt-3 ml-3">
                                <div class="col-md-2">
                                    <label for="Jam Mulai" class="form-control-label">Jam Mulai</label>
                                </div>
                                <div class="col-md-2">
                                    <input type="time" class="form-control" name="jam_mulai" id="jam_mulai">
                                </div>
                                <div class="col-md-2">
                                    <label for="Jam Akhir" class="form-control-label">Jam Akhir</label>
                                </div>
                                <div class="col-md-2">
                                    <input type="time" class="form-control" name="jam_akhir" id="jam_akhir">
                                </div>
                            </div>
                            <div class="row form-group mt-3 ml-3">
                                <div class="col-md-2">
                                    <label for="kelas" class="form-control-label">Kelas</label>
                                </div>
                                <div class="col-md-6">
                                    <select class="form-control" id="kelas" name="kelas">
                                        <option>Pilih Kelas</option>
                                        <?php foreach ($kelas as $k) : ?>
                                        <option value="<?= $k['nm_kelas'] ?>">
                                            <?= $k['nm_kelas'] ?>
                                        </option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row form-group mt-3 ml-3">
                                <div class="col-md-2">
                                    <label class="form-control-label">Guru Pengajar</label>
                                </div>
                                <div class="col-md-6">
                                    <select class="form-control" id="kd_guru" name="kd_guru">
                                        <option value="">Pilih Guru</option>
                                        <?php foreach ($guru as $k) : ?>
                                        <option value="<?= $k['kd_guru'] ?>">
                                            <?= $k['nm_guru'] ?>
                                        </option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row form-group mt-3 ml-3">
                                <div class="col-md-2">
                                    <label class="form-control-label">Mata
                                        Pelajaran</label>
                                </div>
                                <div class="col-md-6">
                                    <select class="form-control" id="kd_mapel" name="kd_mapel">
                                        <option>Pilih mapel</option>
                                    </select>
                                </div>
                            </div>
                            <!-- <div class="row form-group mt-3 ml-3">
                                <div class="col-md-2">
                                    <label for="mapel" class="form-control-label">Mata Pelajaran</label>
                                </div>
                                <div class="col-md-6">
                                    <select class="form-control" id="mapel" name="mapel">
                                        <option>Pilih mapel</option>
                                        <?php foreach ($mapel as $k) : ?>
                                        <option value="<?= $k['nm_mapel'] ?>">
                                            <?= $k['nm_mapel'] ?>
                                        </option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                            </div> -->

                            <button type="submit" name="tambah" class="btn btn-primary btn-sm">
                                <i class="fa fa-save"></i> Tambah
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Hari</th>
                    <th>Kelas</th>
                    <th>Jam Ke</th>
                    <th>Waktu</th>
                    <th>Mata Pelajaran</th>
                    <th>Pengajar</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                <?php foreach ($jadwal as $row) : ?>
                <tr>
                    <td align="center"><?= $no++ ?></td>
                    <td><?= $row['hari'] ?></td>
                    <td><?= $row['kelas'] ?></td>
                    <td align="center"><?= $row['jam_ke'] ?></td>
                    <td>
                        <?= date('h:i', strtotime($row['jam_mulai'])) . ' - ' . date('h:i', strtotime($row['jam_akhir'])); ?>
                    </td>
                    <td><?= $row['mapel'] ?></td>
                    <td><?= $row['guru'] ?></td>
                </tr>
            </tbody>
            <?php endforeach; ?>
        </table>
    </div>
</div>


<script src="<?= base_url(); ?>assets/js/jquery-1.10.2.js"></script>
<script>
jQuery(document).ready(function($) {
    $('#kd_guru').change(function() {
        var kd_guru = $('#kd_guru').val();
        console.log(kd_guru);
        if (kd_guru != '') {
            $.ajax({
                url: "<?php echo base_url(); ?>Jadwal_pelajaran/mapel_filter",
                Method: "POST",
                data: {
                    kd_guru: kd_guru
                },
                success: function(data) {
                    $('#kd_mapel').html(data);
                }
            });
        } else {
            $('#kd_mapel').html('<option value="">Pilih Mapel</option>');
        }
    });
});
</script>