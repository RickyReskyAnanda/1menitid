<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class U_daftar_tempat extends MY_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->cek_session('M_daftar_tempat');
    }
   
    public function index(){
        $data = array();
        $data['tempat'] = $this->M_daftar_tempat->select_data_daftar_tempat();
        $this->user_view('V_daftar_tempat',$data);
    }
    public function detail_tempat(){
        $data = array();
        $this->user_view('V_detail_tempat',$data);
    } 
        public function select_data_pendaftaran(){
            $this->M_daftar_tempat->select_data_pendaftaran();
        }
    
}
?>