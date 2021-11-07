<div class="row wrapper bmember-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Detail Gaji</h2>
        <ol class="breadcrumb">
            <li>
                <a href="<?=base_url();?>dashboard">Home</a>
            </li>
            <li class="active">
                <strong>Detail Gaji</strong>
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
                <h5 class="pull-left">Detail Gaji</h5>
            </div>
            <div class="ibox-content" id="slipgaji">
                <div class="text-center">
                    <h1 style="font-size: 40px;">Laporan Slip Gaji</h1>
                </div>
                <br><hr>
                <h2>Tanggal Cetak <?=haritanggal(date('Y-m-d')).'&nbsp'.tanggalwow(date('Y-m-d'))?></h2>
                <div class="table-responsive">
                    <h2 style="font-weight: bold;">
                    <table>
                        <tr>
                            <td>NIS</td>
                            <td>&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td>
                            <td><?=$gaji[0]->nis?></td>
                        </tr>
                        <tr height="10"></tr>
                        <tr>
                            <td>Nama Guru</td>
                            <td>&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td>
                            <td><?=$gaji[0]->bulan?></td>
                        </tr>
                        <tr height="10"></tr>
                        <tr>
                            <td>Bulan</td>
                            <td>&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td>
                            <td><?=$gaji[0]->bulan?></td>
                        </tr>
                        <tr height="10"></tr>
                        <tr>
                            <td>Tahun</td>
                            <td>&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td>
                            <td><?=$gaji[0]->tahun?></td>
                        </tr>
                        <tr height="10"></tr>
                        <tr>
                            <td>Gaji Pokok</td>
                            <td>&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td>
                            <td><?=$gaji[0]->gaji_pokok?></td>
                        </tr>
                        <tr height="10"></tr>
                        <tr>
                            <td>Jumlah Hadir</td>
                            <td>&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td>
                            <td><?=$gaji[0]->jumlah_hadir?> Hari</td>
                        </tr>
                        <tr height="10"></tr>
                        <?php foreach($tunjangan as $key){ ?>
                        <tr>
                            <td>Tunjangan <?=$key->nama_tunjangan?></td>
                            <td>&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td>
                            <td><?=uang($key->jumlah_tunjangan)?></td>
                        </tr>
                        <tr height="10"></tr>
                        <?php }?>
                        <?php foreach($potongan as $key){ ?>
                        <tr>
                            <td>Potongan <?=$key->nama_potongan?></td>
                            <td>&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td>
                            <td><?=uang($key->jumlah_potongan)?></td>
                        </tr>
                        <tr height="10"></tr>
                        <?php }?>
                        <tr height="10"></tr>
                        <tr>
                            <td>Total Gaji Diterima</td>
                            <td>&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td>
                            <td><?=uang($gaji[0]->total_gaji)?></td>
                        </tr>
                    </table>
                </h2>
                <br><br>
                </div>
                <div class="row text-right">
                    <a class="btn btn-warning btn-sm " href="<?=$_SERVER['HTTP_REFERER']?>">Kembali</a>
                    <button class="btn btn-success btn-sm" onclick="print_ja()"> Print</button>
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