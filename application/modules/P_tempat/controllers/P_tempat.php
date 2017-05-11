<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class P_tempat extends MY_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->cek_session('M_tempat');
    }

    public function index(){
        $data = array();
        $data['tempat'] = $this->M_tempat->select_data_provider_tempat();
        $this->user_view('V_tempat',$data);
    }

    public function detail_tempat(){
        $data = array();
        $data['detail'] = $this->M_tempat->select_data_provider_detail_tempat();
        $this->user_view('V_detail_tempat',$data);
    }   

    public function tambah_provider_tempat(){
        $data = array();
        $this->user_view('V_tambah_tempat',$data);
    }

        public function insert_data_provider_tempat(){
            $this->M_tempat->insert_data_provider_tempat();
        }

}
?>