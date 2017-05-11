<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class U_profil extends MY_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->cek_session('M_profil');
    }
    /**
     |------------------------------------------------------------------------------------------------------------------
     |                                                  KATEGORI
     |------------------------------------------------------------------------------------------------------------------
     |
     */
    public function index(){
        $data['user']=$this->M_profil->select_data_user();
        $this->user_view('V_profil',$data);
    } 
    public function edit_data_pendaftaran($where,$table){
         return $this->db->where($table,$where);
    }

    public function update_data_anggota(){
        $this->M_profil->update_data_anggota();
    }

    

    
}
?>