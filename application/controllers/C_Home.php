<?php
class C_Home extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_Data_Booking');
        $this->load->model('M_Login');

    }
    function index()
    {
        $data['galeri'] = $this->M_Login->get_image_limit();
        $data['paket']  = $this->M_Login->get_all_paket();
        $data['fasilitas'] = $this->M_Login->get_all_fasilitas();
        $this->load->view('Front/V_Home',$data);
    }
    function Book()
    {
        $data['paket'] = $this->M_Data_Booking->get_paket()->result();
        $this->load->view('Front/V_Book',$data);
    }
    function About()
    {
        $this->load->view('Front/V_About');
    }
    function Group()
    {
        $this->load->view('Front/V_Group');
    }
    function Meeting()
    {
        $this->load->view('Front/V_Meeting');
    }
    function Reservasi()
    {
        $this->load->view('Front/V_Reservasi');
    }
    function full_galeri(){
        $data['galeri'] = $this->M_Login->get_all_image();
        $this->load->view('Front/V_Galeri',$data);
    }
    function Admin()
    {
        $data = array(
            "status"=>$this->M_Data_Booking->getOnProses(),
            "done"=>$this->M_Data_Booking->done(),
        );
        if ($this->session->userdata('isLoginAdmin') == TRUE) {
            $this->load->view('Back/V_Home',$data);
        }else{
            redirect('admin');
        }
    }
    function search_keyword()
    {
        $keyword    =   $this->input->get('keyword');
        $data['galeri']    =   $this->M_Login->search($keyword);
        $this->load->view('Front/V_Galeri',$data);
    }

}