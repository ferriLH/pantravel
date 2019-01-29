<?php 
	/**
	 * 
	 */
	class C_Fasilitas extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('M_Data_Fasilitas');
            $this->load->model('M_Data_Booking');
            $this->load->helper('url');
		}

		function tambah($id_paket){
            $data['id_paket'] = $id_paket;
            $data['status'] = $this->M_Data_Booking->getOnProses();
            $where = array('id_paket' => $id_paket);
			$data['fasilitas'] = $this->M_Data_Fasilitas->get_fasilitas($where,'fasilitas')->result();
			$this->load->view('Back/V_Tambah_Fasilitas',$data);
		}

		function fasilitas($id_paket){
            $data['status'] = $this->M_Data_Booking->getOnProses();
            $data['id_paket'] = $id_paket;
            $where = array('id_paket' => $id_paket);
		    $data['fasilitas'] = $this->M_Data_Paket->get_fasilitas($where,'fasilitas')->result();
		    $this->load->view('Back/V_Fasilitas',$data);
		}

		function edit($id_fasilitas){
            $data['status'] = $this->M_Data_Booking->getOnProses();
            $data['id_paket'] = $id_fasilitas;
            $where = array('id_fasilitas' => $id_fasilitas);
		    $data['fasilitas'] = $this->M_Data_Fasilitas->edit_data($where,'fasilitas')->result();
		    $this->load->view('Back/V_Edit_Fasilitas',$data);
	}

		function tambah_aksi($id_paket){
		$fasilitas = $this->input->post('fasilitas');
		$data = array(
			'fasilitas' => $fasilitas,
			'id_paket' => $id_paket
			);
		$this->M_Data_Fasilitas->input_data($data,'fasilitas');
		redirect('C_Paket/fasilitas/'.$id_paket);
		}

		function update($id_paket){
		$id = $this->input->post('id_fasilitas');
		$fasilitas = $this->input->post('fasilitas');
		$data = array(
			'fasilitas' => $fasilitas,
			'id_paket' => $id_paket
			);
		$where = array(
		'id_fasilitas' => $id
		);
		$this->M_Data_Fasilitas->update_data($data,'fasilitas');
		redirect('C_Paket/fasilitas/'.$id_paket);
		}

		function hapus($id_fasilitas,$id_paket){
		$where = array('id_fasilitas' => $id_fasilitas);
		$this->M_Data_Fasilitas->hapus_data($where,'fasilitas');
		redirect('C_Paket/fasilitas/'.$id_paket);
		}


	}
 ?>