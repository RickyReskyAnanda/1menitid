<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class A_akun extends MY_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->cek_session('M_akun');
        
    }

    public function index(){
        $this->admin_view('V_akun');
    }      
    public function view_tambah_akun(){
        $this->admin_view('V_akun');
    }
    public function view_edit_akun(){
        $this->admin_view('V_akun');
    }

        public function select_data_akun(){
            $this->M_akun->select_data_akun();
        }
        public function select_data_edit_akun(){
            $this->M_akun->select_data_edit_akun();
        }
        public function insert_data_akun(){
            $this->M_akun->insert_data_akun();
        }
        public function update_data_akun(){
            $this->M_akun->update_data_akun();
        }
        public function delete_data_akun(){
            $this->M_akun->delete_data_akun();
        }
        public function reset_pass_akun(){
            $this->M_akun->reset_pass_akun();
        }

    
}
?>