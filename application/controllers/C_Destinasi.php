<?php 
	/**
	 * 
	 */
	class C_Destinasi extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('M_Data_Destinasi');
				$this->load->helper('url');
		}

		function index(){
		$data['destinasi'] = $this->M_Data_Destinasi->tampil_data()->result();
		$this->load->view('Back/V_Destinasi',$data);
		}

		function tambah(){
		$this->load->view('Back/V_Tambah_Destinasi');
		}

		function edit($id_destinasi){
		$where = array('id_destinasi' => $id_destinasi);
		$data['destinasi'] = $this->M_Data_Destinasi->edit_data($where,'destinasi')->result();
		$this->load->view('Back/V_Edit_Destinasi',$data);
	}

		function tambah_aksi(){
		$destinasi = $this->input->post('destinasi');
		$deskripsi = $this->input->post('deskripsi');
		$harga = $this->input->post('harga');
 		$gambar = $this->input->post('gambar');
		$data = array(
			'destinasi' => $destinasi,
			'deskripsi' => $deskripsi,
			'harga' => $harga,
			'gambar' => $gambar
			);
		$this->M_Data_Destinasi->input_data($data,'destinasi');
		redirect('C_Destinasi/index');
		}

		function update(){
		$id = $this->input->post('id_destinasi');
		$destinasi = $this->input->post('destinasi');
		$deskripsi = $this->input->post('deskripsi');
		$harga = $this->input->post('harga');
 		$gambar = $this->input->post('gambar');
		$data = array(
			'destinasi' => $destinasi,
			'deskripsi' => $deskripsi,
			'harga' => $harga,
			'gambar' => $gambar
			);
		$where = array(
		'id_destinasi' => $id
		);
		$this->M_Data_Destinasi->update_data($where,$data,'destinasi');
		redirect('C_Destinasi/index');
		}

		function hapus($id_destinasi){
		$where = array('id_destinasi' => $id_destinasi);
		$this->M_Data_Destinasi->hapus_data($where,'destinasi');
		redirect('C_Destinasi/index');
		}


	}
 ?>