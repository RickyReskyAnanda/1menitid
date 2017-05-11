<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_daftar_tempat extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function select_data_daftar_tempat(){
        $this->db->join('tabel_tempat', 'tabel_tempat.id_tempat = tabel_pendaftaran.id_tempat');
        $this->db->join('tabel_user', 'tabel_user.id_user = tabel_tempat.id_user');
        $this->db->where('tabel_pendaftaran.id_user',$this->session->userdata('id_user'));

        $data =  $this->db->get('tabel_pendaftaran')->result_array();

        $this->load->library('teknikal');


        for ($i=0; $i < count($data); $i++) { 
            $data[$i]['link']=base_url().'user/detail-tempat/'.$this->teknikal->namakelink($data[$i]['nama_tempat']).'/'.$data[$i]['id_tempat'];   

            $this->db->where('id_pendaftaran',$data[$i]['id_pendaftaran']);
            $data[$i]['tanggal'] = $this->db->get('tabel_waktu')->result_array();
            
            for ($a=0; $a < count($data[$i]['tanggal']); $a++) { 
                $data[$i]['tanggal'][$a]['tanggal'] = date_format(date_create($data[$i]['tanggal'][$a]['tanggal']), "d M Y");
            }
            $data[$i]['uang_muka'] = "Rp. " . number_format(($data[$i]['harga']*20)/100,2,',','.'); 
        }
        return $data;
    }

    public function select_data_pendaftaran(){
        $id = $this->input->post('idPendaftaran');

        $this->db->join('tabel_tempat', 'tabel_tempat.id_tempat = tabel_pendaftaran.id_tempat');
        $this->db->join('tabel_user', 'tabel_user.id_user = tabel_tempat.id_user');
        $this->db->where('tabel_pendaftaran.id_pendaftaran',$id);
        $data = $this->db->get('tabel_pendaftaran',1)->row_array();

        $data['uang_muka'] = "Rp. " . number_format(($data['harga']*20)/100,2,',','.'); 

        echo json_encode($data);
    }
}
?>