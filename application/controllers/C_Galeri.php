<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Galeri extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Uploadimage_model', 'uploadimage');
        $this->load->model('M_Data_Booking');
        $this->load->model('M_Data_Galeri');
        $this->load->library(array('form_validation', 'session'));
	}

	public function index()
	{
        $data = array(
            "status"=>$this->M_Data_Booking->getOnProses(),
        );
        $where = array('id_paket' => $this->input->post('id_paket'));
		$data['galeri'] = $this->M_Data_Galeri->tampil_data()->result();
		$data['tampil_paket'] = $this->uploadimage->get_data_paket();
		$this->load->view('Back/V_Galeri', $data);
	}

	public function create(){
        $data = array(
            "status"=>$this->M_Data_Booking->getOnProses(),
        );
		$this->rules();
		if ($this->form_validation->run() == FALSE) {
			$data['nama_file'] = $this->input->post('nama_file') ? $this->input->post('nama_file') : '';
		}
		$this->load->view('Back/V_Tambah_Galeri', $data);
	}

	public function store()
	{
		$config = array(
			'upload_path' => './images/',
			'allowed_types' => 'jpeg|jpg|png',
			'max_size' => '2048',
			'max_width' => '2000',
			'max_height' => '2000'
 		);
		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('filefoto')) {
			$this->session->set_flashdata('message', "<div style='color:#ff0000;'>" . $this->upload->display_errors() . "</div>");
			redirect(site_url('C_Galeri/create'));
		} else {
			$file = $this->upload->data();
			$data = array(
					'nama_gambar' => $this->input->post('nama_file'),
					'gambar' => $file['file_name'],
					'kategori' => $this->input->post('kategori')
			);

			$this->uploadimage->insert($data);
		}
		$this->session->set_flashdata('message', "<div style='color:#00a65a;'>Gambar berhasil ditambah.</div>");
		redirect(site_url('C_Galeri'));
	}

	public function edit($id)
	{
		$this->rules();
		$row = $this->uploadimage->get_by_id($id);
		$data = array(
		    'id_galeri' => $row->id_galeri,
			'nama_gambar' => $row->nama_gambar,
			'gambar' => $row->gambar,
            'kategori' => $row->kategori,
            "status"=>$this->M_Data_Booking->getOnProses()
		);
		$this->load->view('Back/V_Edit_Galeri', $data);
	}

	public function update($id)
	{
		$row = $this->uploadimage->get_by_id($id);

		// Do this if there is an image upload
		if ($_FILES AND $_FILES['filefoto']['name']) {
				// Start uploading file
				$config = array(
						'upload_path' => './images/',
						'allowed_types' => 'jpeg|jpg|png',
						'max_size' => '2048',
						'max_width' => '2000',
						'max_height' => '2000'
				);
				$this->load->library('upload', $config);

				if (!$this->upload->do_upload('filefoto')) {
						$this->session->set_flashdata('message', "<div style='color:#ff0000;'>" . $this->upload->display_errors() . "</div>");
						redirect(site_url('uploadimage/edit/' . $row->id_galeri));
				} else {

						// Remove old image in folder 'images' using unlink()
						// unlink() use for delete files like image.
						unlink('images/'.$row->gambar);

						// Upload file
						$file = $this->upload->data();
						$id = $this->input->post('id');
						$data = array(
						        'nama_gambar' => $this->input->post('nama_file'),
                               'kategori' => $this->input->post('kategori'),
								'gambar' => $file['file_name'],
						);

						$this->uploadimage->update($id, $data);
				}
		}
		// Do this if there's no image file uploaded
		else {
				// No file upload
				$id = $this->input->post('id_galeri');
				$data = array(
						'nama_gambar' => $this->input->post('nama_file'),
				);
				$this->uploadimage->update($id, $data);
		}
		$this->session->set_flashdata('message', "<div style='color:#00a65a;'>Gambar berhasil diubah.</div>");
		redirect(site_url('C_Galeri'));
	}

	public function delete($id)
	{
		$row = $this->uploadimage->get_by_id($id);

		if ($row) {

				// unlink() use for delete files like image.
				unlink('images/'.$row->gambar);

				$this->uploadimage->delete($id);
				$this->session->set_flashdata('message', "<div style='color:#00a65a;'>Gambar berhasil dihapus.</div>");
				redirect(site_url('C_Galeri'));
		} else {
				$this->session->set_flashdata('message', "<div style='color:#dd4b39;'>Data tidak ditemukan.</div>");
				redirect(site_url('C_Galeri'));
		}
	}

	public function rules()
	{
		$this->form_validation->set_rules('nama_file', 'Nama File', 'trim|required');
		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
	}
    function add(){
        $data['status'] = $this->M_Data_Booking->getOnProses();
        $this->load->view('Back/V_Tambah_Galeri',$data);
    }
}
