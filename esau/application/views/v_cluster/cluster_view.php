<div class="row wrapper bmember-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Cluster</h2>
        <ol class="breadcrumb">
            <li>
                <a href="<?=base_url();?>dashboard">Home</a>
            </li>
            <li class="active">
                <strong>Cluster</strong>
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
                <h5 class="pull-left">Cluster</h5>
            </div>
            <div class="ibox-content">
                <div class="row">
                    <form method="POST" >
                    <div class="form-group col-sm-4">
                        <label>Dari Tanggal</label>
                        <input type="date" class="form-control" name="dari_tanggal" id="dari_tanggal" value="<?php echo date('Y-m-d');?>">
                    </div>
                    <div class="form-group col-sm-4">
                        <label>Sampai Tanggal</label>
                        <input type="date" class="form-control" name="sampai_tanggal" id="sampai_tanggal" value="<?php echo date('Y-m-d');?>">
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
                            <th>Buku</th>
                            <th>Jumlah Transaksi</th>
                            <th>Jumlah Pinjam</th>
                            <th>Jumlah Cluster 1</th>
                            <th>Jumlah Cluster 2</th>
                            <th>Jumlah Cluster 3</th>
                            <th>Cluster 1</th>
                            <th>Cluster 2</th>
                            <th>Cluster 3</th>
                        </thead>
                        <tbody>
                            <?php
                            $no=1;
                            $s_ambang_batas = $this->M_general->get_('ambang_batas', '*');
                            $sc1_1 = $s_ambang_batas[0]->batas_atas;
                            $sc1_2 = $s_ambang_batas[0]->batas_bawah;
                            $sc2_1 = $s_ambang_batas[1]->batas_atas;
                            $sc2_2 = $s_ambang_batas[1]->batas_bawah;
                            $sc3_1 = $s_ambang_batas[2]->batas_atas;
                            $sc3_2 = $s_ambang_batas[2]->batas_bawah;
                            foreach ($buku as $key) {  
                            $s_peminjam_book = $this->M_general->get_('tb_pinjam', 'COUNT(id_pinjam) as jml ','WHERE DATE(tgl_pinjam) BETWEEN "'.$dari_tanggal.'" AND "'.$sampai_tanggal.'" AND id_buku="'.$key->id_buku.'"');
                            $jml_peminjam_book = $s_peminjam_book[0]->jml;
                            $jml_transaksi = $key->jumlah_buku;
                            $c1_sqrt = sqrt(pow($jml_transaksi-$sc1_1,2)+pow($jml_transaksi-$sc1_2,2));
                            $c2_sqrt = sqrt(pow($jml_transaksi-$sc2_1,2)+pow($jml_transaksi-$sc2_2,2));
                            $c3_sqrt = sqrt(pow($jml_transaksi-$sc3_1,2)+pow($jml_transaksi-$sc3_2,2));
                            if($c1_sqrt >= $sc1_2 && $c1_sqrt <= $sc1_1 ){
                                $c1_tampil = 'ok';
                            } 

                            if($c2_sqrt >= $sc2_2 && $c2_sqrt <= $sc2_1 ){
                                $c2_tampil = 'ok';
                            } 

                            if($c3_sqrt >= $sc3_2 && $c3_sqrt <= $sc3_1 ){
                                $c3_tampil = 'ok';
                            } 


                            ?>
                            <tr>
                                <td><?=$no?></td>
                                <td><?=$key->judul_buku?></td>
                                <td><?=$s_peminjam_book[0]->jml;?></td>
                                <td><?=$key->jumlah_buku;?></td>
                                <td><?=$c1_sqrt?></td>
                                <td><?=$c2_sqrt?></td>
                                <td><?=$c3_sqrt?></td>
                                <td><?=$c1_tampil?></td>
                                <td><?=$c2_tampil?></td>
                                <td><?=$c3_tampil?></td>
                            </tr>
                            <?php $no++;} ?>
                        </tbody>
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