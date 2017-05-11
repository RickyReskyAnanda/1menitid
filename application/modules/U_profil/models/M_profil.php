<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_profil extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

       
    public function select_data_user(){
        $this->db->where('id_user',$this->session->userdata('id_user'));
        return $this->db->get('tabel_user')->row_array();
    }
   
    public function update_data_anggota(){
        // print_r($_FILES);die;
        $gambar = "";
        if($_FILES['foto']['name']){
            $nmfile = "profil_".date("Ymdhis"); //nama file saya beri nama langsung dan diikuti fungsi time
            $config['file_name']        = $nmfile; //nama yang terupload nantinya
            $config['upload_path']      = 'assets/images/user'; //path folder
            $config['allowed_types']    = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
            $config['max_size']         = '10000'; //maksimum besar file 2M
            $config['max_width']        = '5000'; //lebar maksimum 1288 px
            $config['max_height']       = '3000'; //tinggi maksimu 768 px

            $this->load->library('upload', $config);
            $this->upload->do_upload('foto');
            $data   = $this->upload->data();
            $gambar = $data['file_name'];

            $this->load->library('image_lib');

            $conimg['create_tumb']      = false;
            $conimg['image_libraty']    = 'gd2';
            $conimg['source_image']     = $this->upload->upload_path.$this->upload->file_name;;
            $conimg['maintain_ratio']   = true;
            $conimg['width']            = '300';
            $conimg['height']           = '300';
            $conimg['quality']          = '100';
            
            $this->image_lib->initialize($conimg);
            $this->image_lib->resize();

            if($this->input->post('fp_lama')!='empty.png'){
                unlink('assets/images/user/'.$this->input->post('fp_lama'));
            }

        }

        $gambarktp = "";
        if($_FILES['fotoktp']['name']){
            $nmfile = "ktp_".date("Ymdhis"); //nama file saya beri nama langsung dan diikuti fungsi time
            $config['file_name']        = $nmfile; //nama yang terupload nantinya
            $config['upload_path']      = 'assets/images/ktp'; //path folder
            $config['allowed_types']    = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
            $config['max_size']         = '10000'; //maksimum besar file 2M
            $config['max_width']        = '5000'; //lebar maksimum 1288 px
            $config['max_height']       = '3000'; //tinggi maksimu 768 px

            $this->load->library('upload', $config);
            $this->upload->do_upload('fotoktp');
            $data   = $this->upload->data();
            $gambarktp = $data['file_name'];

            $this->load->library('image_lib');

            $conimg['create_tumb']      = false;
            $conimg['image_libraty']    = 'gd2';
            $conimg['source_image']     = $this->upload->upload_path.$this->upload->file_name;;
            $conimg['maintain_ratio']   = true;
            $conimg['width']            = '500';
            $conimg['height']           = '400';
            $conimg['quality']          = '100';
            
            $this->image_lib->initialize($conimg);
            $this->image_lib->resize();

            if($this->input->post('fk_lama')!='empty.png'){
                unlink('assets/images/user/'.$this->input->post('fk_lama'));
            }

        }

        $data1['nama_user']             =  $this->input->post('nama_user');
        $data1['email_user']            =  $this->input->post('email_user');
        if ($this->input->post!='-'){
            $data1['pass_user']             =  md5($this->input->post('pass'));
        }
        $data1['jk_user']               =  $this->input->post('jk_user');
        $data1['tgl_lahir_user']        =  $this->input->post('tgl_lahir_user');
        $data1['tempat_lahir_user']     =  $this->input->post('tempat_lahir_user');
        $data1['pekerjaan_user']        =  $this->input->post('pekerjaan_user');
        $data1['no_hp_user']            =  $this->input->post('no_hp_user');
        $data1['alamat_user']           =  $this->input->post('alamat_user');
        $data1['foto_profil']           =  $gambar;
        $data1['foto_ktp']              =  $gambarktp;
       
        
        $this->db->where('id_user', $this->session->userdata('id_user'));
        $this->db->update('tabel_user',$data1);

        redirect('user');
    }
}
?>