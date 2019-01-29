<?php 
	/**
	 * 
	 */
	class C_Booking extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('M_Data_Booking');
			$this->load->helper('url');
		}

		function index(){
            $data = array(
                "status"=>$this->M_Data_Booking->getOnProses(),
            );
		    $data['booking'] = $this->M_Data_Booking->tampil_data()->result();
		$this->load->view('Back/V_Booking',$data);
		}

		function tambah(){
            $data = array(
                "status"=>$this->M_Data_Booking->getOnProses(),
            );
		$data['paket'] = $this->M_Data_Booking->get_paket()->result();
		$this->load->view('Back/V_Tambah_Booking',$data);
		}

		function edit($id_booking){
            $data = array(
                "status"=>$this->M_Data_Booking->getOnProses(),
            );
		$where = array('id_booking' => $id_booking);
		$data['booking'] = $this->M_Data_Booking->edit_data($where,'booking')->result();
		$data['paket'] = $this->M_Data_Booking->get_paket()->result();
		//$data['destinasi'] = $this->M_Data_Booking->get_destinasi()->result();
		$this->load->view('Back/V_Edit_Booking',$data);
		}

		function tambah_aksi(){
		$nama_depan = $this->input->post('nama_depan');
		$nama_belakang = $this->input->post('nama_belakang');
		$email = $this->input->post('email');
 		$no_ktp = $this->input->post('no_ktp');
 		$no_hp = $this->input->post('no_hp');
		$paket = $this->input->post('paket');
		$tgl_berangkat = $this->input->post('tgl_berangkat');
		$jml_peserta = $this->input->post('jml_peserta');
		$alamat = $this->input->post('alamat');
		$status = $this->input->post('status');
		$data = array(
			'nama_depan' => $nama_depan,
			'nama_belakang' => $nama_belakang,
			'email' => $email,
			'no_ktp' => $no_ktp,
			'no_hp' => $no_hp,
			'paket' => $paket,
			'tgl_berangkat' => $tgl_berangkat,
			'jml_peserta' => $jml_peserta,
			'alamat' => $alamat,
			'status' => $status
			);
		$this->M_Data_Booking->input_data($data,'booking');
		redirect('C_Booking/index');
		}

		function update(){
		$id = $this->input->post('id_booking');
		$nama_depan = $this->input->post('nama_depan');
		$nama_belakang = $this->input->post('nama_belakang');
		$email = $this->input->post('email');
 		$no_ktp = $this->input->post('no_ktp');
 		$no_hp = $this->input->post('no_hp');
		$paket = $this->input->post('paket');
		//$destinasi = $this->input->post('destinasi');
		$tgl_berangkat = $this->input->post('tgl_berangkat');
		$jml_peserta = $this->input->post('jml_peserta');
		$alamat = $this->input->post('alamat');
		$status = $this->input->post('status');
		$data = array(
			'nama_depan' => $nama_depan,
			'nama_belakang' => $nama_belakang,
			'email' => $email,
			'no_ktp' => $no_ktp,
			'no_hp' => $no_hp,
			'paket' => $paket,
			//'destinasi' => $destinasi,
			'tgl_berangkat' => $tgl_berangkat,
			'jml_peserta' => $jml_peserta,
			'alamat' => $alamat,
			'status' => $status
			);
		$where = array(
		'id_booking' => $id
		);
		$this->M_Data_Booking->update_data($where,$data,'booking');
		redirect('admin/data_booking');
		}
        
        function status($id){
		$data = array(
			'status' => 1
			);
		$where = array(
		'id_booking' => $id
		);
		$this->M_Data_Booking->update_status($where,$data,'booking');
		redirect('admin/data_booking');
		}


		function hapus($id_booking){
		$where = array('id_booking' => $id_booking);
		$this->M_Data_Booking->hapus_data($where,'booking');
		redirect('C_Booking/index');
		}

        function auth(){
            $fname      = $this->input->post('fname');
            $lname      = $this->input->post('lname');
            $email      = $this->input->post('email');
            $noKTP      = $this->input->post('noKTP');
            $noHP       = $this->input->post('noHP');
            $paket      = $this->input->post('paket');
            $tgl        = $this->input->post('tglBerangkat');
            $jml        = $this->input->post('jml');
            $alamat     = $this->input->post('alamat');

            if ($paket==0) {
                $this->session->set_flashdata('failed', '<br>Mohon Pilih Paket!');
                redirect('book/#FormBooking');
            }else{
                    $this->M_Data_Booking->insertBooking($fname,$lname,$email,$noKTP,$noHP,$paket,$tgl,$jml,$alamat);
                    $this->session->set_flashdata('success', '<br>Berhasil. Bookingan anda akan di follow up oleh marketing kami.');
                    redirect('book/#FormBooking');
            }
        }

	}