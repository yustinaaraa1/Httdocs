<div class="row wrapper bmember-bottom white-bg page-heading" >
    <div class="col-lg-10">
        <h2>Setting</h2>
        <ol class="breadcrumb">
            <li>
                <a href="<?=base_url();?>dashboard">Home</a>
            </li>
            <li class="active">
                <strong>Import Data Pinjam</strong>
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

            <bR>
            <div class="col-lg-6">
	            <div class="ibox float-e-margins">
	                <div class="ibox-title">
	                    <h5>Struktur Tabel Data Pinjam</h5>
	                    <div class="ibox-tools">
	                        <a class="collapse-link">
	                            <i class="fa fa-chevron-up"></i>
	                        </a>
	                    </div>
	                </div>
	                <div class="ibox-content">
	                    <form action="#" method="POST" class="form-horizontal">
	                        <div class="form-group">
	                            <label class="col-md-4">Data Pinjam</label>
	                            <div class="col-md-8"><a href="<?=base_url();?>assets/file_excel/data_pinjam.xlsx" class="btn btn-primary btn-xs" target="blank">Download Excel</a></div>
	                        </div>
	                    </form>
	                </div>
	            </div>
	         </div>

            <div class="col-lg-6">
	            <div class="ibox float-e-margins">    
	                <div class="ibox-title">
	                    <h5 id="nama_produk">Insert Data Pinjam</h5>
	                </div>
	                <div class="ibox-content">
	                    <form  action="<?=base_url();?>import_data_pinjam/act" method="post" method="POST" class="form-horizontal" enctype="multipart/form-data">
	                        <div class="form-group">
	                            <label class="col-md-4">Data Pinjam</label>
	                            <div class="col-md-5"><input type="file" name="file"></div>
	                            <div class="col-md-3"><button type="submit" class="btn btn-primary btn-xs">Simpan</button></div>
	                        </div>
	                    </form>
	                </div> 
	            </div>
	        </div>


        </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    function hapus(id){
            url_delete ='<?=base_url();?>master/siswa/siswa_delete/'+id;

           swal({
                title: "Hapus data?",
                text: "data yang dihapus tidak bisa dikembalikan!",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Hapus",
                cancelButtonText: "Batal", 
                closeOnConfirm: false
            }, function () {
                
                $.ajax({
                    url: url_delete,
                    type: 'DELETE',
                    success: function(result) {
                        // Do something with the result
                        swal({
                        title: "Terhapus!",
                        text: "Data behasil dihapus.",
                        type: "success",
                        },function(){location.reload()});
                    }
                });
            });
        };
</script>



                