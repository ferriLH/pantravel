<?php 
	/**
	 * 
	 */
	class C_Paket extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('M_Data_Paket');
            $this->load->model('M_Data_Booking');
            $this->load->helper('url');
		}

		function index(){
    		$data['paket'] = $this->M_Data_Paket->tampil_data()->result();
    		$data['status'] = $this->M_Data_Booking->getOnProses();
		    $this->load->view('Back/V_Paket',$data);
		}

		function tambah(){
            $data['status'] = $this->M_Data_Booking->getOnProses();
            $this->load->view('Back/V_Tambah_Paket',$data);
		}

		function fasilitas($id_paket){
            $data['status'] = $this->M_Data_Booking->getOnProses();
            $data['id_paket'] = $id_paket;
            $where = array('id_paket' => $id_paket);
		    $data['fasilitas'] = $this->M_Data_Paket->get_fasilitas($where,'fasilitas')->result();
		    $this->load->view('Back/V_Tambah_Fasilitas',$data);
		}

//		function galeri($id_paket){
//            $data['status'] = $this->M_Data_Booking->getOnProses();
//            $data['id_paket'] = $id_paket;
//            //$where = array('id_paket' => $id_paket);
//		    $data['galeri'] = $id_paket; //$this->M_Data_Paket->get_galeri($where,'galeri')->result();
//		    $this->load->view('Back/V_Tambah_Galeri',$data);
//		}

		function edit($id_paket){
            $data['status'] = $this->M_Data_Booking->getOnProses();
            $data['id_paket'] = $id_paket;
            $where = array('id_paket' => $id_paket);
		    $data['paket'] = $this->M_Data_Paket->edit_data($where,'paket')->result();
		    $this->load->view('Back/V_Edit_Paket',$data);
	    }

		function tambah_aksi(){
		$paket = $this->input->post('paket');
		$harga = $this->input->post('harga');
		$destinasi = $this->input->post('destinasi');
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
		$harga = $this->input->post('harga');
		$data = array(
			'paket' => $paket,
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