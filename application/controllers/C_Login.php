<?php
class C_Login extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_Login');
    }
    public function index()
    {
        if ($this->session->userdata('isLoginAdmin') == TRUE) {
            redirect('admin/dashboard');
        }else{
            $this->load->view('V_Login');
        }
    }
    public function auth(){
        $this->form_validation->set_rules('username', 'username', 'required|trim|xss_clean');
        $this->form_validation->set_rules('password', 'password', 'required|trim|xss_clean');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('V_Login');
        }else{
            $usr    = $this->input->post('username');
            $psw    = sha1($this->input->post('password'));
            $cek    = $this->M_Login->cek($usr,$psw);
            if($cek->num_rows() != 0){
                foreach ($cek->result() as $dat){
                    $sess_data['isLoginAdmin']      = TRUE;
                    $sess_data['user']              = $dat->username;
                    $sess_data['email']             = $dat->email;
                    $sess_data['hak']               = $dat->hak_akses;
                    $sess_data['status']            = $dat->status;
                    $this->session->set_userdata($sess_data);
                }
                $this->session->set_userdata($sess_data);
                redirect('admin/dashboard');
            }else {
                $this->session->set_flashdata('failed', '<br>Username atau Password yang anda masukkan salah.');
                redirect('admin');
            }
        }
    }
    function logout(){
        $this->session->sess_destroy();
        redirect('admin');
    }

}