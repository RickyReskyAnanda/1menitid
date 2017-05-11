<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_beranda extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function select_data_admin(){//mengambil semua data dari table
        echo json_encode($this->db->get('table_admin')->result());
    }

    public function insert_data_admin(){

        $data = array(
            'nama_lengkap'  => $val->admin->nama_lengkap, 
            'password'      => md5($val->admin->ps),
            'email'         => $val->admin->email,
            'no_hp'         => $val->admin->no_hp,
            'level'         => $val->admin->level,
            );
        $this->db->insert('table_admin',$data);

        $this->db->select_max('id_admin');
        $a=$this->db->get('table_admin')->row_array();
        echo $a['id_admin'];
    }

    public function update_data_admin(){
        $data = array(
            'nama_lengkap'  => $val->admin->nama_lengkap, 
            'password'      => md5($val->admin->ps),
            'email'         => $val->admin->email,
            'no_hp'         => $val->admin->no_hp,
            'level'         => $val->admin->level,
            );

        $this->db->where('id_admin',$val->id);
        if($this->db->update('table_admin',$data)){
            echo "Berhasil Mengedit Data";
        }else{
            echo "Gagal Mengedit Data";
        }
    }

    public function delete_data_admin(){ //hapus data rilis

        $this->db->where('id_admin', $val->id);
        if($this->db->delete('table_admin')){
            echo "Berhasil Menghapus Data";
        }else{
            echo "Gagal Menghapus Data";
        }
    }


}
?>