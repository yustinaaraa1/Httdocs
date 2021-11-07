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
                <div class="row">
                    <form method="POST" action="<?=base_url()?>cluster/iterasi_kmeans">
                    <div class="form-group col-sm-4">
                        <label>Bulan</label>
                        <select class="form-control" name="bulan" id="bulan">
                            <option value=""> - Pilih Bulan - </option>
                            <option value="Januari" <?php if(date('m') == '01') echo 'Selected'; ?>>Januari</option>
                            <option value="Februari" <?php if(date('m') == '02') echo 'Selected'; ?>>Februari</option>
                            <option value="Maret" <?php if(date('m') == '03') echo 'Selected'; ?>>Maret</option>
                            <option value="April" <?php if(date('m') == '04') echo 'Selected'; ?>>April</option>
                            <option value="Mei" <?php if(date('m') == '05') echo 'Selected'; ?>>Mei</option>
                            <option value="Juni" <?php if(date('m') == '06') echo 'Selected'; ?>>Juni</option>
                            <option value="Juli" <?php if(date('m') == '07') echo 'Selected'; ?>>Juli</option>
                            <option value="Agustus" <?php if(date('m') == '08') echo 'Selected'; ?>>Agustus</option>
                            <option value="September" <?php if(date('m') == '09') echo 'Selected'; ?>>September</option>
                            <option value="Oktober" <?php if(date('m') == '10') echo 'Selected'; ?>>Oktober</option>
                            <option value="November" <?php if(date('m') == '11') echo 'Selected'; ?>>November</option>
                            <option value="Desember" <?php if(date('m') == '12') echo 'Selected'; ?>>Desember</option>
                        </select>
                    </div>
                    <div class="form-group col-sm-4">
                        <label>Tahun</label>
                        <input class="form-control" type="number" name="tahun" id="tahun" value="<?php echo date('Y');?>">
                    </div>
                    <div class="form-group col-sm-4">
                        <button class="btn btn-primary pull-left" type="submit" style="margin-top:24px;">Hitung</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>