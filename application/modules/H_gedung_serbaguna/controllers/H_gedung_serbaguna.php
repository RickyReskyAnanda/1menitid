<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class H_gedung_serbaguna extends MY_Controller{

    public function __construct()
    {
        parent::__construct();
        // $logged_in = $this->session->userdata('logged_in_y');
        //     if($logged_in != "mskmi") {
        //         redirect('A_login');
        //     }else{
        //         $this->load->model('M_admin');
        //     }
    }
    /**
     |------------------------------------------------------------------------------------------------------------------
     |                                                  KATEGORI
     |------------------------------------------------------------------------------------------------------------------
     |
     */
    public function index(){
        $data = array();
        $this->home_view('V_gedung_serbaguna',$data);
    }   

    //-----CRUD Manajemen admin-----------

        public function select_data_admin(){
            $this->M_admin->select_data_admin();
        }
        public function select_data_admin_level(){
            $this->M_admin->select_data_admin_level();
        }
        public function select_jumlah_admin(){
            $this->M_admin->select_jumlah_admin();
        }
        public function insert_data_admin(){
            $this->M_admin->insert_data_admin();
        }
        public function update_data_admin(){
            $this->M_admin->update_data_admin();
        }
        public function delete_data_admin(){
            $this->M_admin->delete_data_admin();
        }
    
}
?>