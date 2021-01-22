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
                    <li><a href="<?= base_url('admin'); ?>">Halaman Guru</a></li>
                    <li class="active">Cetak Laporan Jurnal Mengajar</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<!-- 
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
</div> -->
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <strong class="card-title">
                Input Data Laporan Jurnal Mengajar
            </strong>
        </div>
        <form method="get" action="">
            <div class="row form-group mt-3 ml-3">
                <div class="col-md-2">
                    <label>Filter Berdasarkan</label>
                </div>
                <div class="col-md-3">
                    <select name="filter" id="filter" class="form-control">
                        <option value="">Pilih</option>
                        <option value="1">Per Tanggal</option>
                        <option value="2">Per Bulan</option>
                        <option value="3">Per Tahun</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <div id="form-tanggal">
                        <label>Tanggal</label><br>
                    </div>
                </div>
                <div class="col-md-3">
                    <input type="date" name="tanggal" class="input-tanggal form-control" />
                </div>
            </div>
            <div class="row form-group mt-3 ml-3">
                <div class="col-md-2">
                    <div id="form-bulan">
                        <label>Bulan</label>
                    </div>
                </div>
                <div class="col-md-3">
                    <select name="bulan" id="bulan" class="form-control">
                        <option value="">Pilih</option>
                        <option value="1">Januari</option>
                        <option value="2">Februari</option>
                        <option value="3">Maret</option>
                        <option value="4">April</option>
                        <option value="5">Mei</option>
                        <option value="6">Juni</option>
                        <option value="7">Juli</option>
                        <option value="8">Agustus</option>
                        <option value="9">September</option>
                        <option value="10">Oktober</option>
                        <option value="11">November</option>
                        <option value="12">Desember</option>
                    </select>
                </div>

                <div class="col-md-2">
                    <div id="form-tahun">
                        <label>Tahun</label>
                    </div>
                </div>
                <div class="col-md-3">
                    <select name="tahun" id="tahun" class="form-control">
                        <option value="">Pilih</option>
                        <?php
                    foreach($option_tahun as $data)
                        { // Ambil data tahun dari model yang dikirim dari controller
                            echo '<option value="'.$data->tahun.'">'.$data->tahun.'</option>';
                        }
                    ?>
                    </select>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary float-left">Tampilkan</button>
                <button type="reset" class="btn btn-danger float-left">Reset</button>
            </div>
    </div>
    </form>

    <h4><?php echo $ket; ?></h4>
    <br>
    <table class="table table-striped">
        <tr>
            <th>Tanggal</th>
            <th>Pengajar</th>
            <th>Jam Ke</th>
            <th>Kelas</th>
            <th>Mata Pelajaran</th>
            <th>Materi</th>
            <th>Catatan</th>
        </tr>
        <?php
    if( ! empty($transaksi)){
            $no = 1;
        foreach($transaksi as $data){
            $tg_jurnal = date('d-m-Y', strtotime($data->tg_jurnal));
            
            echo "<tr>";
            echo "<td>".$tg_jurnal."</td>";
            echo "<td>".$data->guru."</td>";
            echo "<td>".$data->jam_ke."</td>";
            echo "<td>".$data->kelas."</td>";
            echo "<td>".$data->mapel."</td>";
            echo "<td>".$data->materi."</td>";
            echo "<td>".$data->catatan."</td>";
            echo "</tr>";
            $no++;
    }
    }
    ?>
</div>
</div>

<script>
$(document).ready(function() { // Ketika halaman selesai di load
    $('.input-tanggal').datepicker({
        dateFormat: 'yy-mm-dd' // Set format tanggalnya jadi yyyy-mm-dd
    });
    $('#form-tanggal, #form-bulan, #form-tahun')
        .hide(); // Sebagai default kita sembunyikan form filter tanggal, bulan & tahunnya
    $('#filter').change(function() { // Ketika user memilih filter
        if ($(this).val() == '1') { // Jika filter nya 1 (per tanggal)
            $('#form-bulan, #form-tahun').hide(); // Sembunyikan form bulan dan tahun
            $('#form-tanggal').show(); // Tampilkan form tanggal
        } else if ($(this).val() == '2') { // Jika filter nya 2 (per bulan)
            $('#form-tanggal').hide(); // Sembunyikan form tanggal
            $('#form-bulan, #form-tahun').show(); // Tampilkan form bulan dan tahun
        } else { // Jika filternya 3 (per tahun)
            $('#form-tanggal, #form-bulan').hide(); // Sembunyikan form tanggal dan bulan
            $('#form-tahun').show(); // Tampilkan form tahun
        }
        // $('#form-tanggal input, #form-bulan select, #form-tahun select').val(
        //     ''); // Clear data pada textbox tanggal, combobox bulan & tahun
    })
});
</script>
</table>
<a href="#" target="_blank" class="btn btn-warning">Cetak Laporan</a>