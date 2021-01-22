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
                    <li class="active">Cetak Siswa</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-3 mt-3 ml-2">
            <form action="" id="FormLaporan">
                <select name="" id="kelas" class="form-control">
                    <option value="Semua">Semua</option>
                    <?php foreach ($kelas as $row): ?>
                    <option value="<?php echo $row->kd_kelas ?>"><?php echo $row->nm_kelas ?></option>
                    <?php endforeach ?>
                </select>
                <br>
                <button type="submit" class="btn btn-primary">Tampil Data</button>
            </form>
        </div>
        <div class="col-md-12 mt-4">
            <div id="result"></div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function() {
    $("#FormLaporan").submit(function(e) {
        e.preventDefault();
        var id = $("#kelas").val();
        //console.log(id);
        var url = "<?= site_url('Cetak_Filter/filter/') ?>" + id;
        $('#result').load(url);
    })
});
</script>