<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_berita extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function select_data_detail_berita(){
        $id = $this->uri->segment(2);
        $this->db->where('id_berita',$id);
        return $this->db->get('tabel_berita')->row_array();
    }

    public function select_data_lainnya(){
        $id = $this->uri->segment(2);
    	$this->db->where('id_berita !=',$id);
    	$data = $this->db->get('tabel_berita', 7)->result_array();

    	$this->load->library('teknikal');
        for ($i=0; $i < count($data); $i++) { 
            $konv = $this->teknikal->namakelink($data[$i]['judul_berita']);
            $data[$i]['link_detail'] =  base_url().$konv.'/'.$data[$i]['id_berita'];
        }
        return $data;
    }

}
?>