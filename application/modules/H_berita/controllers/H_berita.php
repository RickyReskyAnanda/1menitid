<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class H_berita extends MY_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_berita');
    }

    public function index(){
        $data['berita']  = $this->M_berita->select_data_detail_berita();
    	$data['lainnya'] = $this->M_berita->select_data_lainnya();
        $this->home_view('V_detail_berita',$data);
    }    
}
?>