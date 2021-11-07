

<div class="wrapper wrapper-content">
    <div class="row">
        <div class="col-lg-4">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <span class="label label-success pull-right">Buku</span>
                    <h5>Buku</h5>
                </div>
                <div class="ibox-content">
                    <h1 class="no-margins"><?=$buku[0]->jml?></h1><br>
                    <p>Total Buku</p>
                    
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <span class="label label-primary pull-right">Kategori</span>
                    <h5>Kategori</h5>
                </div>
                <div class="ibox-content">
                    <h1 class="no-margins"><?=$kategori[0]->jml?></h1><br>
                    <p>Total Kategori</p>
                    
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <span class="label label-warning pull-right">Pinjam</span>
                    <h5>Pinjam</h5>
                </div>
                <div class="ibox-content">
                    <h1 class="no-margins"><?=$pinjam[0]->jml?></h1><br>
                    <p>Total Pinjam</p>
                    
                </div>
            </div>
        </div>
        
    </div>
</div>