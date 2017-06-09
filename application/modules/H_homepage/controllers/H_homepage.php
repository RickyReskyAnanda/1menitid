<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class H_homepage extends MY_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_home');
    }

    public function index(){
        $data['terbaru']=$this->M_home->select_data_berita('id_berita',5,0);
        $data['populer']=$this->M_home->select_data_berita('pengunjung',3,0);
        $data['lainnya']=$this->M_home->select_data_berita('id_berita',7,5);
        $this->home_view('V_home',$data);
    }    
    
}
?>