<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class A_tempat extends MY_Controller{

public function __construct()
    {
        parent::__construct();
       $this->load->model('M_tempat');
    }
  
    public function index(){
        $data['tempat'] = $this->M_tempat->select_data_tempat('menunggu');
        $this->admin_view('V_pengajuan_tempat',$data);
    } 
    public function proses_tempat(){
        $data['tempat'] = $this->M_tempat->select_data_tempat('diproses');
        $this->admin_view('V_proses_tempat',$data);
    } 
    public function tempat_diizinkan(){
        $data['tempat'] = $this->M_tempat->select_data_tempat('diterima');
        $this->admin_view('V_tempat_diizinkan',$data);
    } 
    public function tempat_ditolak(){
        $data['tempat'] = $this->M_tempat->select_data_tempat('ditolak');
        $this->admin_view('V_tempat_ditolak',$data);
    }    
    public function view_detail_tempat(){
        $data['tempat'] = $this->M_tempat->select_data_detail_tempat();
        $this->load->view('V_detail_tempat',$data);
    }
}
?>