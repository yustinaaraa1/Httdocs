<?php error_reporting(0);?>
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
                <h5 class="pull-left">Perhitungan K-MEANS</h5>
            </div>
            <div class="ibox-content">
                <div class="table-responsive">
                      <?php 
                      $s_setting = $this->M_general->get_('centroid_temp', '*', 'ORDER BY id DESC');
                      $c1a = $s_setting[0]->c1_a;
                      $c1b = $s_setting[0]->c1_b;
                      $c2a = $s_setting[0]->c2_a;
                      $c2b = $s_setting[0]->c2_b;
                      $c3a = $s_setting[0]->c3_a;
                      $c3b = $s_setting[0]->c3_b;
                      ?>

                    <div class="pull-right">
                        <a type="button" class="btn btn-primary btn-md" onclick="person()"> Proses Iterasi Selanjutnya <li class="fa fa-arrow-right"></li></a>
                    </div>
                    <br><br><br>
                    <table class="table table-striped table-bmembered table-hover  dataTable table-bordered" role="grid" aria-describedby="editable_info">
                        <thead>
                            <tr align="center">
                                <th>Nama Barang</th>
                                <th>Hasil Pht Sangat Sering</th>
                                <th>Hasil Pht Cukup</th>
                                <th>Hasil Pht Kurang</th>
                                <th>Keanggotaan Cluster</th>
                                <th>Minimal Jarak</th>
                                <th>Kuadrat</th>
                                <th>Total Sangat Sering</th>
                                <th>QTY Sangat Sering</th>
                                <th>Total Cukup</th>
                                <th>QTY Cukup</th>
                                <th>Total Kurang</th>
                                <th>QTY Kurang</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php  
                            //$this->db->query('truncate table centroid_temp');
                            //$this->db->query('truncate table hasil_centroid');
                            
                            foreach($buku as $key){ 
                                $s_terjual = $this->M_general->get_('tb_pinjam', 'SUM(jumlah_dipinjam) AS total', 'WHERE bulan="'.$bulan.'" AND tahun="'.$tahun.'"  AND id_buku="'.$key->id_buku.'"');
                                $s_terjual_2 = $this->M_general->get_('tb_pinjam', '*', 'WHERE bulan="'.$bulan.'" AND tahun="'.$tahun.'"  AND id_buku="'.$key->id_buku.'"');
                                //print_r($s_terjual);
                                //die();
                                $total = $s_terjual[0]->total;
                                $qty = $s_terjual_2[0]->jumlah_dipinjam;
                                $perhitungan_keanggotaan = array();
                            ?>
                            <tr>
                                <td>
                                    <?php 
                                    //echo $total.'<br>';
                                    //echo $qty.'<br>';
                                    echo $key->judul_buku; ?>
                                </td>
                                <td>
                                    <?php 
                                    $h1 = sqrt(pow(($total-$c1a),2)+pow(($qty-$c1b),2));
                                    $perhitungan_keanggotaan[0] = $h1;
                                    echo $h1;
                                    ?>
                                </td>
                                <td >
                                    <?php 
                                    $h2 = sqrt(pow(($total-$c2a),2)+pow(($qty-$c2b),2));
                                    $perhitungan_keanggotaan[1] = $h2;
                                    echo $h2;
                                    ?>
                                </td>
                                <td >
                                    <?php 
                                    $h3 = sqrt(pow(($total-$c3a),2)+pow(($qty-$c3b),2));
                                    $perhitungan_keanggotaan[2] = $h3;
                                    echo $h3;
                                    ?>
                                </td>
                                <td>
                                    <?php


                                    $s_max_temp = $this->M_general->get_('centroid_temp', 'MAX(id) as max');
                                    if(empty($s_max_temp[0]->max)){
                                        $max = 1;
                                    } else {
                                        $max = $s_max_temp[0]->max+1;
                                    }
                                    $data_temp_barang['id_group'] = $max;
                                    $data_temp_barang['id_buku'] = $key->id_buku;
                                    if(MIN($perhitungan_keanggotaan) == $h1){
                                        echo 'Sangat Sering';
                                        $keanggotaan = 'C1';
                                        $data_temp_barang['c1'] = 1;
                                        $data_temp_barang['c2'] = 0;
                                        $data_temp_barang['c3'] = 0;
                                    } else if(MIN($perhitungan_keanggotaan) == $h2){
                                        echo 'Cukup';
                                        $keanggotaan = 'C2';
                                        $data_temp_barang['c1'] = 0;
                                        $data_temp_barang['c2'] = 1;
                                        $data_temp_barang['c3'] = 0;
                                    } else {
                                        echo 'Kurang';
                                        $keanggotaan = 'C3';
                                        $data_temp_barang['c1'] = 0;
                                        $data_temp_barang['c2'] = 0;
                                        $data_temp_barang['c3'] = 1;
                                    }
                                    $this->db->insert('centroid_produk_temp', $data_temp_barang);
                                    ?>
                                </td>
                                <td>
                                    <?php 
                                    echo $minimal_jarak = MIN($perhitungan_keanggotaan);
                                    ?>
                                </td>
                                <td>
                                    <?php 
                                    echo $kuadrat[] = pow($minimal_jarak, 2);
                                    ?>
                                </td>
                                <td>
                                    <?php 
                                    if($keanggotaan == 'C1'){
                                        echo $c1_a_temp[] = $total;
                                    }
                                    ?>
                                </td>
                                <td>
                                    <?php 
                                    if($keanggotaan == 'C1'){
                                        echo $c1_b_temp[] = $qty;
                                    }
                                    ?>
                                </td>
                                <td>
                                    <?php 
                                    if($keanggotaan == 'C2'){
                                        echo $c2_a_temp[] = $total;
                                    }
                                    ?>
                                </td>
                                <td>
                                    <?php 
                                    if($keanggotaan == 'C2'){
                                        echo $c2_b_temp[] = $qty;
                                    }
                                    ?>
                                </td>
                                <td>
                                    <?php 
                                    if($keanggotaan == 'C3'){
                                        echo $c3_a_temp[] = $total;
                                    }
                                    ?>
                                </td>
                                <td>
                                    <?php 
                                    if($keanggotaan == 'C3'){
                                        echo $c3_b_temp[] = $qty;
                                    }
                                    ?>
                                </td>
                            </tr> 
                            <?php }?>  
                            <tr>
                                <td colspan="5"></td>
                                <td>WVC</td>
                                <td>
                                    <?php 
                                    echo $wvc_kuadrat = array_sum($kuadrat)/count($kuadrat);
                                    ?>
                                </td>
                                <td>
                                    <?php 
                                    echo $wvc_c1a = array_sum($c1_a_temp)/count($c1_a_temp);
                                    ?>
                                </td>
                                <td>
                                    <?php 
                                    echo $wvc_c1b = array_sum($c1_b_temp)/count($c1_b_temp);
                                    ?>
                                </td>
                                <td>
                                    <?php 
                                    echo $wvc_c2a = array_sum($c2_a_temp)/count($c2_a_temp);
                                    ?>
                                </td>
                                <td>
                                    <?php 
                                    echo $wvc_c2b = array_sum($c2_b_temp)/count($c2_b_temp);
                                    ?>
                                </td>
                                <td>
                                    <?php 
                                    echo $wvc_c3a = array_sum($c3_a_temp)/count($c3_a_temp);
                                    ?>
                                </td>
                                <td>
                                    <?php 
                                    echo $wvc_c3b = array_sum($c3_b_temp)/count($c3_b_temp);
                                    ?>
                                </td>
                                <?php 
                                $j_a_p_c1_c2 = sqrt(pow($c1a-$c2a, 2)+pow($c1b-$c2b, 2));
                                $j_a_p_c1_c3 = sqrt(pow($c1a-$c3a, 2)+pow($c1b-$c3b, 2));
                                $j_a_p_c2_c3 = sqrt(pow($c2a-$c3a, 2)+pow($c2b-$c3b, 2));
                                $bdc = $j_a_p_c1_c2+$j_a_p_c1_c3+$j_a_p_c2_c3;
                                $rasio = $bdc/$wvc_kuadrat;
                                
                                $data_c = array(
                                    'id' => $max,
                                    'c1_a' => $wvc_c1a,
                                    'c1_b' => $wvc_c1b,
                                    'c2_a' => $wvc_c2a,
                                    'c2_b' => $wvc_c2b,
                                    'c3_a' => $wvc_c3a,
                                    'c3_b' => $wvc_c3b,
                                    'rasio' => $rasio
                                );
                                $this->db->insert('centroid_temp', $data_c);
                                //$s_rasio = $this->M_general->get_('centroid_temp', 'COUNT(id) as jml', 'WHERE rasio < "'.$rasio.'"  ');
                                
                                ?>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>


    <script src="<?=base_url() ?>assets/js/jquery-2.1.1.js"></script>
<script type="text/javascript">
    
    function person(){
        var rasio_sekarang = parseFloat('<?=$rasio?>');
        var rasio_sebelumnya = parseFloat('<?=$s_setting[0]->rasio?>');
        //alert(rasio_sekarang);
        //alert(rasio_sebelumnya);
        if(rasio_sekarang > rasio_sebelumnya){
            location.reload();
        } else {
            alert('Proses Iterasi Selesai');
            window.location.href= '<?=base_url()?>cluster/lihat_hasil/';
        }
        
    }
</script>