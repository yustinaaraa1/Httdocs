<?php 	
class SlipGaji extends CI_Controller{
	public function index()
	{
		$data['title']="Filter Slip Gaji Pegawai";
		$data['pegawai']=$this->penggajianModel->get_data('data_pegawai')->result();
		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar');
		$this->load->view('admin/filterSlipGaji',$data);
		$this->load->view('templates/footer');
	}
	public function cetakSlipGaji()
	{

		$data['title']="Cetak Slip Gaji";
		$data['potongan']=$this->penggajianModel->get_data('potongan_gaji')->result();
		$nama=$this->input->post('nama_pegawai');
		$bulan=$this->input->post('bulan');
		$tahun=$this->input->post('tahun');
		$bulantahun=$bulan.$tahun;

		$data['print_slip']=$this->db->query("SELECT data_pegawai.nik, data_pegawai.nama_pegawai,
			data_jabatan.nama_jabatan,
			data_jabatan.gaji_pokok,data_jabatan.tj_transport,data_jabatan.uang_makan, data_kehadiran.alpha
			FROM data_pegawai
			INNER JOIN data_kehadiran ON data_kehadiran.nik=data_pegawai.nik
			INNER JOIN data_jabatan ON data_jabatan.nama_jabatan=data_pegawai.jabatan
			WHERE data_kehadiran.bulan='$bulantahun' AND data_kehadiran.nama_pegawai='$nama'")->result();
		$this->load->view('templates/header',$data);
		$this->load->view('admin/cetakSlipGaji',$data);
	}
}








 ?>
 <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Informasi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Data Gaji masih kosong silahkan input absensi terlebih dahulu pada bulan dan tahun yang anda pilih
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>