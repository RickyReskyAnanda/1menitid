<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_tempat extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function select_data_provider_tempat(){
        $this->db->where('id_user',$this->session->userdata('id_user'));
        $data = $this->db->get('tabel_tempat')->result_array();

        $this->load->library('teknikal');
        for ($i=0; $i < count($data); $i++) { 
            $data[$i]['link'] = base_url().'user/provider/detail-tempat/'.$this->teknikal->namakelink($data[$i]['nama_tempat']).'/'.$data[$i]['id_tempat'];
            $data[$i]['link_gambar'] = base_url().'assets/images/tempat/dp/'.$data[$i]['gambar_dp'];
        }
        return $data;
    }
    public function select_data_provider_detail_tempat(){
        $this->db->where('id_tempat',$this->uri->segment(5));
        $data = $this->db->get('tabel_tempat')->row_array();        

        $this->db->where('id_back',$this->uri->segment(5));
        $data['gambar'] = $this->db->get('tabel_gambar')->result_array();

        return $data;
    }

    public function insert_data_provider_tempat(){
        if($_FILES['gambar_dp']['name']){
            $nmfile = "dp_".date("Ymdhis"); //nama file saya beri nama langsung dan diikuti fungsi time
            $config['file_name']        = $nmfile; //nama yang terupload nantinya
            $config['upload_path']      = 'assets/images/tempat/dp'; //path folder
            $config['allowed_types']    = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
            $config['max_size']         = '10000'; //maksimum besar file 2M
            $config['max_width']        = '7000'; //lebar maksimum 1288 px
            $config['max_height']       = '7000'; //tinggi maksimu 768 px

            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            $this->upload->do_upload('gambar_dp');
            $gbr   = $this->upload->data();
            $gambar_dp = $gbr['file_name'];
            
            $this->load->library('image_lib');

            $config['create_thumb']     = false;
            $config['image_library']    = 'gd2';
            $config['source_image']     = $this->upload->upload_path.$this->upload->file_name;
            $config['maintain_ratio']   = true;
            $config['width']            = '500';
            $config['height']           = '500';
            $config['quality']          = '100';
            $this->image_lib->initialize($config);
            $this->image_lib->resize();
        }
        //---batas upload gambar DP--

        //---- proses upload foto lokasi ---
        $datafile['gambar_tempat']=$_FILES['gambar_tempat'];
        $name_array = array();
        if($_FILES['gambar_tempat']['size'][0] > 0){
            //---- proses mengupload foto----
            $count = count($_FILES['gambar_tempat']['size']);
            $batasloop=0;
            $this->load->library('image_lib');

            foreach($datafile as $key=>$value){ // proses meng-upload foto
                for($s=0; $s<$count; $s++) {
                    if($batasloop<$count){
                        $_FILES['gambar_tempat']['name']     = $value['name'][$s];
                        $_FILES['gambar_tempat']['type']     = $value['type'][$s];
                        $_FILES['gambar_tempat']['tmp_name'] = $value['tmp_name'][$s];
                        $_FILES['gambar_tempat']['error']    = $value['error'][$s];
                        $_FILES['gambar_tempat']['size']     = $value['size'][$s];
                        $config1['file_name']            = 'galeri_'.date('Ymdhis');
                        $config1['upload_path']          = 'assets/images/tempat';
                        $config1['allowed_types']        = 'gif|jpg|png|jpeg|bmp';
                        $config1['max_size']             = '10000';
                        $config1['max_width']            = '7000';
                        $config1['max_height']           = '7000';
                        $this->load->library('upload', $config1);
                        $this->upload->initialize($config1);
                        $this->upload->do_upload('gambar_tempat');
                        $data = $this->upload->data();
                        $name_array[]=$data['file_name'];

                        $batasloop++;

                        $config1['create_thumb']     = false;
                        $config1['image_library']    = 'gd2';
                        $config1['source_image']     = $this->upload->upload_path.$this->upload->file_name;
                        $config1['maintain_ratio']   = true;
                        $config1['width']            = '700';
                        $config1['height']           = '600';
                        $config1['quality']          = '100';
                        $this->image_lib->initialize($config1);
                        $this->image_lib->resize();
                    }
                }
            }
        }

        //--- data inputan tempat ---
        $datatempat['nama_tempat']    = $this->input->post('nama_tempat');
        $datatempat['jenis_tempat']   = $this->input->post('jenis_tempat');
        $datatempat['pembayaran']     = $this->input->post('pembayaran');
        $datatempat['gambar_dp']      = $gambar_dp;
        $datatempat['lokasi']         = $this->input->post('lokasi');
        $datatempat['id_user']        = $this->session->userdata('id_user');
        $datatempat['luas']           = $this->input->post('luas');
        $datatempat['jam_buka']       = $this->input->post('jam_buka');
        $datatempat['jam_tutup']      = $this->input->post('jam_tutup');
        $datatempat['harga']          = $this->input->post('harga');
        $datatempat['deskripsi_tempat'] = $this->input->post('content');
        // $datatempat['kode_penyedia'] = $this->input->post('content');


        $this->db->insert('tabel_tempat', $datatempat); // menginput data ke tabel tempat

        $this->db->order_by('id_tempat','DESC');
        $this->db->limit(1);
        $this->db->where('nama_tempat',$datatempat['nama_tempat']);
        $data_tempat = $this->db->get('tabel_tempat')->row_array(); // mengambil kembali data dari database untuk diinput ke tabel yang lain
        
        for ($i=0; $i < count($name_array); $i++) { 
            $datagambar['nama_gambar']  = $name_array[$i];
            $datagambar['jenis']        = 'tempat';
            $datagambar['id_back']      = $data_tempat['id_tempat'];

            $this->db->insert('tabel_gambar',$datagambar); // input data ke tabel gambar
        }
        
        redirect('user/provider/tempat');
    }
}
?>