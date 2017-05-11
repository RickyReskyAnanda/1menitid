<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class H_beranda extends CI_Controller{

    // public function __construct()
    // {
    //     parent::__construct();
        
    //     //$this->load->model('M_admin');
    // }
    /**
     |------------------------------------------------------------------------------------------------------------------
     |                                                  KATEGORI
     |------------------------------------------------------------------------------------------------------------------
     |
     */
    public function index(){
        $this->load->view('V_header');
        $this->load->view('V_beranda');
        $this->load->view('V_footer');
    }    
    
}
?>