<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_tempat extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function select_data_tempat($status){
        $seleksi = array('status' => $status);
        return $this->db->get_where('tabel_tempat',$seleksi)->result_array();
    }
    public function select_data_detail_tempat(){
        $seleksi = array('id_tempat' => $this->input->post('idTempat'));
        return $this->db->get_where('tabel_tempat',$seleksi)->row_array();
    }
}
?>