<div class="container mt-3">
	<div class="row">
		<div class="col-lg-6">
			<?php Flasher::flash(); ?>
			
		</div>
		
	</div>

	<div class="row">
		<div class="col-lg-6">
			<!-- Button trigger modal -->
			<button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#forModal">
  				Tambah Data Mahasiswa
			</button>
			<br><br>

			<h3>Daftar Mahasiswa</h3>

			<ul class="list-group">
				<?php foreach ($data['mhs'] as $mhs): ?>
  				<li class="list-group-item ">
  					<?php echo $mhs['nama']; ?>
  <a href="<?php echo BASEURL; ?>/mahasiswa/hapus/<?php echo $mhs['id']; ?>" class="badge badge-danger float-right ml-1" onclick="return confirm('Yakin Mau Hapus???') ">Hapus</a>
  <a href="<?php echo BASEURL; ?>/mahasiswa/ubah/<?php echo $mhs['id']; ?>" class="badge badge-success float-right ml-1 tampilModalUbah" data-toggle="modal" data-target="#forModal" data-id="<?php echo $mhs['id']; ?>">Ubah</a>
  <a href="<?php echo BASEURL; ?>/mahasiswa/detail/<?php echo $mhs['id']; ?>" class="badge badge-primary float-right ml-1">Detail</a>
  				
  					</li>
  				<?php endforeach; ?>
			</ul>	
			
		</div>
	</div>
	

</div>




	<!-- Modal -->
	<div class="modal fade" id="forModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
  	<div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Tambah Data Mahasiswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
     	 </div>
      	<div class="modal-body">
      		<form action="<?php echo BASEURL; ?>/Mahasiswa/tambah" method="post">
      			<input type="text" name="id" id="id">
      			<div class="form-group">
   					 <label for="nama">Nama</label>
   					 <input type="text" class="form-control" id="nama"  name="nama">
  				</div>
  				<div class="form-group">
   					 <label for="nrp">Nrp</label>
   					 <input type="number" class="form-control" id="nrp"  name="nrp">
  				</div>
  				<div class="form-group">
   					 <label for="email">Email</label>
   					 <input type="text" class="form-control" id="email"  name="email">
  				</div>
  				<div class="form-group">
   				 <label for="jurusan">Example select</label>
    				<select class="form-control" id="jurusan" name="jurusan">
      				 <option value="Teknik Informatika">Teknik Informatika</option>
      				 <option value="Teknik Mesin">Tekni Mesin</option>
      				 <option value="Teknik Industri">Teknik Industri</option>
      				 <option value="Teknik Pangan">Teknik Pangan</option>
      				 <option value="Teknik Planologi">Teknik Planologi</option>
      				 <option value="Teknik Lingkungan">Teknik Lingkungan</option>
    				</select>
  				</div>
     	 </div>
     	 <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        	</form>
      </div>
   	 </div>
 	 </div>
	</div>


