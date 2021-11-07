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
<div class="wrapper wrapper-content animated fadeInRight" >
    <div class="row">
        <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5 class="pull-left">Perhitungan K-MEANS</h5>
            </div>
            <div class="ibox-content">
                <div class="row">
                    <?php 
                    $i=0;
                    //print_r($iterasi);
                    foreach ($iterasi as $key) {
                    ?>    
                    <div class="table-responsive col-sm-12">
                        <div class="text-center">
                            <br><Br>
                            <h2>Iterasi ke <?=$i?></h2>
                            <br>
                        </div>
                        <table class="table table-striped table-bmembered table-hover  dataTable table-bordered"  role="grid" aria-describedby="editable_info">
                        <thead>
                            <tr align="center">
                                <th>Nama Buku</th>
                                <th>Sangat Sering</th>
                                <th>Cukup</th>
                                <th>Kurang</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $s_temp_produk = $this->M_general->get_('centroid_produk_temp', '*', 'LEFT JOIN tb_buku USING(id_buku) WHERE id_group="'.$key->id.'"');
                            foreach ($s_temp_produk as $key2) {
                            if($key2->c1 == 1){
                                $color_c1 = 'background-color:yellow;';
                            } else {
                                $color_c1 = '';
                            } 
                            if($key2->c2 == 1){
                                $color_c2 = 'background-color:yellow;';
                            }  else {
                                $color_c2 = '';
                            } 
                            if($key2->c3 == 1){
                                $color_c3 = 'background-color:yellow;';
                            }  else {
                                $color_c3 = '';
                            } 
                            ?>
                            <tr>
                                <td><?=$key2->judul_buku?></td>
                                <td style="<?=$color_c1?>"><?=$key2->c1?></td>
                                <td style="<?=$color_c2?>"><?=$key2->c2?></td>
                                <td style="<?=$color_c3?>"><?=$key2->c3?></td>
                            </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                        </table> 
                    </div>
                    <?php 
                    $i++;
                    }
                    ?>
                    <div class="table-responsive col-sm-12">
                    <div class="text-center">
                        <br><Br>
                        <h2>Hasil</h2>
                        <br>
                    </div>
                   <table class="table table-striped table-bmembered table-hover  dataTable table-bordered"  role="grid" aria-describedby="editable_info">
                    <thead>
                        <tr align="center">
                            <th>Nama Buku</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $array_c1 = array();
                        $array_c2 = array();
                        $array_c3 = array();
                        $s_temp_produk_1 = $this->M_general->get_('centroid_produk_temp', '*', 'LEFT JOIN tb_buku USING(id_buku) WHERE id_group="'.$i.'"');
                        foreach ($s_temp_produk_1 as $key2) {
                        if($key2->c1 == 1){
                            $sasa1 = 'Sangat Sering';
                            $color_c1 = 'C1';
                            $array_c1[] = 1;
                        } else {
                            $color_c1 = '';
                            $sasa1 = '';
                        } 
                        if($key2->c2 == 1){
                            $sasa2 = 'Cukup';
                            $color_c2 = 'C2';
                            $array_c2[] = 1;
                        }  else {
                            $color_c2 = '';
                            $sasa2 = '';
                        } 
                        if($key2->c3 == 1){
                            $sasa3 = 'Kurang';
                            $color_c3 = 'C3';
                            $array_c3[] = 1;
                        }  else {
                            $color_c3 = '';
                            $sasa3 = '';
                        } 
                        ?>
                        <tr>
                            <td><?=$key2->judul_buku?></td>
                            <td><?=$sasa1.$sasa2.$sasa3?></td>
                        </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                    </table>
                </div> 
                <div class="col-sm-12" style="margin-top: 100px;">              
                    <div id="chartContainer" style="height: 370px; width: 100%;padding-left: 10px;padding-right: 10px;"></div>
                </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
</div>



<?php

$dataPoints = array( 
    array("y" => array_sum($array_c1), "label" => 'C1'),
    array("y" => array_sum($array_c2), "label" => 'C2'),
    array("y" => array_sum($array_c3), "label" => 'C3'),
);
 
?>
<script>
window.onload = function() {
 
var chart = new CanvasJS.Chart("chartContainer", {
    animationEnabled: true,
    theme: "light2",
    title:{
        text: "Cart"
    },
    data: [{
        type: "column",
        yValueFormatString: "#,##0.## tonnes",
        dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
    }]
});
chart.render();
 
}
</script>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
                  