<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class A_beranda extends MY_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->cek_session('M_beranda');
    }
    
    public function index(){
        $this->admin_view('V_home');
    }    
    public function view_profil(){
        $this->admin_view('V_profil');
    }    
}
?>