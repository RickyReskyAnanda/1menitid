<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_berita extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function select_data_berita(){
        $status = $this->input->post('status');
        $start = $this->input->post('start');
        if ($start=='awal') {
            $start=0;
        }elseif ($start=='akhir') {
            $this->db->where('status',$status);
            $start=$this->db->get('tabel_berita')->num_rows();

            $start=$start-($start%10);
        }
        $data['nomor'] = $start;
// print_r($start);
        $this->db->where('status',$status);
        $this->db->limit(10,$start);
        $data['isi'] = $this->db->get('tabel_berita')->result_array();

        echo json_encode($data);
    }

    public function insert_data_admin(){
        $nama_gambar='';
        if($_FILES['gambar_dp']['name']){
            $nmfile = "dp_".date("Ymdhis"); //nama file saya beri nama langsung dan diikuti fungsi time
            $config['file_name']        = $nmfile; //nama yang terupload nantinya
            $config['upload_path']      = 'image/gambar_portofolio/dp'; //path folder
            $config['allowed_types']    = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
            $config['max_size']         = '10000'; //maksimum besar file 2M
            $config['max_width']        = '7000'; //lebar maksimum 1288 px
            $config['max_height']       = '7000'; //tinggi maksimu 768 px

            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            $this->upload->do_upload('gambar_dp');
            $gbr   = $this->upload->data();
            $nama_gambar = $gbr['file_name'];
            
            $this->load->library('image_lib');

            $config['create_thumb']     = false;
            $config['image_library']    = 'gd2';
            $config['source_image']     = $this->upload->upload_path.$this->upload->file_name;
            $config['maintain_ratio']   = true;
            $config['width']            = '400';
            $config['height']           = '400';
            $config['quality']          = '100';
            $this->image_lib->initialize($config);
            $this->image_lib->resize();
        }

        $data['judul_berita']   = $this->input->post('judul_berita');
        $data['deskripsi']      = $this->input->post('deskripsi');
        $data['status']         = $this->input->post('status');
        $data['tgl_rilis']      = date('Y-m-d h:i:s');
        $data['tgl_penulisan']  = date('Y-m-d h:i:s');
        $data['id_admin']       = $this->session->userdata('id_admin');
        $data['gambar']         = $nama_gambar;
        $this->db->insert('tabel_admin',$data);
    }

    public function update_data_admin(){
        $data=array();
        $nama_gambar='';
        if($_FILES['gambar_dp']['name']){
            $nmfile = "dp_".date("Ymdhis"); //nama file saya beri nama langsung dan diikuti fungsi time
            $config['file_name']        = $nmfile; //nama yang terupload nantinya
            $config['upload_path']      = 'image/gambar_portofolio/dp'; //path folder
            $config['allowed_types']    = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
            $config['max_size']         = '10000'; //maksimum besar file 2M
            $config['max_width']        = '7000'; //lebar maksimum 1288 px
            $config['max_height']       = '7000'; //tinggi maksimu 768 px

            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            $this->upload->do_upload('gambar_dp');
            $gbr   = $this->upload->data();
            $nama_gambar = $gbr['file_name'];
            
            $this->load->library('image_lib');

            $config['create_thumb']     = false;
            $config['image_library']    = 'gd2';
            $config['source_image']     = $this->upload->upload_path.$this->upload->file_name;
            $config['maintain_ratio']   = true;
            $config['width']            = '400';
            $config['height']           = '400';
            $config['quality']          = '100';
            $this->image_lib->initialize($config);
            $this->image_lib->resize();
            
            $data['gambar']         = $nama_gambar;
        }

        $data['judul_berita']   = $this->input->post('judul_berita');
        $data['deskripsi']      = $this->input->post('deskripsi');
        $data['status']         = $this->input->post('status');
        $this->db->insert('tabel_admin',$data);
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