<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class A_berita extends MY_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_berita');
        
    }

    public function index(){
        $this->admin_view('V_berita');
    }      
    public function view_tambah_berita(){
        $this->admin_view('V_tambah_berita');
    }  
    public function view_detail_berita(){
        $data['data']=$this->M_berita->select_data_detail_berita();
        $this->load->view('V_detail_berita',$data);
    }

    //-----CRUD -----------

        public function select_data_berita(){
            $this->M_berita->select_data_berita();
        }
        public function insert_data_berita(){
            $this->M_berita->insert_data_berita();
        }
        public function delete_data_berita(){
            $this->M_berita->delete_data_berita();
        }

    
}
?>