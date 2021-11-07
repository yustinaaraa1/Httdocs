<div class="row wrapper bmember-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Perhitungan</h2>
        <ol class="breadcrumb">
            <li>
                <a href="<?=base_url();?>dashboard">Home</a>
            </li>
            <li class="active">
                <strong>Perhitungan</strong>
            </li>
        </ol>
    </div>
    <div class="col-lg-2">

    </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight" style="margin-right: 50px;">
    <div class="row">
        <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5 class="pull-left">Perhutungan K-MEANS</h5>
            </div>
            <div class="ibox-content">
                <div class="row">
                    <form method="POST" >
                    <div class="form-group col-sm-4">
                        <label>Dari Tanggal</label>
                        <input class="form-control" name="dari_tanggal" id="dari_tanggal" value="<?php echo date('Y-m-d');?>">
                    </div>
                    <div class="form-group col-sm-4">
                        <label>Sampai Tanggal</label>
                        <input class="form-control" name="sampai_tanggal" id="sampai_tanggal" value="<?php echo date('Y-m-d');?>">
                    </div>
                    <div class="form-group col-sm-4">
                        <button class="btn btn-primary pull-left" type="submit" style="margin-top:24px;">Hitung</button>
                    </div>
                    </form>
                </div>
                <hr>
                <div class="table-responsive">
                    <table class="table table-striped table-bmembered table-hover  dataTable" id="editable" role="grid" aria-describedby="editable_info">
                        <thead>
                            <th>No</th>
                            <th>Nama Guru</th>
                            <th>Jumlah Hadir</th>
                            <th>Gaji Pokok</th>
                            <th>Jumlah Tunjangan</th>
                            <th>Jumlah Potongan</th>
                            <th>Total Gaji</th>
                            <th>Aksi</th>
                        </thead>
                        <tbody>
                            <?php 
                            $no = 0;
                            foreach ($guru as $key){
                            $no++;
                            ?>
                            <tr>
                                <td><?=$no?></td>
                                <td><?=$key->nama_guru?></td>
                                <td><?=$key->jumlah_hadir?></td>
                                <td><?=$key->gaji_pokok?></td>
                                <td><?=uang($key->jumlah_tunjangan)?></td>
                                <td><?=uang($key->jumlah_potongan)?></td>
                                <td><?=uang($key->total_gaji)?></td>
                                <td><a href="<?=base_url()?>gaji/detail/<?=$key->id_gaji?>" class="btn btn-success btn-xs">Detail</a></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                        <tfoot>
                            <th>No</th>
                            <th>Nama Guru</th>
                            <th>Jumlah Hadir</th>
                            <th>Gaji Pokok</th>
                            <th>Jumlah Tunjangan</th>
                            <th>Jumlah Potongan</th>
                            <th>Total Gaji</th>
                            <th>Aksi</th>
                        </tfoot>
                    </table>
                </div>

            </div>
        </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    function cari(){
        var bulan = $('#bulan').val();
        var tahun = $('#tahun').val();
        if(bulan === ''){
            alert('Dari bulan belum diisi');
        } else if(tahun === ''){
            alert('Sampai tahun belum diisi');
        } else {
            window.location.href = '<?=base_url()?>gaji/view/'+bulan+'/'+tahun;
        }
    }
</script>