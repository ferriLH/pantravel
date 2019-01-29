<?php 
	/**
	 * 
	 */
	class C_Gambar extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('M_Data_Paket');
			$this->load->helper('url');
		}
		function index(){
		$data['paket'] = $this->M_Data_Paket->tampil_data()->result();
		$this->load->view('Back/V_Paket',$data);
		}

		function tambah(){
		$data['destinasi'] = $this->M_Data_Paket->get_destinasi()->result();
		$this->load->view('Back/V_Tambah_Paket',$data);
		}

		function edit($id_paket){
		$where = array('id_paket' => $id_paket);
		$data['paket'] = $this->M_Data_Paket->edit_data($where,'paket')->result();
		$data['destinasi'] = $this->M_Data_Paket->get_destinasi()->result();
		$this->load->view('Back/V_Edit_Paket',$data);
	}

		function tambah_aksi(){
		$paket = $this->input->post('paket');
		$destinasi = $this->input->post('destinasi');
		$harga = $this->input->post('harga');
		$data = array(
			'paket' => $paket,
			'destinasi' => $destinasi,
			'harga' => $harga
			);
		$this->M_Data_Paket->input_data($data,'paket');
		redirect('C_Paket/index');
		}

		function update(){
		$id = $this->input->post('id_paket');
		$paket = $this->input->post('paket');
		$destinasi = $this->input->post('destinasi');
		$harga = $this->input->post('harga');
		$data = array(
			'paket' => $paket,
			'destinasi' => $destinasi,
			'harga' => $harga
			);
		$where = array(
		'id_paket' => $id
		);
		$this->M_Data_Paket->update_data($where,$data,'paket');
		redirect('C_Paket/index');
		}

		function hapus($id_paket){
		$where = array('id_paket' => $id_paket);
		$this->M_Data_Paket->hapus_data($where,'paket');
		redirect('C_Paket/index');
		}


	}
 ?>