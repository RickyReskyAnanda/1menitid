<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_akun extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function select_data_akun(){
        $level = $this->input->post('level');
        $this->db->where('role',$level);
        echo json_encode($this->db->get('tabel_akun')->result_array());
    }
    public function select_data_edit_akun(){
        $id = $this->input->post('idAkun');
        $this->db->where('id_akun',$id);
        echo json_encode($this->db->get('tabel_akun')->row_array());
    }

    public function insert_data_akun(){
        date_default_timezone_set("Asia/Makassar");

        $data['nama']       = $this->input->post('nama');
        $data['email']      = $this->input->post('email');
        $data['jk']         = $this->input->post('jk');
        $data['alamat']     = $this->input->post('alamat');
        $data['posisi']     = $this->input->post('posisi');
        $data['role']       = $this->input->post('role');
        $data['status']     = $this->input->post('status');
        $data['data_change']= date('Y-m-d h:i:s');
        $data['password']   = md5(md5('admin1mnt').'1mntID').md5('admin1mnt');
        if($this->db->insert('tabel_akun',$data)){
            echo 'berhasil';
        }else{
            echo "gagal";
        }
    }

    public function update_data_akun(){
        date_default_timezone_set("Asia/Makassar");
        
        $data['nama']       = $this->input->post('nama');
        $data['email']      = $this->input->post('email');
        $data['jk']         = $this->input->post('jk');
        $data['alamat']     = $this->input->post('alamat');
        $data['posisi']     = $this->input->post('posisi');
        $data['status']     = $this->input->post('status');
        $data['data_change']= date('Y-m-d h:i:s');

        $id = $this->input->post('id_akun');
        $this->db->where('id_akun',$id);
        if($this->db->update('tabel_akun',$data)){
            echo 'berhasil';
        }else{
            echo "gagal";
        }
    }

    public function delete_data_akun(){ //hapus data rilis
        $id = $this->input->post('id');

        $this->db->where('id_akun', $id);
        if($this->db->delete('tabel_akun')){
            echo "berhasil";
        }else{
            echo "gagal";
        }
    }

    public function reset_pass_akun(){ //hapus data rilis
        $id = $this->input->post('id');

        $data['password']   = md5(md5('admin1mnt').'1mntID').md5('admin1mnt');
        $this->db->where('id_akun', $id);
        if($this->db->update('tabel_akun',$data)){
            echo "berhasil";
        }else{
            echo "gagal";
        }
    }

}
?>