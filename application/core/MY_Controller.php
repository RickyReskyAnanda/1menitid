<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
    }
    public function home_view($page_isi,$data){
        $this->load->view('H_beranda/V_header',$data);
        $this->load->view($page_isi,$data);
        $this->load->view('H_beranda/V_footer');
    }
    public function user_view($page_isi,$data){
        $this->load->view('U_beranda/V_head',$data);
        $this->load->view($page_isi,$data);
        $this->load->view('U_beranda/V_footer');
    }
    public function admin_view($page_isi,$data=array()){
        $this->load->view('A_beranda/V_header',$data);
        $this->load->view($page_isi,$data);
        $this->load->view('A_beranda/V_footer');
    }

    //redirect login
    public function cek_session($modelnya){
        $logged_in = $this->session->userdata('logged_in');
        if($logged_in != "78jhk391menitID") {
            $this->session->set_flashdata('pesan', 'Silahkan Login Kembali !');
            redirect('1menitadmin');
        }else{
            $this->load->model($modelnya);
        } 
    }
}


?>