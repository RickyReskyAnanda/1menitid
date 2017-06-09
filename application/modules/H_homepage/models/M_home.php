<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_home extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function select_data_berita($orderby,$limit,$start){
        $this->db->limit($limit,$start);
        $this->db->order_by($orderby,'desc');
        $this->db->where('status', 'rilis');
        $data = $this->db->get('tabel_berita')->result_array();

        $this->load->library('teknikal');
        for ($i=0; $i < count($data); $i++) { 
            $konv = $this->teknikal->namakelink($data[$i]['judul_berita']);
            $data[$i]['link_detail'] =  base_url().$konv.'/'.$data[$i]['id_berita'];
        }
        return $data;
    }


}
?>