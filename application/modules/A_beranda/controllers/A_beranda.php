<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class A_beranda extends MY_Controller{

    public function __construct()
    {
        parent::__construct();
    }
    
    public function index(){
        $this->admin_view('V_home');
    }    
}
?>