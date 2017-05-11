<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class H_balai_diklat extends MY_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('M_balai_diklat');
    }
    public function index(){
        $data = array();
        $data['data']=$this->M_balai_diklat->select_data_balai_diklat();
        $this->home_view('V_balai_diklat',$data);
    }  
     public function load_data_balai_diklat(){ // khusus untuk load button
        $data['data']=$this->M_balai_diklat->select_load_data_balai_diklat();
        $this->load->view('V_load_balai_diklat',$data);
    }  
    public function detail_balai_diklat(){ //menampilkan detail dari setiap tempat
        $data = array();
        $data['detail'] = $this->M_balai_diklat->select_data_detail_balai_diklat();
        $this->home_view('V_detail_balai_diklat',$data);
    }
    public function load_search_balai_diklat(){
        $data['data'] = $this->M_balai_diklat->select_data_search_balai_diklat();
        $this->load->view('V_load_search_balai_diklat',$data);
    }
    public function pencarian_tempat(){
        $data['data'] = $this->M_balai_diklat->select_data_pencarian_tempat();
        $this->load->view('V_pencarian_tempat',$data);
    }
    public function proses_pemesanan(){
        $data['data'] = array();
        $this->home_view('V_pemesanan',$data);   
    }

    public function cek_tanggal_detail_tempat(){ // cek tanggal di detail produk untuk 
        $this->M_balai_diklat->cek_tanggal_detail_tempat();
    }

        public function insert_data_pemesanan_balai(){
            $this->M_balai_diklat->insert_data_pemesanan_balai();
        }
}
?>